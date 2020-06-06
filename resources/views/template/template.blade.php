<!DOCTYPE html>
<html>

<head>
    @yield('header')
</head>

<body>
    <header>
        <h1><img src="img/unity/logo.png" alt="かきつづりロゴ">かきつづり</h1>
        <div id="search-div">
            <div>
                <input type="text" placeholder="シナリオを検索">
                <button id="search"><img src="img/unity/glass.png" alt="検索アイコン"></button>
            </div>
        </div>
        <button id="write">
            <img src="img/unity/write.png" alt="投稿アイコン">
            <span>シナリオを投稿</span>
        </button>
        <nav>
            <img src="img/unity/bell.png" alt="通知アイコン" id="bell">
            <img src="img/unity/mail.png" alt="メッセージアイコン" id="mail">
            {{-- <img src="img/unity/" alt=""> --}}
        </nav>
    </header>
    <main id="wrapper">
        @yield('content')
    </main>
    <footer>
        <small>© 2020 H. All Rights Reserved.</small>
    </footer>
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
</body>

</html>