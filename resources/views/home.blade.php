@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>ログインしました！</h1>
                    <p>TOPに戻ってメンターを探しましょう</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
