@if ($errors->any())
    <div class="alert bg-danger">
        <div>
            @foreach ($errors->all() as $error)
                <p class="text-white">{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert bg-success">
        <div>
            <p class="text-white">{{ Session::get('success') }}</p>
        </div>
    </div>
@endif

@if (Session::has('info'))
    <div class="alert bg-info">
        <div>
            <p class="text-white">{{ Session::get('info') }}</p>
        </div>
    </div>
@endif

@if (Session::has('destroy'))
    <div class="alert" style="background-color: #ff7979;">
        <div>
            <p class="text-white">{{ Session::get('destroy') }}</p>
        </div>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert bg-danger">
        <div>
            <p class="text-white">{{ Session::get('error') }}</p>
        </div>
    </div>
@endif

@if (Session::has('login_success'))
    <div class="alert alert-success">
        <div>
            <p class="text-white">{{ Session::get('login_success') }}</p>
        </div>
    </div>
@endif
