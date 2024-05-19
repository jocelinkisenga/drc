<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Coupon;
use App\Models\Post;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
$categories = Category::latest()->get();
$posts = Post::inRandomOrder()->latest()->limit(12)->get();

        return view("pages.index",compact("categories", "posts"));
    }

    public function dashboard()  {
        $posts = Post::latest()->get();
        $coupons = Coupon::latest()->get();
        $videos = Video::latest()->get();
        return view("dashboard",compact("coupons","posts","videos"));
    }

    public function live(){
        return view("pages.live");
    }

    private function weekly() {
        $now  =  Carbon::now();
        $start = $now->startOfWeek()->format('Y-m-d H:i:s');
        $end = $now->endOfWeek()->format('Y-m-d H:i:s');
        return Post::whereBetween('created_at',[$start,$end])->inRandomOrder()->limit(6)->get();
    }
}
