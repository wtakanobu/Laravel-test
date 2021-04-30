@extends('layouts.app')
<title>home画面</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                     <a href="https://wachi.naviiiva.work/Laravel_test/public/yubins">郵便番号検索</a>
                     <a href="https://wachi.naviiiva.work/Laravel_test/public/form">フォーム画面</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
