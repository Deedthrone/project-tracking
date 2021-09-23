<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <hr>
        <form action="" method="post">
            <div class="field">
            <i class='bx bxs-user'></i>
                <span class="tooltip"></span>
            <input type="text" placeholder="Username" require>
            <hr>
            </div>
            <div class="field">
            <i class='bx bx-key' ></i>
                <span class="tooltip"></span>
            <input type="password" placeholder="Password" require>
            <hr>
            </div class="btn">
                <input type="submit" placeholder="Submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>