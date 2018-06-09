
@extends("layout.main")

@section("content")
    <div class="col-sm-8 blog-main">
        
        <div>
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
            </ol><!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="http://ww1.sinaimg.cn/large/44287191gw1excbq6tb3rj21400migrz.jpg" alt="..." />
                    <div class="carousel-caption">...</div>
                </div>
                <div class="item">
                    <img src="http://ww3.sinaimg.cn/large/44287191gw1excbq5iwm6j21400min3o.jpg" alt="..." />
                    <div class="carousel-caption">...</div>
                </div>
                <div class="item">
                    <img src="http://ww2.sinaimg.cn/large/44287191gw1excbq4kx57j21400migs4.jpg" alt="..." />
                    <div class="carousel-caption">...</div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        </div>        
        <div style="height: 20px;">
        </div>

        <div>
            
            @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="/posts/{{$post->id}}" >{{$post->title}}</a></h2>
                <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}<a href="/user/5">Kassandra Ankunding2</a></p>


                  <!-- 下方是讀取DB content但是改為限制個數  參數是指   來源、字數限制、超過顯示 -->
                  <!-- 但是以下會把原生的<p>印出來   -->
                  <!-- <p>{{str_limit($post->content, 100, '...')}}</p>   -->

                  <!-- 所以改為:   -->
                {!! str_limit($post->content, 100, '...') !!}
                
                
                
                  <!-- 下方是原本讀取DB的content   -->
                  <!-- <p>{{$post->content}}</p>   -->
                  <!-- 下方是原本寫死   -->
                  <!-- <p>你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好...   -->
                <p class="blog-post-meta">贊 0  | 評論 0</p>
            </div>
            @endforeach


            <ul class="pagination">

                    <li class="disabled"><span>&laquo;</span></li>


                        {{$posts->links()}}



                                                                        {{--  <li class="active"><span>1</span></li>
                                                                                <li><a href="http://127.0.0.1:8000/posts?page=2">2</a></li>
                                                                                <li><a href="http://127.0.0.1:8000/posts?page=3">3</a></li>
                                                                                <li><a href="http://127.0.0.1:8000/posts?page=4">4</a></li>
                                                                                <li><a href="http://127.0.0.1:8000/posts?page=5">5</a></li>
                                                                                <li><a href="http://127.0.0.1:8000/posts?page=6">6</a></li>
                                                                                <li><a href="http://127.0.0.1:8000/posts?page=7">7</a></li>
                                                                                <li><a href="http://127.0.0.1:8000/posts?page=8">8</a></li>
                                                                                <li><a href="http://127.0.0.1:8000/posts?page=9">9</a></li>
                                                                                <li><a href="http://127.0.0.1:8000/posts?page=10">10</a></li>


                    <li><a href="http://127.0.0.1:8000/posts?page=2" rel="next">&raquo;</a></li>  --}}
            </ul>

        </div><!-- /.blog-main -->
    </div>

@endsection

        