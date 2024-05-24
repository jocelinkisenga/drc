<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Viewer;
use App\Services\PostService;
use Carbon\Carbon;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class PostController extends Controller
{
    public function __construct(public PostService $postService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = $this->postService->getAdminPosts();

        return view("pages.listArticles", compact("posts"));
    }

    public function front()
    {
        $articles = $this->postService->getFrontPosts();

        return view("pages.articles", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("pages.addArticle", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        $imgName = Carbon::now()->timestamp . 'patrickngoy.' . $request->file('image')->extension();
        $path = $request->file("image")->storeAs('uploads', $imgName, 'public');

        $this->postService->create($request, $imgName);

        return redirect()->route("dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function show(HttpFoundationRequest $request, $slug, $id)
    {
        $post = $this->postService->getOnePost($id, $request->ip());
        $categories = Category::all();

        return view("pages.article", compact("post", "categories"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(int $id)
    {
        Post::destroy($id);
        return redirect()->back();
    }
}
