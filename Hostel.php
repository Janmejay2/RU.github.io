<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel || Ravenshaw University</title>
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="icon" type="image/x-icon" href="image/logo1.png">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container-sm h3 {
            text-align: center;
            padding: 10px;
        }

        .container-sm li {
            font-size: 15px;
            font-weight: 600;
            padding-bottom: 10px;
        }

        .container-sm li:hover {
            color: white;
        }

        body {
            font-family: "Poppins", Sans-serif;
        }
    </style>

<body>
    <?php include "Includes/header.php"; ?>

    <?php include "Includes/Logobar.php"; ?>

    <?php include "Includes/navbar.php"; ?>


    <!-- head-design -->
    <div class="head-design">
        <img src="Images/Home/Footer/bg1.png" alt="Your Image" class="Headimg" />
        <div class="text1"><a href="Hostel.php">Hostels</a></div>
    </div>

    <!-- body -->
    <div class="container-sm my-5">
        <!-- 1st Row -->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="background-color: #dcd8d8;">
                <h3>Boys Hostel</h3>
                <ul style="list-style-type: none;">
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>
                        > Dharmapada Hostel</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>> East
                        Hostel</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>> West
                        Hostel</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>> Jagannath
                        Chhatrabas</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>> New
                        Hostel</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>> Lalitgiri
                        Hostel</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>> New
                        PG Hostel</a></li>
                </ul>
            </div>

            <div class="col-sm-1"></div>
            <div class="col-sm-5" style="background-color:#dcd8d8;">
                <h3>Girls Hostel</h3>
                <ul style="list-style-type: none;">
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>
                        > Bhargabi Hostel</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>> Daya
                        Hostel</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>> Devi
                        Hostel</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>> Kathajodi
                        Hostel</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a>> Mahanadi
                        Hostel</a></li>
                    <li><a href="#" style="text-decoration:none; text-align: left;"></a> > Parija
                        Hostel</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php include "Includes/Footer.php"; ?>
</body>

</html>