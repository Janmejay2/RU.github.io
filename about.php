<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>About || Forum-Ravenshaw University </title>
    <style>
        .team .member {
            position: relative;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 5px;
            background: #fff;
        }

        .team .member .teampic {
            overflow: hidden;
            width: 180px;
            border-radius: 50%;
        }

        /* .team .member .teampic img {
            transition: ease-in-out 0.3s;
            } */


        .team .member .member-info {
            padding-left: 30px;
        }

        .team .member h4 {
            font-weight: 700;
            margin-bottom: 5px;
            font-size: 20px;
            color: green;
        }

        .team .member span {
            display: block;
            font-size: 15px;
            padding-bottom: 10px;
            position: relative;
            font-weight: 500;
        }

        .team .member span::after {
            content: "";
            position: absolute;
            display: block;
            width: 50px;
            height: 2px;
            background: black;
            bottom: 0;
            left: 0;
        }

        .team .member p {
            margin: 10px 0 0 0;
            font-size: 14px;
        }

        .team .member .social {
            margin-top: 12px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .team .member .social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            background: #eff2f8;
        }

        .team .member .social a i {
            color: green;
            font-size: 16px;
            margin: 0 2px;
        }

        .team .member .social a:hover {
            background: green;
        }

        .team .member .social a:hover i {
            color: #fff;
        }

        .team .member .social a+a {
            margin-left: 8px;
        }

        section {
            padding: 60px 0;
            overflow: hidden;
        }



        .section-title {
            text-align: center;
            padding-bottom: 30px;
        }

        .section-title h2 {
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
            color: green;
        }

        .underline {
            width: 150px;
            height: 1px;
            background-color: black;
            margin: auto;
            margin-top: -30px;
        }

        .section-title p {
            margin-top: 20px;
        }

        #backeffect {
            min-height: 280px;
            background-image: url(img/jj-ying-7JX0-bfiuxQ-unsplash.jpg);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <?php include './config/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>



    <section class="container-fluid" id="backeffect" data-speed="3">
        <div class="row">
            <div class="col-sm-8 text-center">
                <img src="img/About01.png" alt="Loading" class="img-fluid my-5" style="width: 70%;">
            </div>
            <div class="col-sm-4">
                <h3 class="my-5">Why Ravenshaw Campus Commune exists?</h3>
                <p style="text-align: justify;">Ravenshaw Camous Commune mission is to share and grow the world’s knowledge. Not all knowledge can be written down, but much of that which can be, still isn't. It remains in people’s heads or only accessible if you know the right people. We want to connect the people who have knowledge to the people who need it, to bring together people with different perspectives so they can understand each other better, and to empower everyone to share their knowledge for the benefit of the rest of the world.</p>
            </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-sm-7">
                <h3 class="my-5"> For whom this made for?
                </h3>
                <p style="text-align: justify;"> Education is not limited within the classroom, it is beyond that. To know more about the activities helding in this university it needs to look forward for more details. So, this website is well organised for those who are in seek for obtaining more and who are new to this campus. Overally this is a place where students, Researchers, educators , artists and learners can acquire what they are in search for.
                </p>
            </div>
            <div class="col-sm-5 text-center">
                <img src="img/About02.webp" alt="Loading" class="img-fluid my-5" style="width: 70%;">
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-sm-6 text-center">
                <img src="img/About03.webp" alt="Loading" class="img-fluid " style="width: 50%;">
            </div>
            <div class="col-sm-6">
                <h3 class="my-5"> Spotlighting the advantages</h3>
                <p style="text-align: justify;">The heart of this community is to provide accessible data that deals with the questions regarding various courses and facilities , new post feeds or any events. As Ravenshaw University is well regarded as a 'temple of learning ' , this community will help you to reach the way to the temple and guide you for getting several informations of your need which will assist you to become a empowered student of this renowned institution.p>
            </div>
        </div>
    </section>


    <!-- ======= Team Section ======= -->
    <section id="backeffect" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Team</h2>
                <div class="underline"></div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="teampic"><img src="img/Pic-janmejay.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Janmejaya Panda</h4>
                            <span>Group Leader</span>

                            <p>Hi,i am Janmejay. Thank you for visiting.</p>
                            <div class="social">
                                <a href="https://www.facebook.com/janmejayapanda.janmejayapanda.7/"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/janmejay_2000/"><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                                <a href="https://wa.me/qr/EUXPGK5V4OAOI1"> <i class="bi bi-whatsapp"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="teampic"><img src="./img/team/ganesh.png" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Ganeswar Sahoo</h4>
                            <span>Full-stack developer</span>
                            <p>As a team member of a forum webpage project, I am an integral part of the development and maintenance process. </p>
                            <div class="social">
                                <a href="https://www.facebook.com/profile.php?id=100065631106397"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/na_ganeswar?igshid=MGNiNDI5ZTU="><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/ganeswar-sahoo-16478a24b"><i class="bi bi-linkedin"></i></a>
                                <a href="https://wa.me/7504059142"> <i class="bi bi-whatsapp"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="teampic"><img src="./img/team/liku.png" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amrit Pritam Das</h4>
                            <span>Senior software engineer</span>
                            <p>First and foremost, I am a skilled web developer, proficient in various programming languages and frameworks necessary for building a robust and user-friendly forum platform.</p>
                            <div class="social">
                                <a href="https://www.facebook.com/amritpritam.das.75?mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/amritpritam1102?igshid=ZDdkNTZiNTM"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/amrit-pritam-das-129a01249"><i class="bi bi-linkedin"></i></a>
                                <a href="https://wa.me/qr/EIEYSNPWI5BHD1"> <i class="bi bi-whatsapp"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="teampic"><img src="./img/team/sriram.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sriram Panda</h4>
                            <span>Senior software engineer</span>
                            <p>My knowledge of databases, including SQL and NoSQL, enables me to design and optimize the forum's data structure, ensuring efficient storage and retrieval of user-generated content.</p>
                            <div class="social">
                                <a href="https://www.facebook.com/sriram.panda.148"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/sriram__18__?igshid=ZDdkNTZiNTM"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/sriram-panda-12b43124b"><i class="bi bi-linkedin"></i></a>
                                <a href="https://wa.me/9337655466"> <i class="bi bi-whatsapp"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row my-5">
                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="teampic"><img src="./img/team/ayush.png" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Ayush Kanungo</h4>
                            <span>Chief Executive Officer</span>

                            <p>My knowledge of databases, including SQL and NoSQL, enables me to design and optimize the forum's data structure, ensuring efficient storage and retrieval of user-generated content.</p>
                            <div class="social">
                                <a href="https://www.facebook.com/ayush.kanungo.90?mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/_ayush_kanungo_?igshid=OTk0YzhjMDVlZA=="><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/ayush-kanungo-aba88a249"><i class="bi bi-linkedin"></i></a>
                                <a href="https://wa.me/qr/Q5I2MVOCF334K1"> <i class="bi bi-whatsapp"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="teampic"><img src="./img/team/biswajeet.png" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Biswajeet Panda</h4>
                            <span>Full-stack developer</span>
                            <p>My knowledge of databases, including SQL and NoSQL, enables me to design and optimize the forum's data structure, ensuring efficient storage and retrieval of user-generated content.</p>
                            <div class="social">
                                <a href="https://www.facebook.com/profile.php?id=100005649617653"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/_biswajeet_panda?igshid=ZDdkNTZiNTM"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/biswajeet-panda-250177274"><i class="bi bi-linkedin"></i></a>
                                <a href="https://wa.me/8249683264"> <i class="bi bi-whatsapp"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Team Section -->

    <?php include 'partials/_footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>