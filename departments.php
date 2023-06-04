<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Departments || Ravenshaw University </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font Awesome  -->
    <script src="https://kit.fontawesome.com/b449978812.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="CSS/style_dept.css">
</head>
<style>
    .cs-card {
        cursor: pointer;
        text-align: center;
        border-radius: 8px;
        box-shadow: 1px 1px 2px #555;
        background-position: center;
        background-size: cover;
        transition: transform 0.5s;
        margin-top: 4rem;
        text-transform: uppercase;
        padding: 5px;

    }


    .cs-card:hover {
        transform: translateY(-10px);
    }

    #a {

        text-decoration: none;
        color: black;
        font-size:medium;
        font-weight: bold;
    }

    .text-header {
        color: rgb(7, 7, 7);
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        text-align: center;
        font-size: 1.5rem;
        text-shadow: 0 0 black;
    }
</style>

<body>
    <?php include "Includes/header.php"; ?>
    <?php include "Includes/Logobar.php"; ?>
    <?php include "Includes/navbar.php"; ?>
    <?php include "Includes/offcanvas.php"; ?>



    <div class="container-sm">
        <div class=" header-design pt-4 pl-3 ">
            <div class="toggle ml-4" style="position: absolute;left: 10px">
                <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="fa-solid fa-bars fa-2xl pt-2" style="width: 30px; height: 25px ;border: none;  "></i>
                </a>
            </div>
            <div class="text-header" style="color: rgb(145, 35, 35);"> Our Departments
            </div>


        </div>
    </div>

    <!-- Departments -->
    <section>
        <div class="container-sm pb-5">
            <!-- 1st Row -->
            <div class="row">
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Botany.jpg" alt="..">
                        <a href="#" id="a">Botany</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Bussiness administrations.jpg" alt="">
                        <a href="#" id="a">Business Admin.</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Chemistry.jpg" alt="">
                        <a href="#" id="a">Chemistry</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Geography.jpg" alt="...">
                        <a href="#" id="a">Commerce</a>
                    </div>
                </div>
            </div>


            <!-- 2nd Row -->
            <div class="row">

                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Commerce.jpg" alt="">
                        <a href="#" id="a">Computer Science</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Economics.jpg" alt="">
                        <a href="#" id="a">Economics</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Education.jpg" alt="">
                        <a href="#" id="a">Education</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/English.jpg" alt="...">
                        <a href="#" id="a">English</a>
                    </div>
                </div>
            </div>
            <!-- 3rd Row -->
            <div class="row">

                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Geography.jpg" alt="...">
                        <a href="#" id="a">Geography</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Geology.jpg" alt="">
                        <a href="#" id="a">Geology</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Hindi.jpg" alt="">
                        <a href="#" id="a">Hindi</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/History.jpg" alt="">
                        <a href="#" id="a">History</a>
                    </div>
                </div>

            </div>
            <!-- 4th Row -->
            <div class="row">
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Mathematics.jpg" alt="...">
                        <a href="#" id="a">Mathematics</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="Ist.php" id="a">
                        <div class="cs-card">

                            <img src="Images/Academics/icons departments/IST.jpg" alt="" href="Ist.php">
                            IST
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/ITM.jpg" alt="">
                        <a href="#" id="a">ITM</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/JMC.jpg" alt="">
                        <a href="#" id="a">JMC</a>
                    </div>
                </div>

            </div>
            <!-- 5th Row -->
            <div class="row">

                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Odia.jpg" alt="">
                        <a href="#" id="a">Odia</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Philosophy.jpg" alt="">
                        <a href="#" id="a">Philosophy</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Physics.jpg" alt="">
                        <a href="#" id="a">Physics</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Political Science.jpg" alt="...">
                        <a href="#" id="a">Political Science</a>
                    </div>
                </div>

            </div>
            <!-- 6th Row -->
            <div class="row">
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Psycology.jpg" alt="">
                        <a href="#" id="a">Psychology</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Sanskrit.jpg" alt="">
                        <a href="#" id="a">Sanskrit</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Sociology.jpg" alt="">
                        <a href="#" id="a">Sociology</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Statistics.jpg" alt="...">
                        <a href="#" id="a">Statistics</a>
                    </div>
                </div>
            </div>
            <!-- 7th Row -->
            <div class="row">
                <div class="col-md-3">
                    <div class="cs-card">
                        <img src="Images/Academics/icons departments/Zoology.jpg" alt="...">
                        <a href="#" id="a">Zoology</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "Includes/Footer.php"; ?>



    <!-- Bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>


</body>

</html>