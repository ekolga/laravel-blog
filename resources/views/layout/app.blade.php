<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<div class="main-container">
    <header class="header">
        <div class="header__logo"><h1>Edward's blog</h1></div>
        <div class="header__navigation">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('topics') }}">Topics</a>
            <a href="#">Contact</a>
        </div>
    </header>

@yield('content')

    <div class="footer-container">
        <div class="footer-container__footer">
            <span>Made by Edward Kolga, 2021</span>
        </div>
    </div>
</div>
</body>
</html>
