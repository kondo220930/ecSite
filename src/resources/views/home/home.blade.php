@extends('home.userLayouts.layout')
@section('content')
<style>
    .target{padding:10px;background-color:#C0C0C0;}
</style>
<main class="container">
    <h1>商品一覧</h1>
    <div class="row">
        @foreach ($items as $item)
            <div class="col-4 p-2">
                <div class="card">   
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->explanation }}</p>
                        <p class="card-text">{{ $item->gender }}</p>
                        <p class="card-text">{{ $item->condition }}</p>
                        <p class="card-text">¥{{ $item->price }}</p>
                        <form action="/home/detail" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button class="btn btn-dark">購入</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="rounded target mt-2">
        <form action="/target" method="post">
            @csrf
            <div class="row">
                <div class="input-group col-3">
                    <input type="text" class="form-control" name="moneyMin" placeholder="最小金額" aria-label="最小金額" value="{{ $request['moneyMin'] }}">
                    <span class="input-group-text">~</span>
                    <input type="text" class="form-control" name="moneyMax" placeholder="最大金額" aria-label="最大金額" value="{{ $request['moneyMax'] }}">
                </div>
            </div>
            <div class="row">
                <div class="col-1" class="form-check" role="group"
                    aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="form-check-input" name="man" value="男" id="btncheck1"
                        autocomplete="off" @checked($request['man'])>
                    <label class="form-check-label" for="btncheck1">男</label>
                </div>
                <div class="col-1" class="form-check" role="group"
                    aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="form-check-input" name="girl" value="女" id="btncheck2" 
                    autocomplete="off" @checked($request['girl']) >
                    <label class="form-check-label" for="btncheck2">女</label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" class="form-check" role="group"
                    aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="form-check-input" name="new" value="新品" id="btncheck3"
                        autocomplete="off" @checked($request['new'])>
                    <label class="form-check-label" for="btncheck3">新品</label>
                </div>
                <div class="col-1" class="form-check" role="group"
                    aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="form-check-input" name="old" value="中古品"
                        id="btncheck4" autocomplete="off" @checked($request['old'])>
                    <label class="form-check-label" for="btncheck4">中古品</label>
                </div>
            </div>
            <button type="submit" class="btn btn-dark">
                絞る
            </button>
        </form>
    </div>
</main>
@endsection
