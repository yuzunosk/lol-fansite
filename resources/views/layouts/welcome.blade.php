<html>
<head>
    <title>Laravel | @yield('title', '登録画面')</title>
</head>
<body>
    @section('sidebar')
        <p>マイページ（共通部分）</p>
        <p>チャンピオンデータ編集（共通部分）</p>
        <p>記事編集（共通部分）</p>
    @show
    
    <div id='container'>
        @yield('content')
    </div>

    @section('footer')
        <script src="app.js"></script>
    @show
</body>
</html>