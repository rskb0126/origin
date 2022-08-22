<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            {{-- formリクエストを送る時に必須な文--}}
            {{-- 他のサイトからのリクエストを許可しないため--}}
            @csrf
            <div class="title">
                <h2>Title</h2>
                {{-- oldを使うことでerrorによる文字列の消去の影響を受けない--}}
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。"{{ old('post.title') }}></textarea>
                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>　
        </form>
        {{-- 記事一覧に戻るリンク --}}
        <div class = 'back'>[<a href='/'>back</a>]</div>
    </body>
</html>
