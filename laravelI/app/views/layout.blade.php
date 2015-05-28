<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cytonn Website</title>
    </head>
    <body>
        <ul>
            <li><a href="./">Home</a></li>
            <li><a href="./services">Services</a></li>
            <li><a href="./contact">Contact</a></li>
        </ul>

        @yield('content')

        Company, {{ date('Y') }}

    </body>
</html>