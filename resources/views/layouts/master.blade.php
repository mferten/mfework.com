@stack('logic')
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Head: meta, title, link, script statements -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        {{-- css files --}}
        <link rel="stylesheet" href="css/cssStyle.css">
        {{-- Google Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <!-- require_once("phpfile/require/headTags.php") -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="MFE is a Vegan">
        <meta name="keywords" content="Why MFE is a Vegan?">
        <meta name="author" content="Mehmet Fatih Erten">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- Title --}}
        <title>@yield('title', 'MFE is Vegan')</title>
    </head>
    <body class="gridBox">
        {{-- header --}}
        @stack('header')
        {{-- module --}}
        @stack('module')
        {{-- footer --}}
        <footer>
            <nav>
                <ul class="ulListStyle">
                    <li>
                        <a href="https://www.mfeweb.com" target="_blank">&nbsp;M.F.E Sites&nbsp;</a>
                        <a href="http://www.mywebbench.com" target="_blank">&nbsp;USVI&nbsp;</a>
                        <a href="http://www.mfeworld.com/citations" target="_blank">&nbsp;Citations&nbsp;</a>
                        <a href="https://github.com/mferten" target="_blank">&nbsp;GitHub&nbsp;</a>
                        <a href="https://www.mfeweb.com/mail" target="_blank">&nbsp;Mail&nbsp;</a>
                    </li>
                </ul>
            </nav>
            <span>&copy; {{ date('Y') }} Mehmet F Erten</span>
        </footer>
        @stack('jsFiles')
    </body>
</html>
