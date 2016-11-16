<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:type" content="article" />
        <meta name="author" content="@yield('fb-og-author', 'SheetPub')" />
        <meta property="og:description" content="@yield('fb-og-description', 'ร่วมเรียนรู้และแบ่งปันเนื้อหาของคุณผ่านชีทผับ แหล่งรวมชีทออนไลน์ที่ทุกคนสามารถเข้าถึงได้ทุกที่ทุกเวลา')" />
        <meta property="article:author" content="@yield('fb-og-author', 'SheetPub')" />
        <meta property="article:publisher" content="@yield('fb-og-author', 'SheetPub')" />
        <meta property="og:image" content="{{{ asset('images/fb-og.png') }}}" />
        <title>@yield('title') - SheetPub</title>
        <link rel="stylesheet" href="{{{ asset('css/landing-page.css') }}}">
        <script src ="{{{ asset('js/jquery-3.1.1.min.js') }}}" type="text/javascript"></script>
        <script src="{{{ asset('js/landing-page.js') }}}" ></script>
    </head>
    <body>

    @yield('content')

    </body>
</html>