@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }} {{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('User logged in Heare !') }}</p>
                    <p>Name : {{ Auth::user()->name }}</p>
                    <p>Email : {{ Auth::user()->email }}</p>
                    <p>Create Date : {{ Auth::user()->created_at }}</p>
                    <p>Update Date : {{ Auth::user()->updated_at }}</p>
                    <br><hr>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit sapiente, repudiandae reiciendis provident ab atque autem voluptate velit facilis voluptas quis quisquam quo sint eaque delectus optio perspiciatis qui commodi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
