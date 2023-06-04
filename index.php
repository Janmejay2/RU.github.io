<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Ravenshaw University</title>

    <link rel="icon" type="image/x-icon" href="image/logo1.png">
    <link rel="stylesheet" href="CSS/style.css">
    
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e12bc36359.js" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<style>
     .home {
            position: relative;
            width: 100%;
            min-height: 92vh;
            display: flex;
            justify-content: center;
            flex-direction: column;
            background: rgb(145, 35, 35);
        }

        .home:before {
            z-index: 777;
            content: '';
            position: absolute;
            /* background: rgba(3, 96, 251, 0.3); */
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .home .content {
            z-index: 888;
            color: #fff;
            width: 70%;
            margin-top: 50px;
            margin-left: 20px;
            display: none;
        }

        .home .content.active {
            display: block;
        }

        .home .content h1 {
            font-size: 2.2em;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 5px;
            line-height: 75px;
            margin-bottom: 40px;
            text-shadow: 5px 5px 5px #555;
        }

        .home .content h1 span {
            font-size: .9em;
            font-weight: 600;
            text-shadow: 5px 5px 5px #555;
            margin-left:50px
        }

        .home .content p {
            margin-bottom: auto;
        }

        .home .content a {
            background: #fff;
            padding: 15px 35px;
            color: #1680AC;
            font-size: 1.1em;
            font-weight: 500;
            text-decoration: none;
            border-radius: 2px;
        }

        .home video {
            z-index: 000;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slider-navigation {
            z-index: 888;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateY(80px);
            margin-bottom: 12px;
        }

        .slider-navigation .nav-btr {
            width: 12px;
            height: 12px;
            background: #fff;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 0 2px rgba(255, 255, 255, 0.5);
            transition: 0.3s ease;
        }

        .slider-navigation .nav-btr.active {
            background: rgba(25, 55, 5, 0.982), ;
        }

        .slider-navigation .nav-btr:not(:last-child) {
            margin-right: 20px;
        }

        .slider-navigation .nav-btr:hover {
            transform: scale(1.2);
        }

        .video-slide {
            position: absolute;
            width: 100%;
            clip-path: circle(0% at 0 50%);
        }

        .video-slide.active {
            clip-path: circle(150% at 0 50%);
            transition: 2s ease;
            transition-property: clip-path;
        }

        @media (max-width: 1040px) {


            .home {
                padding: 00px 0px;
            }

            .home .media-icons {
                right: 15px;
            }
        }

        @media (max-width: 560px) {
            .home .content h1 {
                font-size: 2em;
                line-height: 60px;
            }
        }
 
        
.custom-btn {
    margin: 15px 10px;
    width: max-content;
    height: 50px;
    color: #fff;
    font-size: 15px;
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
    text-transform: uppercase;
}

.btn-0 {
        background:rgb(145, 35, 35);
        border: none;
        z-index: 1;
    }
.btn-0 a{
        text-decoration: none;
        background-color: transparent;
        color: #fff;
 }
.btn-0 a span{
    color:#fff;
}    
.btn-0:after {
    position: absolute;
    content: "";
    width: 0;
    height: 100%;
    top: 0;
    right: 0;
    z-index: -1;
    background-color: black;
    border-radius: 5px;
    box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
        7px 7px 20px 0px rgba(0, 0, 0, .1),
        4px 4px 5px 0px rgba(0, 0, 0, .1);
    transition: all 0.3s ease;
}

.btn-0:hover {
    color: #fff;
}

.btn-0:hover:after {
    left: 0;
    width: 100%;
}

.btn-0:active {
    top: 2px;
}
 p{
    font-family: 'Ubuntu', sans-serif;
 }

 .card01 {
    position: relative;
    width: 300px;
    height:400px;
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
    padding: 20px;
    transition: bottom 0.5s;
  }

  .card01:hover .card01-text {
    bottom: -15px;
  }


  .intro-h {
    font-size: 3rem;
    color: #333;
    margin-top: 2rem;
  }

  .intro-p {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #666;
  }

  .intro-img {
    border-radius: 30px;
    
  }
  @media screen and (max-width: 768px) {
    .intro-h{
          font-size: 2rem;
        }
      }

      @media screen and (max-width: 576px) {
        .intro-h {
          font-size: 1.5rem;
        }

        .intro-p {
          font-size: 1rem;
        }
      }

</style>

<body>

    <?php include "Includes/header.php"; ?>

    <?php include "Includes/Logobar.php"; ?>

    <?php include "Includes/navbar.php"; ?>

    <?php include "Home-page/video-Slider.php"; ?>

    <?php include "Home-page/Notice.php"; ?>

    <?php include "Home-page/Facility.php"; ?>

    <?php include "Home-page/Institutional-Vision.php"; ?>

    <?php include "Home-page/Counter.php"; ?>

    <?php include "Home-page/News&Events.php"; ?>

    <?php include "Home-page/Campus.php"; ?>

    <?php include "Home-page/Facilities.php"; ?>

    <?php include "Home-page/Professional-Programs.php"; ?>

    <?php include "Home-page/Eminent-Alumini.php"; ?>

    <?php include "Home-page/Testimonial.php"; ?>

    <?php include "Home-page/Books&Blogs.php"; ?>

    <?php include "Home-page/Campus-Gallery.php"; ?>

    <?php include "Home-page/Ravenshaw Talks.php"; ?>

    <?php include "Home-page/Media.php"; ?>

    <?php include "Includes/Footer.php"; ?>

</body>

</html>