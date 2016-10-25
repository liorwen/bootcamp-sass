<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">
</head>
<body>
<div class="container">
    <div class="title">Login</div>
    <div class="formBody">
        <form action="">

            <li>
                <label for="username"><input type="text" class="username" placeholder="帳號名稱"/></label>
            </li>
            <li>
                <label for="password"><input type="password" class="password" placeholder="密碼"/></label>
            </li>
            <li>
                <a href="#" class="login">Login</a>
            </li>
        </form>
    </div>
    <div class="textLine"><span>or</span></div>
    <div class="otherLogin">
        <a href="" class="fbLogin"> Facebook</a>
        <a href="" class="googleLogin">Google+</a>
    </div>
</div>
</body>
</html>