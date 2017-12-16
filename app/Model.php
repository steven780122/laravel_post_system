<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;   // 改叫BaseModel是因為現在此新生的Model已叫做Model

// Post 就會對應到表>> posts
class Model extends BaseModel
{
    protected $guarded = [];    // 此BaseModel 的不可以的設為空，這樣之後其他繼承此BaseModel的model都不會有array傳進來需要再設guarded的問題了!
}
