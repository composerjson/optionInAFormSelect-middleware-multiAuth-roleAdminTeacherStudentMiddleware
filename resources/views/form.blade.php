<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @guest
        <h1>you should login</h1>
    @endguest

    @auth
    <h5>you logined In thanks you</h5>
    @endauth
</body>
</html>