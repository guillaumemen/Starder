<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: #666666;
            color: #FFE919;
        }
        .card-body {
            border: #FFE919 solid 3px;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        #profil_pic {
            border: #FFE919 solid 3px;
            border-radius: 100%;
            width: 30%;
            height: 50%;
        }
        #name-side {
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #side {
            width: 3%;
            height: 3%;
        }
        .dropdown-item {
            text-decoration: none;
            border: #FFE919 solid 2px;
            border-radius: 10px;
            background-color: #FFE919;
            padding: 10px;
            color: Black;
            text-align: center;
        }
    </style>
    <title>Home {{ Auth::user()->first_name }}</title>
</head>
<body>
<li class="nav-item dropdown">
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="profile">
                        <img id="profil_pic" src="{{ asset("profil_pics/" . Auth::user()->avatar) }}" alt="[{{ Auth::user()->avatar }}]" />
                        <div id="name-side">
                            <p>
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                            </p>
                            <img id="side" src="{{ asset("icons/" . Auth::user()->side . ".png") }}" alt="[{{ Auth::user()->side }}]" />
                        </div>
                    <p id="name-side">
                        <img id="side" src="{{ asset("icons/Chewbacca.png") }}" alt="Espèce"> : {{ Auth::user()->species }}
                    </p>

                    <div id="description">
                        <p>
                            {{ Auth::user()->description }}
                        </p>
                    </div>

                    <div id="parametre">
                        <form enctype="multipart/form-data" action="/home" method="POST">
                            <label>Update Profile Picture</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form>
{{--                        <form enctype="multipart/form-data" action="/home" method="POST">--}}
{{--                            <label>Change description</label>--}}
{{--                            <textarea name="description" maxlength="255" rows="5" cols="40">--}}
{{--                                {{ Auth::user()->description }}--}}
{{--                            </textarea>--}}
{{--                            <input type="submit">--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
