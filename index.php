<?php
    include("connection.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Inventory</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
            <a class="navbar-brand" href="#" style="font-family: 'Secular One', sans-serif; color: #1A2527;">CAR INVENTORY</a>
    </header>
    <div class="container" style="font-family: 'Secular One', sans-serif;">
        <div class="login-form">
            <br><br>
            <h2 style="text-align: center;">LOGIN</h2><br>
            <form type="form" action="loginValidation.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="username" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="password" required><br><br><br>
                <input type="submit" value="Login" id="submit" name="submit">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">
    </script>
</body>

</html>
