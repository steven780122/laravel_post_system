@extends("layout.main")

@section("content")
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <div style="display:inline-flex">
                    <!-- <h2 class="blog-post-title">你好你好</h2>     -->
                    {{--  <h2 class="blog-post-title">{{$title}}</h2>      <!-- 帶參數的寫法 -->  --}}
                    <h2 class="blog-post-title">{{$post->title}}</h2>      <!-- 綁定post傳參的寫法 -->
                                       
                    <!-- 以下是編輯標籤，如我果用controller的isShow控制是否顯示: -->
                    {{--  @if($isShow == true)  --}}
                        <a style="margin: auto"  href="/posts/{{$post->id}}/edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    {{--  @endif  --}}
                        <a style="margin: auto"  href="/posts/{{$post->id}}/delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                                </div>

            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">Kassandra Ankunding2</a></p>

            <p>{{$post->content}}</p>
            <div>
                <a href="/posts/62/zan" type="button" class="btn btn-primary btn-lg">贊</a>

            </div>
        </div>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">評論</div>

            <!-- List group -->
            <ul class="list-group">
                                <li class="list-group-item">
                    <h5>2017-05-28 10:15:08 by Kassandra Ankunding2</h5>
                    <div>
                        這是第一個評論這是第一個評論這是第一個評論這是第一個評論這是第一個評論這是第一個評論這是第一個評論這是第一個評論這是第一個評論
                    </div>
                </li>
                            </ul>
        </div>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">發表評論</div>

            <!-- List group -->
            <ul class="list-group">
                <form action="/posts/comment" method="post">
                    <input type="hidden" name="_token" value="4BfTBDF90Mjp8hdoie6QGDPJF2J5AgmpsC9ddFHD">
                    <input type="hidden" name="post_id" value="62"/>
                    <li class="list-group-item">
                        <textarea name="content" class="form-control" rows="10"></textarea>
                        <button class="btn btn-default" type="submit">提交</button>
                    </li>
                </form>

            </ul>
        </div>

    </div><!-- /.blog-main -->
@endsection


