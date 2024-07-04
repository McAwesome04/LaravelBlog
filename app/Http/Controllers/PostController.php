<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        $allPosts = [
            ['id' => 1, 'title' => 'PHP', 'posted_by' => 'Yamin', 'created_at' => '2022-10-15 16:04:00'],
            ['id' => 2, 'title' => 'JS', 'posted_by' => 'Mohamed', 'created_at' => '2022-10-25 16:22:00'],
            ['id' => 3, 'title' => 'Java', 'posted_by' => 'Ali', 'created_at' => '2022-10-03 14:32:00'],
            ['id' => 4, 'title' => 'C++', 'posted_by' => 'Ahmed', 'created_at' => '2022-10-28 03:22:00']
        ];
        return view('posts.index', ['posts' => $allPosts]);
    }

    public function show($postId){
        return view('posts.show');
    }
}
