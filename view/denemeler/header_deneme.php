<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    
    <!-- Font Awesome CDN Link For Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: 1px solid #000;
        }
        nav{
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        img{
            width: 10%;
            height: 10%;
        }
        .nav-links{
            width: 30%;
            height: 30%;
            display: flex;
            justify-content: center;
        }
        .nav-links li{
            width: 30%;
            list-style-type: none;
            text-align: center;
        }
        .nav-links li a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<nav>
    <img src="../images/motorcycle.jpg" alt="motorcycle">

    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <i class="fa fa-solid fa-hamburger"></i>
    </nav>
</body>
</html>