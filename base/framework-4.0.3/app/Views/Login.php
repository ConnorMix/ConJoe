<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="author" content="Your Name">
    <meta name="description" content="basic login page to initiate sessions">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="/base/framework-4.0.3/app/Views/Login.css">

</head>

<body>
    <header>
        <img src="Images/1470713.jpg" width=100%>
    </header>

    <br><br>
    <div id="nav">
        <div id="nav_wrapper">
            <ul>
                <li><a href="Main Page.html">Home</a></li>
                <li><a href="#">Servers<img src="/base/framework-4.0.3/app/Views/Images/arrow.png"></a>
                    <ul>
                        <li><a href="Conan.html">PC Conan Exile</a></li><br>
                        <li><a href="Ark.html">PC Ark Survival Evolved</a></li><br>
                        <li><a href="7dtd.html">PC 7 Days To Die</a></li><br>
                        <li><a href="Minecraft.html">PC Minecraft(Java)</a></li><br>
                        <li><a href="PS4Ark.html">PS4 Ark Survival Evolved</a></li>
                    </ul>
                <li><a href="../Discord.html">Discord</a></li>
                <li><a href="../Discord.html">Team</a></li>
            </ul>
        </div>
    </div>
    <br><br>
    <div id=loginWindow>
        <form action="/action_page.php">
            <label for="username">Username:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="lname" name="lname"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <footer></footer>
    <script type="text/javascript" src=""></script>
</body>

</html>
