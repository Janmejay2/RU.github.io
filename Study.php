<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font Awesome  -->
    <script src="https://kit.fontawesome.com/b449978812.js" crossorigin="anonymous"></script>
    <title>Study Material || Ravenshaw Univerity</title>
</head>
<style>
    #offcanvasLabel {
        font-size: xX-large;
        font-weight: 600;

    }

    .offcanvas-header .offcanvas-title {
        position: relative;
        left: 50px;

    }

    #offcanvas .offcanvas-body {
        /* background-image: url(OB9S700.jpg); */
        align-items: center;
    }


    .custom-btn {
        width: 325px;
        height: 50px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
        outline: none;
        margin: 10px;
    }

    .custom-btnn {
        width: 150px;
        height: 50px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 15px;
        font-family: 'Lato', sans-serif;
        font-weight: 600;

        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
        outline: none;
        margin: 10px;
    }

    /* 16 */
    .btn-16 {
        border: none;
        color: #000;
    }

    .btn-16:after {
        position: absolute;
        content: "";
        width: 0;
        height: 100%;
        top: 0;
        left: 0;
        direction: rtl;
        z-index: -1;
        box-shadow:
            -7px -7px 20px 0px #fff9,
            -4px -4px 5px 0px #fff9,
            7px 7px 20px 0px #0002,
            4px 4px 5px 0px #0001;
        transition: all 0.3s ease;
    }

    .btn-16:hover {
        color: #000;
    }

    .btn-16:hover:after {
        left: auto;
        right: 0;
        width: 100%;
    }

    .btn-16:active {
        top: 2px;
    }

    .emoji {
        font-size: 28px;
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


    <section id="offcanvas">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-color: rgb(rgb(216, 28, 28), green, blue);">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasLabel" style="text-transform: uppercase;">Departments</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>IST</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>ITM</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>BOTANY</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>BUSINESS ADMINISTRATION</span></a></button>
                <button class="custom-btn btn-16 "> <a href=#" style="text-decoration: none; color: #000;" "><span> CHEMISTRY</span></a></button>
                    <button class=" custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>COMMERCE</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span> COMPUTER SCIENCE</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span> ECONOMICS</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span> EDUCATION</span></a></button>
                <button class="custom-btn btn-16 "> <a href=#" style="text-decoration: none; color: #000;" "><span>ENGLISH</span></a></button>
                    <button class=" custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span> GEOGRAPHY</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span> HINDI</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span> HISTORY</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>MATHEMATICS</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>JMC</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>ODIA</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>PHILOSOPHY</span></a></button>
                <button class="custom-btn btn-16 "> <a href=#" style="text-decoration: none; color: #000;" "><span> PHYSICS</span></a></button>
                    <button class=" custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>POLITICAL SCIENCE</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span> PSYCHOLOGY</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span> SANSKRIT</span></a></button>
                <button class="custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>SOCIOLOGY</span></a></button>
                <button class="custom-btn btn-16 "> <a href=#" style="text-decoration: none; color: #000;" "><span> STATISTICS</span></a></button>
                    <button class=" custom-btn btn-16"> <a href="#" style="text-decoration: none; color: #000;"><span>ZOOLOGY </span></a></button>


            </div>
        </div>
    </section>

    <div class="container-sm ">
        <div class=" header-design pt-4 pl-3  ">
            <div class="toggle ml-4" style="position: absolute;left: 10px">
                <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style=" box-shadow: 2px 2px 2px ; "><i class="fa-solid fa-bars fa-2xl pt-2" style="width: 25px; height: 25px ;border: none; "></i>
                </a>
            </div>
            <div class="text-header" style="color: rgb(145, 35, 35);">
                <h3> Department Of Ist</h3>
            </div>
        </div>
    </div>

    <!-- First Semester -->
    <div class="container-sm pt-4">
        <u>
            <h4>First Semester</h4>
        </u>
        <div class="row pt-2">
            <div class="item сol-12 col-md-6 col-lg-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active custom-btnn btn-16" id="v-pills-paper1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper1" type="button" role="tab" aria-controls="v-pills-paper1" aria-selected="true">C-1</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper2" type="button" role="tab" aria-controls="v-pills-paper2" aria-selected="false">C-2</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper3" type="button" role="tab" aria-controls="v-pills-paper3" aria-selected="false">GE-1</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper4" type="button" role="tab" aria-controls="v-pills-paper4" aria-selected="false">AECC</button>
                </div>
            </div>
            <div class="item сol-12 col-md-6 col-lg-10 text-center">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-paper1" role="tabpanel" aria-labelledby="v-pills-paper1-tab" tabindex="0">
                        <h5>Paper Name : Basic Circuit Theory and Network Analysis</h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/file/d/1PgTwZTh1Am5x5PuA8WDVQgWm9qR9bmlP/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 1 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/file/d/1nH8mtOfo3umGCgHft-NzoB8C557EHlY9/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 2 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 3<i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 4<i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="#" style="text-decoration: none;color:#000; font-size: large;">
                                            C-1 2020<i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            C-1 2021 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            C-1 2022 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            C-1 2023 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="https://drive.google.com/file/d/181e28ykvu1NfATRUI_ZlXg_fQ5R-KQaU/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Schaums outline of Electronic Circuit<i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="https://drive.google.com/file/d/1GsTDNGS72z4YKeUK4tGeChzIZNzktPqL/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Fundamentals of Electronics Circuit <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="https://drive.google.com/file/d/1KVUQXutt3M4vXYeHMRpMtWfcWEtkix3c/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Circuit Theory <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="https://drive.google.com/file/d/1CUAyLShSv1jNhrbQOy4NgM8pW-RTqYrM/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Circuit Theory and Network <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-paper2" role="tabpanel" aria-labelledby="v-pills-paper2-tab" tabindex="0">
                        <h5>Paper Name :Programming in C</h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/file/d/1fknsu7-uBOlGUgn66di00BKKUO6zQKDp/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 1 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/file/d/1DlACsLpHp8qaTEaLq3Kfs-RcqB9aP6f5/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 2 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/file/d/1gUAdcO-lQRpnSCkTLXREfxidzBRlUND8/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 3 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-paper3" role="tabpanel" aria-labelledby="v-pills-paper3-tab" tabindex="0">
                        <h5>Paper Name :Mathematics </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/drive/folders/10Yg813lJSY48TDAeZGcgvdLcMscVe4Qs?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 1 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/drive/folders/1sZ1JsUkZdAhczMdvw7ZnVIHWvenG1Qq9?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 2 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/drive/folders/1RJLOogtyx0LkqRue5f38EqxDxunRTsn8?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 3 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="#" style="text-decoration: none;color:#000; font-size: large;">
                                            GE 2020 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="#" style="text-decoration: none;color:#000; font-size: large;">
                                            GE 2021 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="#" style="text-decoration: none;color:#000; font-size: large;">
                                            GE 2022 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="#" style="text-decoration: none;color:#000; font-size: large;">
                                            GE 2023 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="https://drive.google.com/file/d/1evAGAqeDODnxbrHLSqrrMKmEi2OkrN3H/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Rosen - Elementary number theory and its applications <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="https://drive.google.com/file/d/1RvaW3lm49KtGe3wsfvSdrPqK8FXwXGpb/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Operations Research <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="https://drive.google.com/file/d/1UgPng8ryCjVD-eu4IQVnw6RI-UHRgdt7/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Kenneth Rosen <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="https://drive.google.com/file/d/12oUFTzNzLO9n2lohLd39vWGm3BCaynO5/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Advanced engineering mathematics <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="https://drive.google.com/file/d/1_UdLAS9QsRunWtkpsMsdZuHU7NZTXkXR/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            2_OPERATION_RESEARCH (1) <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-paper4" role="tabpanel" aria-labelledby="v-pills-paper4-tab" tabindex="0">
                        <h5>Paper Name :EVS </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/drive/folders/10Yg813lJSY48TDAeZGcgvdLcMscVe4Qs?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 1 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/drive/folders/1sZ1JsUkZdAhczMdvw7ZnVIHWvenG1Qq9?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 2 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="https://drive.google.com/drive/folders/1RJLOogtyx0LkqRue5f38EqxDxunRTsn8?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 3 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="#" style="text-decoration: none;color:#000; font-size: large;">
                                            AECC 2020 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="#" style="text-decoration: none;color:#000; font-size: large;">
                                            AECC 2021 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="#" style="text-decoration: none;color:#000; font-size: large;">
                                            AECC 2022 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="#" style="text-decoration: none;color:#000; font-size: large;">
                                            AECC 2023 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4 text-center">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="https://drive.google.com/file/d/1r39lL1uSLRpkCVpcw2C61XfEULsVKrEc/view?usp=share_link" style="text-decoration: none;color:#000; font-size: large;">
                                            Perspective in Environmental Studies, 2ed. ( PDFDrive )<i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Semester -->
    <div class="container-sm pt-4">
        <u>
            <h4>Second Semester </h4>
        </u>
        <div class="row pt-2">
            <div class="item сol-12 col-md-6 col-lg-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active custom-btnn btn-16" id="v-pills-paper21-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper21" type="button" role="tab" aria-controls="v-pills-paper21" aria-selected="true">C-3</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper22-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper22" type="button" role="tab" aria-controls="v-pills-paper22" aria-selected="false">C-4</button>

                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper23-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper23" type="button" role="tab" aria-controls="v-pills-paper23" aria-selected="false">GE-2</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper24-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper24" type="button" role="tab" aria-controls="v-pills-paper24" aria-selected="false">AECC-2</button>
                </div>
            </div>
            <div class="item сol-12 col-md-6 col-lg-10 text-center">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-paper21" role="tabpanel" aria-labelledby="v-pills-paper21-tab" tabindex="0">
                        <h5>Paper Name :Electronics Circui </h5>
                        <div class="row pt-5">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 1 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 2 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 3 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 4 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            2020 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            2021 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            2022 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-paper22" role="tabpanel" aria-labelledby="v-pills-paper22-tab" tabindex="0">
                        <h5>Paper Name : Data Structure using C</h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 1 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 2 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 3 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 4 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-paper23" role="tabpanel" aria-labelledby="v-pills-paper23-tab" tabindex="0">
                        <h5>Paper Name :Mathematics II </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 1 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 2 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 3 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Unit 4 <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-paper24" role="tabpanel" aria-labelledby="v-pills-paper24-tab" tabindex="0">
                        <h5>Paper Name : MIL (Odia/Hindi/Alt. English) </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Third Semester -->
    <div class="container-sm pt-4">
        <u>
            <h4>Third Semester </h4>
        </u>
        <div class="row pt-2">
            <div class="item сol-12 col-md-6 col-lg-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active custom-btnn btn-16" id="v-pills-paper31-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper31" type="button" role="tab" aria-controls="v-pills-paper31" aria-selected="true"> C-5</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper32-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper32" type="button" role="tab" aria-controls="v-pills-paper32" aria-selected="false">C-6</button>

                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper33-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper33" type="button" role="tab" aria-controls="v-pills-paper33" aria-selected="false">C-7</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper34-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper34" type="button" role="tab" aria-controls="v-pills-paper34" aria-selected="false">GE-3</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper35-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper35" type="button" role="tab" aria-controls="v-pills-paper35" aria-selected="false">SEC-1</button>


                </div>
            </div>
            <div class="item сol-12 col-md-6 col-lg-10 text-center">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-paper31" role="tabpanel" aria-labelledby="v-pills-paper31-tab" tabindex="0">
                        <h5>Paper Name :Digital Electronics </h5>
                        <div class="row pt-5">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-paper32" role="tabpanel" aria-labelledby="v-pills-paper32-tab" tabindex="0">
                        <h5>Paper Name : Computer Networks </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-paper33" role="tabpanel" aria-labelledby="v-pills-paper33-tab" tabindex="0">
                        <h5>Paper Name : Programming in Java </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-paper34" role="tabpanel" aria-labelledby="v-pills-paper34-tab" tabindex="0">
                        <h5>Paper Name :Mathematics III </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-paper35" role="tabpanel" aria-labelledby="v-pills-paper35-tab" tabindex="0">
                        <h5>Paper Name : Communicative English </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Fourth Semester -->
    <div class="container-sm pt-4">
        <u>
            <h4>Fourth Semester </h4>
        </u>
        <div class="row pt-2">
            <div class="item сol-12 col-md-6 col-lg-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active custom-btnn btn-16" id="v-pills-paper41-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper41" type="button" role="tab" aria-controls="v-pills-paper41" aria-selected="true">C-8</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper42-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper42" type="button" role="tab" aria-controls="v-pills-paper42" aria-selected="false">C-9</button>

                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper43-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper43" type="button" role="tab" aria-controls="v-pills-paper43" aria-selected="false">C-10</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper44-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper44" type="button" role="tab" aria-controls="v-pills-paper44" aria-selected="false">GE-4</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper45-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper45" type="button" role="tab" aria-controls="v-pills-paper45" aria-selected="false">SEC-2</button>


                </div>
            </div>
            <div class="item сol-12 col-md-6 col-lg-10 text-center">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-paper41" role="tabpanel" aria-labelledby="v-pills-paper41-tab" tabindex="0">
                        <h5>Paper Name : Microprocessors and
                            Microcontrollers </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-paper42" role="tabpanel" aria-labelledby="v-pills-paper42-tab" tabindex="0">
                        <h5>Paper Name :Operational Amplifier and
                            Application </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-paper43" role="tabpanel" aria-labelledby="v-pills-paper43-tab" tabindex="0">
                        <h5>Paper Name :Operating Systems </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-paper44" role="tabpanel" aria-labelledby="v-pills-paper44-tab" tabindex="0">
                        <h5>Paper Name : Mathematics IV </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-paper45" role="tabpanel" aria-labelledby="v-pills-paper45-tab" tabindex="0">
                        <h5>Paper Name : Quantitative Aptitude & Logical
                            Reasoning
                        </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Fifth Semester -->
    <div class="container-sm pt-4">
        <u>
            <h4>Fifth Semester </h4>
        </u>
        <div class="row pt-2">
            <div class="item сol-12 col-md-6 col-lg-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active custom-btnn btn-16" id="v-pills-paper51-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper51" type="button" role="tab" aria-controls="v-pills-paper51" aria-selected="true">C-11</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper52-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper52" type="button" role="tab" aria-controls="v-pills-paper52" aria-selected="false">C-12</button>

                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper53-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper53" type="button" role="tab" aria-controls="v-pills-paper53" aria-selected="false">DSE-1</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper54-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper54" type="button" role="tab" aria-controls="v-pills-paper54" aria-selected="false">DSE-2</button>


                </div>
            </div>
            <div class="item сol-12 col-md-6 col-lg-10 text-center">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-paper51" role="tabpanel" aria-labelledby="v-pills-paper51-tab" tabindex="0">
                        <h5>Paper Name :  Communication Electronics  </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-paper52" role="tabpanel" aria-labelledby="v-pills-paper52-tab" tabindex="0">
                        <h5>Paper Name : Data Base Management Systems </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-paper53" role="tabpanel" aria-labelledby="v-pills-paper53-tab" tabindex="0">
                        <h5>Paper Name : Data Science </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-paper54" role="tabpanel" aria-labelledby="v-pills-paper54-tab" tabindex="0">
                        <h5>Paper Name : Software Engineering </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Sixth Semester  -->
    <div class="container-sm pt-4">
        <u>
            <h4>Sixth Semester </h4>
        </u>
        <div class="row pt-2">
            <div class="item сol-12 col-md-6 col-lg-2">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active custom-btnn btn-16" id="v-pills-paper61-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper61" type="button" role="tab" aria-controls="v-pills-paper61" aria-selected="true">C-13</button>
                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper62-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper62" type="button" role="tab" aria-controls="v-pills-paper62" aria-selected="false">C-14</button>

                    <button class="nav-link custom-btnn btn-16" id="v-pills-paper63-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paper63" type="button" role="tab" aria-controls="v-pills-paper63" aria-selected="false">DSE-3</button>
                   

                </div>
            </div>
            <div class="item сol-12 col-md-6 col-lg-10 text-center">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-paper61" role="tabpanel" aria-labelledby="v-pills-paper61-tab" tabindex="0">
                        <h5>Paper Name : Signals and Systems </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-paper62" role="tabpanel" aria-labelledby="v-pills-paper62-tab" tabindex="0">
                        <h5>Paper Name :  Programming in Python </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-paper63" role="tabpanel" aria-labelledby="v-pills-paper63-tab" tabindex="0">
                        <h5>Paper Name : Communication Systems </h5>
                        <div class="row p-3">
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">NOTE</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <span class="emoji">&#128073;</span><a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Question</h4>
                                <hr>
                                <div style="text-align: start;">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>

                                </div>
                            </div>
                            <div class="item сol-12 col-md-6 col-lg-4">
                                <h4 style="text-transform: uppercase; text-align: center;">Reference</h4>
                                <hr>
                                <div style="text-align:start">
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                    <p>
                                        <a href="" style="text-decoration: none;color:#000; font-size: large;">
                                            Name here <i class="fa-sharp fa-solid fa-download fa-beat fa-xl" style="color: #242d3d; margin-left: 15px;"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <?php include "Includes/Footer.php"; ?>
</body>

</html>