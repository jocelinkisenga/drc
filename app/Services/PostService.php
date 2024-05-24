<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Category;
use App\Models\Post;
use App\Models\Viewer;

class PostService
{

    public function getAdminPosts()
    {
        return Post::orderBy("created_at", "desc")->paginate(10);
    }

    public function getFrontPosts()
    {
        return Post::orderBy("created_at", "desc")->paginate(12);
    }

    public function create($RequestostData, $imageName)
    {
        Post::create([
            "category_id" => $RequestostData->category_id,
            "title" => $RequestostData->title,
            "slug" => $RequestostData->slug,
            "image" => $imageName,
            "description" => $RequestostData->description
        ]);
    }

    public function getOnePost(int $postId, $ip)
    {
        $post = Post::withCount("viewers")->findOrFail($postId);

        $viewer = Viewer::where("post_id", $post->id)->where("user_ip_address", $ip)->first();

        if (is_null($viewer)) {
            Viewer::create([
                "post_id" => $post->id,
                "user_ip_address" => $ip,
                "viewers" => 1
            ]);
        } else {
            $viewer->update(["viewers" => $viewer->viewers + 1]);
        }

        return $post;
    }
}
