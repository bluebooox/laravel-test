<html>
<head>
    <title>Hello/Index</title>
    <style>
    p {font-size:24pt;}
    </style>
</head>
<body>
    <p>{{ $msg }}</p>
    <form method="POST" action="/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>
</html>