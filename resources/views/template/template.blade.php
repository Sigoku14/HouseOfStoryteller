<!DOCTYPE html>
<html>

<head>
    @yield('header')
</head>

<body>
    <header>
        <div>
            <h1>かきつづり</h1>
        </div>
    </header>
    <main id="wrapper">
        @yield('content')
    </main>
    <footer>
        <small>© 2020 H. All Rights Reserved.</small>
    </footer>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>