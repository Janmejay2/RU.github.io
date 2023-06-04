<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenshaw University</title>
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="icon" type="image/x-icon" href="image/logo1.png">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e12bc36359.js" crossorigin="anonymous"></script>
    <style>
        .botton {
            display: inline-block;
            position: relative;
            text-align: center;
            vertical-align: middle;
            overflow: hidden;
            border-radius: 2px;
            background-color: rgb(135, 35, 35);
            color: #fff;
            font-size: 13px;
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

        .cs-card {
            cursor: pointer;
            text-align: center;
            border-radius: 5px;
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
            margin-top: 5rem;
            border: 1px solid #ddd;
        }

        .cs-card:hover {
            transform: translateY(-10px);
        }

        .cs-card a {
            text-decoration: none;
            color: black;
            font-size: x-large;
            font-weight: 700;
        }

        .cs-card img {
            width: 20%;
            border-radius: 30px;

        }
    </style>

<body>
    <?php include "Includes/header.php"; ?>

    <?php include "Includes/Logobar.php"; ?>

    <?php include "Includes/navbar.php"; ?>


    <!-- head-design -->
    <div class="head-design">
        <img src="Images/Home/Footer/bg1.png" alt="Your Image" class="Headimg" />
        <div class="text1"><a href="#">Vice Chancellor</a></div>
    </div>

    <!-- body -->
    <div class="container-sm my-5">
        <div class="row">
            <div class="col-sm-4">
                <img src="Images/Students/Vice-Chancellor/Sanjay.jpg" class="img-thumbnail" style="height:45rem;" alt=" ">
                <h3 style=" color:brown; font-weight: 600; font-size: 22px;text-align: center;">Prof. Sanjay K. Nayak
                </h3>
                <a style="margin-left: 27%;" href="#" class="botton">
                    <span> <i class="fa fa-home"></i> Profile</span>
                </a>
                <div class="row my-5" style="background-color: azure;">
                    <center>
                        <h1>Office</h1>
                        <hr style="background-color: brown; opacity: 100%; height: 2px; width: 100px;">
                    </center>
                    <div class="col-sm-5">
                        <img src="Images/Students/Vice-Chancellor/Manoranjan.jpg" class="img-thumbnail" alt="...">
                        <ul style="list-style-type: none;">
                            <li style="color: brown; font-size: large;">Mr. Manoranjan Sethy</li>
                            <li style="font-size: large;font-weight: 600;">Personal Assistant</li>
                            <li style="font-size: large;font-weight: 600;">+91-9437165028 </li>
                        </ul>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <img src="Images/Students/Vice-Chancellor/Jaynta.jpg" class="img-thumbnail" alt="...">
                        <ul style="list-style-type: none;">
                            <li style="color: brown; font-size: large;">Mr. Jayanta K. Mohanty</li>
                            <li style="font-size: large;font-weight: 600;">+91-9437199909</li>
                            <li style="font-size: large;font-weight: 600;">+91-7008275799 </li>
                        </ul>
                    </div>
                    <ul style="list-style-type: none;color: brown;font: 600;font-size: larger;line-height: 2rem;">
                        <li><i class="fa fa-phone "> </i>0671-2200160</li>
                        <li><i class="fa fa-envelope"></i> vc@ravenshawuniversity.ac.in</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8" style="background-color: #e8ecf0; margin-top: 10px;">
                <h3 align="center" style="color:brown; font-family: Bookman Old Style; padding: 15px;text-align: center; font-size: 30px;  ">
                    From the Vice-Chancellor's Desk<br style="color:brown">
                </h3>
                <p align="Justify" style="margin: 2%;">
                    From the Vice-Chancellor's Desk
                    Leading an institution of higher education, as it shapes into its ever evolving post-colonial
                    present,
                    with its “remembered” pasts traced to colonial times, is indeed a matter of great honour. It
                    undoubtedly
                    accompanies ineffably a sense of privilege while importantly, it gestures towards a moment of
                    soul-searching as well. Marked by an unwavering commitment to learning, growth, common good,
                    empathy
                    and
                    diversity, Ravenshaw’s lifeworld has remained animated with the quintessential spirit to educate
                    the
                    citizen and citizen leaders of our society.
                    <br></br>
                    <br>In crafting an inventive vision for the institution, it has committed itself to the
                    transformative
                    power of a liberal arts and sciences education. And in pursuing this, it has no less, critically
                    interrogated norms, conventions and practices in the realm of ideas; the ways of knowing and
                    understanding underlying knowledge and human welfare since 1868. Its (infra) structural universe
                    has
                    continually been remapped in sync with the principle of free exchange of ideas conducted in an
                    ethical
                    and interdependent atmosphere. More so, its conceptual ecology has been further enlivened by the
                    participation of diverse community of faculty, staff, students, and alumni.</br>
                    <br> Into its teens as a University, impregnated with puzzling, and self-conflicted, yet,
                    productive
                    tensions, Ravenshaw today illuminates a fascinating melody of exuberance characteristic of the
                    proto-adolescent phase of one’s life.</br>

                    <br>How do we fashion a career frame for the institutional life from here? I think this is a
                    project
                    that
                    behooves the collective – students, faculty, alumni, policy people and the civil society at
                    large –
                    to
                    think through the questions and be part of a persuasive solution. As I look forward to my
                    engagement
                    with the idea of Ravenshaw, I earnestly solicit the participation of this vibrant collective in
                    this
                    journey of shared belongingness!</br>
                </p>
                <div class="row my-5">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5"><a style="" href="#" class="botton">
                            <span>Syndicate</span>
                        </a></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5"><a style="" href="#" class="botton">
                            <span>Academics Council</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-sm my-5">
        <h6 class="display-4" style="color:black; font-size:45px; font-family: 'Times New Roman', Times, serif; text-align: center; ">
            Former Vice-Chancellors</h6>
        <div class="row">
            <div class="col-sm-3" style="box-shadow: 5px 5px 5px #555; text-align: center;">
                <a href="https://en.wikipedia.org/wiki/Devdas_Chhotray"><img src="Images/Students/Vice-Chancellor/vc1.jpg" alt="" style="height: 153px;width: 173px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></a>
                <h5 class="mb-0">
                    Shri Devdas Chhotray</h5><span class="small text-uppercase text-muted">
                    2006-2011</span>
            </div>
            <div class="col-sm-3" style="box-shadow: 5px 5px 5px #555; text-align: center;">
                <a href="pdf/Prof.-Baishnab-C.-Tripathy-Message.pdf"><img src="Images/Students/Vice-Chancellor/vc2.png" alt="" style="height: 153px;width: 173px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></a>
                <h5 class="mb-0">Prof. Baishnab C. Tripathy</h5><span class="small text-uppercase text-muted">2011-2014
                </span>
            </div>
            <div class="col-sm-3" style="box-shadow: 5px 5px 5px #555; text-align: center;">
                <a href="pdf/pcs-ravenshaw.pdf"> <img src="Images/Students/Vice-Chancellor/vc3.png" alt="" style="height: 153px;width: 173px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">
                </a>
                Prof. Prakash C. Sarangi</h5><span class="small text-uppercase text-muted">
                    2014-2017</span>
            </div>
            <div class="col-sm-3" style="box-shadow: 5px 5px 5px #555; text-align: center;">
                <a href="pdf/Ravenshaw-website.pdf"> <img src="Images/Students/Vice-Chancellor/vc4.jpg" alt="" style="height: 153px;width: 173px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></a>
                <h5 class="mb-0">Prof. Ishan Kumar Patro</h5><span class="small text-uppercase text-muted">2017-2020</span>
            </div>
        </div>
    </div>
    <div class="container-sm my-5">
        <ul style="list-style-type: none;font-size: 2rem;font-weight: 600;">
            <li>* Mr. Gagan Dhal, IAS (VC incharge), 25-11-2014 - 31.12-2014</li>
            <li>* Prof. Aparajita Chowdhury (VC incharge), 31.12.2020 - 31.03.2021</li>
        </ul>
    </div>

    <div class="container-sm my-5">
        <h3 style="color: brown;font-size: 2rem;font-weight: 700;">Principals, Ravenshaw College</h3>
        <p style="text-align: justify;font-size: 1.2rem;">The Foundation of Ravenshaw college was a positive development
            that happened soon after the Great Famine of
            1866. It was being widely believed that the devastation and misery caused by the famine was because of the
            lack of education. Soon, there was a wide spread public demand for setting up a college or High school in
            Orissa. In January 1868, the Cuttack Zilla School was raised to the status of a High School with First Arts
            classes. The Cuttack High School was elevated to a first grade college called Cuttack College in 1876
            because of the untiring efforts of T.E. Ravenshaw who was the Commissioner of Cuttack Division. Samuel Ager
            was the first principal of Cuttack College. It was during his tenure that Cuttack College was renamed
            Ravenshaw College. Ager launched the College Emblem in 1879 with the words Jnanameva Shakti meaning
            ‘Knowledge is Power’.</p>

        <div class="row">
            <div class="col-sm-3" id="Namebox">
                <div class="cs-card">
                    <img src="Images/Students/Vice-Chancellor/img0.png" alt="...">
                    <a href="#">S. Ager ,1876</a>
                </div>
            </div>
            <div class="col-sm-3" id="Namebox">
                <div class="cs-card">
                    <img src="Images/Students/Vice-Chancellor/Nilakantha.jpg" alt="...">
                    <a href="#">Nilakantha Mazumadar ,1897</a>
                </div>
            </div>
            <div class="col-sm-3" id="Namebox">
                <div class="cs-card">
                    <img src="Images/Students/Vice-Chancellor/img0.png" alt="...">
                    <a href="#">N. L. Hallward , 1897</a>
                </div>
            </div>
            <div class="col-sm-3" id="Namebox">
                <div class="cs-card">
                    <img src="Images/Students/Vice-Chancellor/img0.png" alt="...">
                    <a href="#">
                        K. Raichowdhuri (Offg.) ,
                        1900
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include "Includes/Footer.php"; ?>
</body>

</html>