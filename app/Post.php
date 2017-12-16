<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;    // 因為為了讓每個Model在Create by array不要每次都要來打$guarded = []，所以這邊我們已先建立一個
// Model.php，該model.php去放置$guarded = []，所以改如下
use App\Model;


// Post 就會對應到表>> posts
class Post extends Model
{
    // 如果沒有對應到要這樣寫:
    // protected $table = "XXXXXXXX";   //目前我命Post有對應到就不用了!  建議大家都用Laravel建議


    // 因為在PostController create的時候  如果傳入的是數組，會有Mass Assignment的問題:https://laravel.tw/docs/5.0/eloquent#mass-assignment
    // 所以需要在這裡設定guarded和fillable:
    // 全打開也可以不設定$fillable，但把$guarded設為空!


    // protected $guarded;    // 不可以注入的
    // protected $fillable = ['title', 'content'];   // 可以用array注入那些數據，例如假設post有title和content

}
