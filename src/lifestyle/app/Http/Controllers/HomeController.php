<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = Auth::user();
        // $posts = POST::all();
        $posts = POST::with('user')->orderBy('created_at', 'desc')->get();
        return view('home', ['auth' => $auth, 'posts' => $posts]);
    }
}
