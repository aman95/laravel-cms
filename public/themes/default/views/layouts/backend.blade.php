<!doctype html>
<html>
<head>
    <title>@yield('title') | hackerShell</title>
    <link rel="stylesheet" href="{{ theme('css/backend.css') }}">
    <script src="{{ theme('js/simplemde.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-static-top navbar-inverse">
        <div class="container">
            <div class="navbar-header"><a href="/" class="navbar-brand">hackerShell</a></div>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('backend.users.index') }}">Users</a></li>
                <li><a href="{{ route('backend.pages.index') }}">Pages</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><span class="navbar-text">Hello, {{ $admin->name }}</span></li>
                <li><a href="{{ route('auth.logout') }}">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>@yield('title')</h3>

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>We found some errors!</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if($status)
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ $status }}
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="{{ theme('js/bootstrap.min.js') }}"></script>

    @yield('script')

</body>
</html>