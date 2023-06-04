<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultural Council || Ravenshaw University</title>
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="icon" type="image/x-icon" href="image/logo1.png">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e12bc36359.js" crossorigin="anonymous"></script>
    <style>
        .container-sm ul {
            list-style-type: disc;
            text-align: justify;
        }

        .container-sm li a {
            font-size: 1.3rem;
            font-weight: 600;
            text-decoration: none;
            color: black;
        }

        .container-sm li a:hover {
            color: red;
        }

        .text-animation {
            display: inline-block;
            font-size: 1.2rem;
            animation: text-effect 1s infinite;
            color: red;
        }

        @keyframes text-effect {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.5;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>

<body>
    <?php include "Includes/header.php"; ?>

    <?php include "Includes/Logobar.php"; ?>

    <?php include "Includes/navbar.php"; ?>


    <!-- head-design -->
    <div class="head-design">
        <img src="Images/Home/Footer/bg1.png" alt="Your Image" class="Headimg" />
        <div class="text1"><a href="#">Cultural Council</a></div>
    </div>

    <!-- body -->
    <div class="container-sm my-5">
        <ul>
            <li><a href="#">About <span class="text-animation">NEW</span></a></li>
            <li><a href="#">Standard Operating Procedure <span class="text-animation">NEW</span></a></li>
            <li><a href="#">Register for PRIDE of Ravenshaw <span class="text-animation">NEW</span></a></li>
        </ul>

    </div>


    <?php include "Includes/Footer.php"; ?>
</body>

</html>