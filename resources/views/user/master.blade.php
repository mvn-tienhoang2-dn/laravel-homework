<!DOCTYPE html>
<html lang="en">

<head>
    @extends('user.shares.top')
</head>

<body>
    <header>
        @extends('user.shares.head')
    </header>

    <div class="container">
        <h1 class="mt-4">
            @yield('title')
        </h1>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        @extends('user.shares.foot');
    </footer>

    @yield('js')
</body>

@extends('user.shares.bottom')

</html>
