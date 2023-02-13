

<html land="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
        <link rel="icon" type="image/x-icon" href="public/images/free-icon-favicon-7915382.png">
    <style>
        a:link {
            color: green;
            background-color: transparent;
            text-decoration: none;
        }
        a:visited {
            color: red;
            background-color: transparent;
            text-decoration: none;
        }
        a:hover {
            color: blue;
            background-color: transparent;
            text-decoration: underline;
        }
        a:active {
            color: yellow;
            background-color: transparent;
            text-decoration: underline;
        }
        table, th, td {
            border:1px solid black;
        }
        th {
            text-align: center;
            background-color: #a0aec0;
        }
        .first table{
            text-align:center;
        }
    </style>
</head>
<body>

    @yield('content')



</body>
</html>
