<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post; // 從這邊拿model

class PostController extends Controller
{
    // 列表
    public function index()
    {
        // 從DB 讀取
        // $posts = Post::orderBy('created_at', 'desc')->get();

        // 想用芬頁
        
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        return view("post/index", compact("posts"));


        // 傳入title array:
        // $posts = [
        //     [
        //         "title" => "this is title1"
        //     ],
        //     [
        //         "title" => "this is title2"
        //     ],
        //     [
        //         "title" => "this is title3"
        //     ]
        // ];
        

        // $topics = [];

        // return view("post/index", ["posts" => $posts]);   // 要在view 新增post/index.blade.php    , 之後可能會有第2個參數
        // return view("post/index", compact("posts", "topics"));   // 因為推薦名字相同，所以推薦使用改用php的compact!!
    }

    // 某個文章詳情
    public function show(Post $post)    // Post是指從route那邊的傳參
    {
        return view("post/show", compact("post"));    // 改為從routes那邊帶參數來
        // return view("post/show", ["title" => "this is title", "isShow" => false]);    // 帶參數到view那邊顯示
    }

    // 創建頁面
    public function create()
    {
        return view("post/create");
    }

    // 創建邏輯    
    public function store()
    {
        // 以下可以測試拿到的request值
        // dd(request()->all());   // 用all() 只會列出token + post欄位資訊等
        // dd(request());   // 也可以中間帶欄位(如果全部就這樣)
        // dd(\Request::all());

        // 以下可以示範一些拿到數據庫的方法
        // 法一: 之前在tinker的方法:
        // $post = new Post();
        // $post->title = request('title');
        // $post->content = request('content');
        // $post->save();


        // 法二: 用create
        // $params = ['title' => request('title'), 'content' => request('content')];
        // Post::create($params);

        // 法三: 用create()接request
        // $params = request(['title', 'content']);    // 其實這跟法二是一樣的，但簡短很多好看很多
        // Post::create($params);

        // 法四: 乾脆寫成一列
        $post = Post::create(request(['title', 'content']));
        // dd($post);   //會發現會有問題>> 是因為只要post


        return redirect('posts');   //redirect是到url不是田view的路徑喔!
        // return;    //還沒寫也要先';'
    }

     // 編輯頁面
    public function edit()
    {
        return view("post/edit");
    }

    // 編輯邏輯
    public function update()
    {

    }

    // 刪除邏輯
    public function delete()
    {

    }

}
