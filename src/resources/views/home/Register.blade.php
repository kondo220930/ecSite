<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        body{
            padding:100px 100px; 
            background-color:#FFFAF0;
        }
        h1{margin-bottom:60px;}
    </style>
</head>
<body>
    <article class="container">
        <h1>会員登録</h1>
        @foreach($errors->all() as $error)
        <span class="text-danger">{{$error}}<br></span>
        @endforeach
        <form action="/InUser" method="post">
            @csrf
            <div class="row">
                <label class="col-2 col-form-label" for="name">お名前<span
                        class="badge bg-danger">必須</span></label>
                <div class="col-8">
                    <input type="text" name="name" id="name" class="form-control" placeholder="お名前">
                </div>
            </div>
            <div class="row">
                <label class="col-2 col-form-label" for="mail_address">メールアドレス<span
                        class="badge bg-danger">必須</span></label>
                <div class="col-8">
                    <input type="text" name="mail_address" id="mail_address" class="form-control"
                        placeholder="E-mal">
                </div>
            </div>
            <div class="row">
                <label class="col-2 col-form-label" for="password">パスワード<span class="badge bg-danger">必須</label>
                <div class="col-8">
                    <input type="text" name="password" id="password" class="form-control"
                        placeholder="パスワード">
                </div>
            </div>
            <button type="submit" class="btn btn-dark">登録</button>
        </form>
        <a href="/" class="btn btn-danger">戻る</a>
</article>
</body>
</html>