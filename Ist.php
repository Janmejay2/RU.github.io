<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department Of IST </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- font Awesome  -->
    <script src="https://kit.fontawesome.com/b449978812.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="CSS/style_dept.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">






</head>
<style>
    #qn .tab-content .row .cs-card {
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


    #qn .tab-content .row .cs-card:hover {
        transform: translateY(-10px);
    }

    .card01 {
        position: relative;
        width: 300px;
        height: 400px;
        margin: 20px;
        overflow: hidden;
        border-radius: 15px;
    }

    .card01 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s;
        border-radius: 15px;

    }

    .card01:hover .img01 {
        transform: scale(1.2);
    }

    .card01-text {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 10px 15px 15px 10px;
        transition: bottom 0.5s;


    }

    .card01:hover .card01-text {
        bottom: -40px;

    }

    .card01:hover .social {
        margin-bottom: 15px;
    }

    .card01 .social {
        margin-left: 60px;
    }

    .text-header {
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

    <div class="container-sm ">
        <div class=" header-design pt-4 pl-3  ">
            <div class="toggle ml-4" style="position: absolute;left: 10px">
                <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style=" box-shadow: 2px 2px 2px ; "><i class="fa-solid fa-bars fa-2xl pt-2" style="width: 25px; height: 25px ;border: none; "></i>
                </a>
            </div>
            <div class="text-header" style="color: rgb(145, 35, 35);"> Department Of Ist
            </div>


        </div>
    </div>

    <!-- ABOUT  -->

    <div class=" container-sm clearfix" id="about">
        <img src="Images/Academics/department/IST/ist department.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="..." id="img-dept">
        <div id="p-dept">
            <p>
                BSc Information Science and Telecommunications (IST) program at Ravenshaw University is a unique and
                innovative undergraduate program that integrates the principles of information science and
                telecommunications. The program is designed to provide students with a comprehensive understanding
                of the field of information science and telecommunications, and prepares them for a wide range of
                careers in this field.It is a hybrid course which gives the student flexibility to do PG in either
                IT or Electronics.Students of this specific department can use this hybrid mode of UG study to steer
                themselves into their desired stream.The program combines the theoretical and practical aspects of
                these two fields, providing students with a holistic understanding of how information and
                communication technologies are integrated to support various applications and services.
            </p>
            <p>
                This course also offers a variety of oncampus placements ranging from
                Deloitte,Accenture,Wipro,HDFC,ICICI,Tech Mahindra etc.Many new Consulting service based companies
                such as EY GDS have also shown interest to hire students from this course.The Placement ratio in
                this department is pretty good which typically ranges from 75% to 90%.Students also have consistent
                performance throghout the Course duration as the proffesors are highly experienced and helpful for
                the Students.
            </p>
        </div>
    </div>



    <!-- program  -->

    <div class="container-sm ">
        <h3 style=" color: rgb(145, 35, 35); text-align: center; font-weight: 600; padding-bottom: 30px; text-transform: uppercase; ">
            Programes offer by Department</h3>
        <div class="container-sm">
            <div class="row mt-4">
                <div class="item text-center features-image сol-12 col-md-6 col-lg-3">
                    <div class="card text-bg-light mb-3" style="max-width: 18rem; width:fit-content;  letter-spacing: 1px; ">
                        <div class="card-header ">UNDER GRADUATION</div>
                        <div class="card-body" style="padding-top: 15px;">
                            <h5 class="card-title">BACHELOR OF SCIENCE</h5>
                            <p class="card-text">
                            <ul style="list-style-type: none; text-align:left; font-size:medium;text-transform: uppercase; padding:10px ;line-height: 150%;">
                                <li> Course name : <strong style=""> Ist</strong></li>
                                <li>NO OF SEATS : 64</li>
                                <li> Course Fee : 30000</li>
                                <li>Duration : 3rd year</li>


                            </ul>
                            <button type="button" class="btn btn-outline-secondary" style="color:black">SYLLABUS</button>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- End of program  -->

    <!-- faculty -->
    <div class="container-sm mt-2">
        <h3 style=" color: rgb(145, 35, 35); text-align: center; font-weight: 600;  text-transform: uppercase; ">
            OUR faculties</h3>

        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="card01">
                    <img class="img01" src="Images\Academics\department\IST\1.jpg" alt="Example Image">
                    <div class="card01-text text-center">
                        <h4>Amiya Ranjan Kanungo</h4>
                        <h5 class=" ">HOD </h5>
                        <div class="social pt-2">
                            <a href="akanungo07@yahoo.co.in"><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #fff;"></i></a>
                            <a href="tel:+91-9861623600"><i class="fa-solid fa-phone fa-beat fa-xl" style="color: #fff; margin-left: 80px;"></i></a>

                        </div>
                          

                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="card01">
                    <img class="img01" src="Images/Academics/department/IST/7.jpg" alt="Example Image">
                    <div class="card01-text text-center">
                        <h4>Manish Chandra Roy</h4>
                        <h5 class=" ">Lecturer </h5>
                        <div class="social pt-2">
                            <a href="
                            manishroy@ravenshawuniversity.ac.in"><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #fff;"></i></a>
                            <a href="tel:+91-9437123842"><i class="fa-solid fa-phone fa-beat fa-xl" style="color: #fff; margin-left: 80px;"></i></a>

                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="card01">
                    <img class="img01" src="Images/Academics/department/IST/6.jpg" alt="Example Image">
                    <div class="card01-text text-center ">
                        <h4>Satyabrata Adhikari</h4>
                        <h5 class="">Lecturer </h5>
                        <div class="social pt-2">
                            <a href="satya.adhikari@gmail.com"><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #fff;"></i></a>
                            <a href="tel:+91-9040109520"><i class="fa-solid fa-phone fa-beat fa-xl" style="color: #fff; margin-left: 80px;"></i></a>

                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="card01">
                    <img class="img01" src="Images/Academics/department/IST/5.jpg" alt="Example Image">
                    <div class="card01-text text-center">
                        <h4>Binayak Swain</h4>
                        <h5 class=" ">Lecturer </h5>
                        <div class="social pt-2">
                            <a href="binayak.ravenshawuniversity@gmail.com"><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #fff;"></i></a>
                            <a href="tel:+91-9853118106"><i class="fa-solid fa-phone fa-beat fa-xl" style="color: #fff; margin-left: 80px;"></i></a>

                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="card01">
                    <img class="img01" src="Images/Academics/department/IST/9.jpg" alt="Example Image">
                    <div class="card01-text text-center">
                        <h4>Soumyashree Panda</h4>
                        <h5 class=" ">Lecturer </h5>
                        <div class="social pt-2">
                            <a href=" soumya0407@gmail.com"><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #fff;"></i></a>
                            <a href="tel:+91-9439917689"><i class="fa-solid fa-phone fa-beat fa-xl" style="color: #fff; margin-left: 80px;"></i></a>

                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="card01">
                    <img class="img01" src="Images/Academics/department/IST/3.jpg" alt="Example Image">
                    <div class="card01-text text-center">
                        <h4>Sonali Sucharita Sahoo</h4>
                        <h5 class=" ">Lecturer </h5>
                        <div class="social pt-2">
                            <a href="sonalisucharita@gmail.com"><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #fff;"></i></a>
                            <a href="tel:+91-9439766744"><i class="fa-solid fa-phone fa-beat fa-xl" style="color: #fff; margin-left: 80px;"></i></a>

                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="card01">
                    <img class="img01" src="Images/Academics/department/IST/4.jpg" alt="Example Image">
                    <div class="card01-text text-center">
                        <h4>Umesh Prasad Rout</h4>
                        <h5 class=" ">Lecturer </h5>
                        <div class="social pt-2">
                            <a href="umesh.ravenshaw@gmail.com"><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #fff;"></i></a>
                            <a href="tel:+91-9438410131"><i class="fa-solid fa-phone fa-beat fa-xl" style="color: #fff; margin-left: 80px;"></i></a>

                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="card01">
                    <img class="img01" src="Images/Academics/department/defaultimage.png" alt="Example Image">
                    <div class="card01-text text-center">
                        <h4>Tanistha Nayak</h4>
                        <h5 class=" ">Lecturer </h5>
                        <div class="social pt-2">
                            <a href="
                            tanisthanist213@gmail.com"><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #fff;"></i></a>
                            <a href="tel:+91-7978738696"><i class="fa-solid fa-phone fa-beat fa-xl" style="color: #fff; margin-left: 80px;"></i></a>

                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="card01">
                    <img class="img01" src="Images/Academics/department/IST/2.jpg" alt="Example Image">
                    <div class="card01-text text-center">
                        <h4>Bimal Kumar Ray</h4>
                        <h5 class=" ">   </h5>
                        <div class="social pt-2">
                            <a href="
                            tanisthanist213@gmail.com"><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #fff;"></i></a>
                            <a href="tel:+91-7978738696"><i class="fa-solid fa-phone fa-beat fa-xl" style="color: #fff; margin-left: 80px;"></i></a>

                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="card01">
                    <img class="img01" src="Images/Academics/department/IST/8.jpg" alt="Example Image">
                    <div class="card01-text text-center">
                        <h4>Shakti Prasad Dash</h4>
                        <h5 class=" ">   </h5>
                        <div class="social pt-2">
                            <a href="
                            tanisthanist213@gmail.com"><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #fff;"></i></a>
                            <a href="tel:+91-7978738696"><i class="fa-solid fa-phone fa-beat fa-xl" style="color: #fff; margin-left: 80px;"></i></a>

                        </div>
                          
                    </div>
                </div>
            </div>






        </div>
    </div>
    <!-- end faculty -->

    <!-- questions bank -->
    <div class="container-sm pb-4" id="qn">
        <h3 style=" color: rgb(145, 35, 35);text-align: center; font-weight: 600; padding-bottom: 30px; text-transform: uppercase; ">
            questions bank</h3>
        <div class="accordion accordion-flush" id="accordionFlushExample" style=" border: 15px solid  #ddd;">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style=" font-size: 1.5rem; font-weight: 600;">
                        1ST YEAR
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <h3 style="text-transform: uppercase; text-align: center;">1St Semester</h3>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style=" justify-content: center;">

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                <button class=" btn nav-link" id="code1-tab" data-bs-toggle="pill" data-bs-target="#code1" type="button" role="tab" aria-controls="code1" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">C-1</button>
                            </li>

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                <button class="nav-link" id="code2-tab" data-bs-toggle="pill" data-bs-target="#code2" type="button" role="tab" aria-controls="code2" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">c-2</button>
                            </li>

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                <button class="nav-link" id="code3-tab" data-bs-toggle="pill" data-bs-target="#code3" type="button" role="tab" aria-controls="code3" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">ge-3</button>
                            </li>

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                <button class="nav-link" id="code4-tab" data-bs-toggle="pill" data-bs-target="#code4" type="button" role="tab" aria-controls="code4" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">Aecc-1</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade" id="code1" role="tabpanel" aria-labelledby="code1-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/1LKM-d1kR3lP_C1CPPrV9SfM8WbBJwiSi/view?usp=drivesdk " style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="code2" role="tabpanel" aria-labelledby="code2-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="code3" role="tabpanel" aria-labelledby="code3-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="code4" role="tabpanel" aria-labelledby="code4-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>


                        </div>


                        <div class="container-sm pt-3">
                            <h3 style="text-transform: uppercase; text-align: center;">2nd Semester</h3>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style=" justify-content: center;">

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                    <button class=" btn nav-link" id="code5-tab" data-bs-toggle="pill" data-bs-target="#code5" type="button" role="tab" aria-controls="code5" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">c-3</button>
                                </li>

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                    <button class="nav-link" id="code6-tab" data-bs-toggle="pill" data-bs-target="#code6" type="button" role="tab" aria-controls="code6" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">c-4</button>
                                </li>

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                    <button class="nav-link" id="code7-tab" data-bs-toggle="pill" data-bs-target="#code7" type="button" role="tab" aria-controls="code7" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">ge-2 </button>
                                </li>

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                    <button class="nav-link" id="code8-tab" data-bs-toggle="pill" data-bs-target="#code8" type="button" role="tab" aria-controls="code8" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">aecc-2</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade" id="code5" role="tabpanel" aria-labelledby="code5-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code6" role="tabpanel" aria-labelledby="code6-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code7" role="tabpanel" aria-labelledby="code7-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code8" role="tabpanel" aria-labelledby="code8-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style=" font-size: 1.5rem; font-weight: 600;">
                        2ND YEAR
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <h3 style="text-transform: uppercase; text-align: center;">3rd Semester</h3>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style=" justify-content: center;">

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                <button class=" btn nav-link" id="code9-tab" data-bs-toggle="pill" data-bs-target="#code9" type="button" role="tab" aria-controls="code9" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">c-5</button>
                            </li>

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                <button class="nav-link" id="code10-tab" data-bs-toggle="pill" data-bs-target="#code10" type="button" role="tab" aria-controls="code10" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">c-6</button>
                            </li>

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                <button class="nav-link" id="code11-tab" data-bs-toggle="pill" data-bs-target="#code11" type="button" role="tab" aria-controls="code11" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">c-7</button>
                            </li>

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                <button class="nav-link" id="code12-tab" data-bs-toggle="pill" data-bs-target="#code12" type="button" role="tab" aria-controls="code12" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">ge-3</button>
                            </li>
                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                <button class="nav-link" id="code13-tab" data-bs-toggle="pill" data-bs-target="#code13" type="button" role="tab" aria-controls="code13" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">sec-1</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade" id="code9" role="tabpanel" aria-labelledby="code9-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/10KwmrIAOscZe9-QAykMoy43l3ANIwUSF/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/10Z5nz5mZhoidhDoT_yMRL32Zv9Jb0g1C/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="code10" role="tabpanel" aria-labelledby="code10-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/10NWHtlW9_KBT4HeaQSuWbR16YerfeygA/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/10KwmrIAOscZe9-QAykMoy43l3ANIwUSF/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="code11" role="tabpanel" aria-labelledby="code11-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/10OtcB4tJJZGLEXkxqo8hW50SGm2niF_Z/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/10PWwFskFRXvzOoMEpd01wTfaw7SJirs1/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/10OtcB4tJJZGLEXkxqo8hW50SGm2niF_Z/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="code12" role="tabpanel" aria-labelledby="code12-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/10I9pfRbc0xZLelrlXEJYV_2-LH9JMa2d/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="code13" role="tabpanel" aria-labelledby="code13-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/10DiZVrXm6CIExkQCg-LUCuvkJVUSvkDf/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>


                        </div>


                        <div class="container-sm pt-3">
                            <h3 style="text-transform: uppercase; text-align: center;">4th Semester</h3>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style=" justify-content: center;">

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                    <button class=" btn nav-link" id="code14-tab" data-bs-toggle="pill" data-bs-target="#code14" type="button" role="tab" aria-controls="code14" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">c-8</button>
                                </li>

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                    <button class="nav-link" id="code15-tab" data-bs-toggle="pill" data-bs-target="#code15" type="button" role="tab" aria-controls="code15" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">c-9</button>
                                </li>

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                    <button class="nav-link" id="code16-tab" data-bs-toggle="pill" data-bs-target="#code16" type="button" role="tab" aria-controls="code16" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">c-10</button>
                                </li>

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                    <button class="nav-link" id="code17-tab" data-bs-toggle="pill" data-bs-target="#code17" type="button" role="tab" aria-controls="code17" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">ge-4</button>
                                </li>
                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                    <button class="nav-link" id="code18-tab" data-bs-toggle="pill" data-bs-target="#code18" type="button" role="tab" aria-controls="code18" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">sec-2</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade" id="code14" role="tabpanel" aria-labelledby="code14-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="https://drive.google.com/file/d/10gR4d3p_-yoYD6-w3_Ifi2mv2y4dj7Hu/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code15" role="tabpanel" aria-labelledby="code15-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="https://drive.google.com/file/d/10iavGlJk3PBs_TE1ghhwtxfcgBzNyNUO/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code16" role="tabpanel" aria-labelledby="code16-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="https://drive.google.com/file/d/10cL5m9OIeSrWw2rPXmKXNxDgBQBJU9jZ/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code17" role="tabpanel" aria-labelledby="code17-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="https://drive.google.com/file/d/10qD9Ak6VVyDGL_MI5GY8W5-qtl8v4WY8/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code18" role="tabpanel" aria-labelledby="code18-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="https://drive.google.com/file/d/10aHAQjtlEkdLM7KUsh4Z-tfsVEEuSbfi/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style=" font-size: 1.5rem; font-weight: 600;">
                        3RD YEAR
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="container-sm pt-3">
                            <h3 style="text-transform: uppercase; text-align: center;">5th Semester</h3>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style=" justify-content: center;">

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                    <button class=" btn nav-link" id="code19-tab" data-bs-toggle="pill" data-bs-target="#code19" type="button" role="tab" aria-controls="code19" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">c-11</button>
                                </li>

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                    <button class="nav-link" id="code20-tab" data-bs-toggle="pill" data-bs-target="#code20" type="button" role="tab" aria-controls="code20" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">c-12</button>
                                </li>

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                    <button class="nav-link" id="code21-tab" data-bs-toggle="pill" data-bs-target="#code21" type="button" role="tab" aria-controls="code21" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">dse-1</button>
                                </li>

                                <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                    <button class="nav-link" id="code22-tab" data-bs-toggle="pill" data-bs-target="#code22" type="button" role="tab" aria-controls="code22" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">dse-2</button>
                                </li>


                            </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade" id="code19" role="tabpanel" aria-labelledby="code19-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code20" role="tabpanel" aria-labelledby="code20-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="https://drive.google.com/file/d/10Czt1zFHiUOYsC-WXX1kQoleKLBECHZA/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code21" role="tabpanel" aria-labelledby="code21-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="https://drive.google.com/file/d/11P7rdgNGGheQ1FedaFQ_C6Q_MNlgPmsZ/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="https://drive.google.com/file/d/11Enw1ZNLiZMCkKAQXIi96-Ute4tJRhhi/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="code22" role="tabpanel" aria-labelledby="code22-tab" tabindex="0">

                                    <div class="row ">
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card">2020
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2021
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="https://drive.google.com/file/d/10ucAFTfgTHdL7RozoEaQJ2KA3Hu7oOKl/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2022
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                                <div class="cs-card"> 2023
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>



                            </div>
                        </div>

                        <h3 style="text-transform: uppercase; text-align: center; " class="p-3">6th Semester</h3>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style=" justify-content: center;">

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                <button class=" btn nav-link" id="code24-tab" data-bs-toggle="pill" data-bs-target="#code24" type="button" role="tab" aria-controls="code24" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">c-13</button>
                            </li>

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px;margin: 10px;  ">
                                <button class="nav-link" id="code25-tab" data-bs-toggle="pill" data-bs-target="#code25" type="button" role="tab" aria-controls="code25" aria-selected="false" style="font-size: x-large; text-transform: uppercase;">c-14</button>
                            </li>

                            <li class="nav-item" role="presentation" style="border: solid ; border-radius: 9px; margin: 10px; ">
                                <button class="nav-link" id="code26-tab" data-bs-toggle="pill" data-bs-target="#code26" type="button" role="tab" aria-controls="code26" aria-selected="false" style="font-size: x-large;text-transform: uppercase;">sec-3</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade" id="code24" role="tabpanel" aria-labelledby="code24-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="code25" role="tabpanel" aria-labelledby="code25-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://drive.google.com/file/d/11HuMPDRJcRvxAs2VxTKrLpor2j50ede8/view?usp=share_link" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="code26" role="tabpanel" aria-labelledby="code26-tab" tabindex="0">

                                <div class="row ">
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card">2020
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2021
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2022
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" style=" text-decoration: none;color: black;font-size: x-large;">
                                            <div class="cs-card"> 2023
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end questions bank -->




    <?php include "Includes/Footer.php"; ?>


    <!-- Bootstrap script -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>