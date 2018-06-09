@extends("layout.main")

@section("content")
    <div class="col-sm-8 blog-main">
        <form action="/posts/{{$post->id}}" method="POST">
            <!-- <input type="hidden" name="_method" value="PUT"> -->
            {{method_field('PUT')}}
            <!-- <input type="hidden" name="_token" value="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy"> -->
            {{csrf_field()}}
            <div class="form-group">
                <label>標題</label>
                <input name="title" type="text" class="form-control" placeholder="這裏是標題" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label>內容</label>
                <textarea id="content" name="content" class="form-control" style="height:400px;max-height:500px;"  placeholder="這裏是內容">
                
                {{$post->content}}
                </textarea>
            </div>

            <!-- 同建置頁面的驗證錯誤(根據controller指定的驗證提示 -->
            <!-- 因為在store的controller那邊已經做了表單驗證，這邊要顯示錯誤訊息:  -->
            <!-- 又因為創建頁面也用了依樣的error提示 所以我們抽出去吧!!! -->
            <!-- @if (count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
            @endif -->

            @include("layout.error")


            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>
    </div><!-- /.blog-main -->
@endsection
