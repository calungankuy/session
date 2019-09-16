<?php
session_start();
if (isset ($_POST['Login']))
$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == "kimi" && $pass = "123") {

$_SESSION['login'] = $user;

echo "<h1>Anda berhasil LOGIN</h1>";
echo "<h2>Klik <a href='lat2.php'>di sini
(lat2.php)</a>
untuk menuju tak terbatas dan melampauinya";

} else {
    ?>
    <html>
    <head>
    <title>Login here...</title>
    </head>
    <body>
    <form action="" method="post">
    <fieldset>Yow mabar
    Welcome To Mobile Legend
    <a href="lat2.php">Latihan 2</a>
    <h2>Login Here...</h2>
    Username : <input type="text" name="user"><br>
    Password : <input type="password" name="pass"><br>
    <input type="submit" name="Login" value="Log In">
    </fieldset>
            </form>
    </body>
</html>
<?php } ?>
