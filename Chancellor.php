<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chancellor || Ravenshaw University</title>
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="icon" type="image/x-icon" href="image/logo1.png">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e12bc36359.js" crossorigin="anonymous"></script>
    <style>
        h3 {
            text-align: justify;
            font-size: 2rem;
            font-weight: 600;
        }

        p {
            text-align: justify;
            font-weight: 500;
        }

        .botton {
            display: inline-block;
            position: relative;
            text-align: center;
            vertical-align: middle;
            overflow: hidden;
            border-radius: 10px;
            background-color: rgb(135, 35, 35);
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            padding: 16px 32px;
            transition: all 0.3s ease-in-out;
        }

        .botton:hover {
            background-color: #fff;
            color: black;
            box-shadow: 0px 0px 20px #ddd;
        }

        .botton span {
            display: inline-block;
            position: relative;
            z-index: 1;
        }

        .botton:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            background-color: #fff;
            border-radius: 50%;
            transition: all 0.3s ease-in-out;
        }

        .botton:hover:before {
            width: 300px;
            height: 300px;
            opacity: 0;
        }

        @media only screen and (max-width: 768px) {
            .botton {
                font-size: 14px;
                padding: 12px 24px;
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
        <div class="text1"><a href="#">Chancellor</a></div>
    </div>

    <!-- body -->
    <!-- Image Section -->
    <div class="container-fluid pt-5">
        <div class="row pt-5">
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <img src="Images/Team/img2.png" alt="" style="height: auto; width: 70%;">
                <h3>
                    Prof. Ganeshi Lal
                </h3>
                <p>
                    Honourable Chancellor<br>
                    His Excellency The Governor
                </p>
                <a href="#" class="botton">
                    <span><i class="fa fa-home"></i> Raj Bhawan,Odisha</span>
                </a>

            </div>
            <div class="col-sm-5">
                <img src="Images/Team/img1.png" alt="" class="rounded float-start" style="height: 45rem; width: 80%;">
            </div>
            <div class="col-sm-1"></div>
        </div>

    </div>
    <div class="container pt-5">
        <center>
            <section style="background-color: #e9ecef; padding: 2px;">
                <!-- For demo purpose -->
                <div class="container">
                    <div class="row text-center text-white">
                        <div class="col-lg-8 mx-auto">
                            <h6 class="display-4" style="color:black; font-size:38px; font-family: 'Times New Roman', Times, serif; text-align: center; padding: 10px 10px; ">
                                Former Chancellors</h6>
                            <!-- <p class="lead mb-0">Using Bootstrap 4 grid and utilities, create a nice team page.</p> 
                <p class="lead">Snippet by<a href="https://bootstrapious.com/snippets" class="text-white">
                    <u>Bootstrapious</u></a>
                </p>
            -->
                        </div>
                    </div>
                </div><!-- End -->


                <div class="container ">
                    <div class="row text-center">

                        <!-- Team item -->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <!-- <div class="bg-white"> -->
                            <div class="bg-white rounded py-5 px-4" style="  box-shadow: 5px 5px 5px 5px  #c8cccf;width: 96%;
                              height: 88%;"><img src="Images/Team/img3.png" alt="" "
                                    class=" img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">
                                    Shri Rameshwar Thakur</h5><span class="small text-uppercase text-muted">
                                    (17.11.2004 – 21.08.2007)</span>

                            </div>
                            <!-- </div> -->
                        </div><!-- End -->

                        <!-- Team item -->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <!-- <div class="bg-white"> -->
                            <div class="bg-white rounded py-5 px-4" style="  box-shadow: 5px 5px 5px 5px  #c8cccf;width: 96%;
                                 height: 88%;"><img src="Images/Team/img4.png" alt="" style="height: 153px;width: 173px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Shri Murlidhar C. Bhandare</h5><span class="small text-uppercase text-muted">(21.08.2007- 20.03.2013)
                                </span>

                            </div>
                            <!-- </div> -->
                        </div><!-- End -->

                        <!-- Team item -->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <!-- <div class="bg-white"> -->
                            <div class="bg-white rounded py-5 px-4" style="  box-shadow: 5px 5px 5px 5px  #c8cccf;width: 96%;
                                     height: 88%;"><img src="Images/Team/img5.png" alt="" style="height: 153px;width: 173px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">
                                    Shri Satya Pal Malik</h5><span class="small text-uppercase text-muted">
                                    (21.03.2018 – 28.05.2018)</span>

                            </div>
                            <!-- </div> -->
                        </div><!-- End -->

                        <!-- Team item -->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="bg-white rounded py-5 px-4" style="  box-shadow: 5px 5px 5px 5px  #c8cccf;width: 96%;
                                  height: 88%;"><img src="Images/Team/img6.png" alt="" style="height: 153px;width: 173px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Dr. Senayangba C. Jamir</h5><span class="small text-uppercase text-muted">(21-03.2013 – 20-03-2018)</span>
                            </div>
                            <!-- </div> -->
                        </div><!-- End -->
                    </div>
                </div>


            </section>
        </center>
    </div>

    <?php include "includes/Footer.php"; ?>
</body>

</html>