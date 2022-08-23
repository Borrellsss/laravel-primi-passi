<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('../style.css') }}" />
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{route('home')}}">HOME</a>
                </li>
                <li>
                    <a href="{{route('about')}}">ABOUT US</a>
                </li>
                <li>
                    <a href="{{route('shop')}}">SHOP</a>
                </li>
                <li>    
                    <a href="{{route('partners')}}">PARTNERS</a>
                </li>
                <li>
                    <a href="{{route('docs')}}">DOCS</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>SHOP</h1>
    </main>
</body>
</html>