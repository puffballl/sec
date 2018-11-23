<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form class="signup-form" action="index2.php" method="POST">
    <input class="input" type="text" name="input" placeholder="input"><br>
    <input type="radio" name="function" value="1" checked> If ( $var )<br>
    <input type="radio" name="function" value="2" checked> If ( !empty( $var ) )<br>
    <input type="radio" name="function" value="3" checked> If ( $var != '' )<br>
    <input type="radio" name="function" value="4" checked> If ( strlen( $var ) != 0 )<br>
    <input type="radio" name="function" value="5" checked> If ( isset( $var ) )<br>
    <input type="radio" name="function" value="6" checked> If ( is_string( $var ) )<br>
    <button type="submit" name="submit">stuur</button>
</form>
</body>
</html>