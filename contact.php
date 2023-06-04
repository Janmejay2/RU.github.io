<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- font Awesome  -->
    <script src="https://kit.fontawesome.com/b449978812.js" crossorigin="anonymous"></script>

    <title>Contact || Forum</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        input,
        textarea {
            font-family: "Poppins", sans-serif;
        }

        .form01 .container {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 2rem;
            background-color: #fafafa;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form01 .form {
            width: 100%;
            max-width: 820px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow: hidden;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .form01 .contact-form {
            background-color: #1abc9c;
            position: relative;
        }

        .form01 .circle {
            border-radius: 50%;
            background: linear-gradient(135deg, transparent 20%, #149279);
            position: absolute;
        }

        .form01 .circle.one {
            width: 130px;
            height: 130px;
            top: 130px;
            right: -40px;
        }

        .form01 .circle.two {
            width: 80px;
            height: 80px;
            top: 10px;
            right: 30px;
        }

        .form01 .contact-form:before {
            content: "";
            position: absolute;
            width: 26px;
            height: 26px;
            background-color: #1abc9c;
            transform: rotate(45deg);
            top: 50px;
            left: -13px;
        }

        .form01 form {
            padding: 2.3rem 2.2rem;
            z-index: 10;
            overflow: hidden;
            position: relative;
        }

        .form01 .title {
            color: #fff;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
            margin-bottom: 0.7rem;
        }

        .form01 .input-container {
            position: relative;
            margin: 1rem 0;
        }

        .form01 .input {
            width: 100%;
            outline: none;
            border: 2px solid #fafafa;
            background: none;
            padding: 0.6rem 1.2rem;
            color: #fff;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            border-radius: 25px;
            transition: 0.3s;
        }

        .form01 textarea.input {
            padding: 0.8rem 1.2rem;
            min-height: 150px;
            border-radius: 22px;
            resize: none;
            overflow-y: auto;
        }

        .form01 .input-container label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            padding: 0 0.4rem;
            color: #fafafa;
            font-size: 0.9rem;
            font-weight: 400;
            pointer-events: none;
            z-index: 1000;
            transition: 0.5s;
        }

        .form01 .input-container.textarea label {
            top: 1rem;
            transform: translateY(0);
        }

        .form01 .btn {
            padding: 0.6rem 1.3rem;
            background-color: #fff;
            border: 2px solid #fafafa;
            font-size: 0.95rem;
            color: #1abc9c;
            line-height: 1;
            border-radius: 25px;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            margin: 0;
        }

        .form01 .btn:hover {
            background-color: transparent;
            color: #fff;
        }

        .form01 .input-container span {
            position: absolute;
            top: 0;
            left: 25px;
            transform: translateY(-50%);
            font-size: 0.8rem;
            padding: 0 0.4rem;
            color: transparent;
            pointer-events: none;
            z-index: 500;
        }

        .form01 .input-container span:before,
        .form01 .input-container span:after {
            content: "";
            position: absolute;
            width: 10%;
            opacity: 0;
            transition: 0.3s;
            height: 5px;
            background-color: #1abc9c;
            top: 50%;
            transform: translateY(-50%);
        }

        .form01 .input-container span:before {
            left: 50%;
        }

        .form01 .input-container span:after {
            right: 50%;
        }

        .form01 .input-container.focus label {
            top: 0;
            transform: translateY(-50%);
            left: 25px;
            font-size: 0.8rem;
        }

        .form01 .input-container.focus span:before,
        .form01 .input-container.focus span:after {
            width: 50%;
            opacity: 1;
        }

        .form01 .contact-info {
            padding: 2.3rem 2.2rem;
            position: relative;
        }

        .form01 .contact-info .title {
            color: #1abc9c;
        }

        .form01 .text {
            color: #333;
            margin: 1.5rem 0 2rem 0;
        }

        .form01 .information {
            display: flex;
            color: #555;
            margin: 0.7rem 0;
            align-items: center;
            font-size: 0.95rem;
        }

        .form01 .icon {
            width: 28px;
            margin-right: 0.7rem;
        }

        .form01 .social-media {
            padding: 2rem 0 0 0;
        }

        .form01 .social-media p {
            color: #333;
        }

        .form01 .social-icons {
            display: flex;
            margin-top: 0.5rem;
        }

        .form01 .social-icons a {
            width: 35px;
            height: 35px;
            border-radius: 5px;
            background: linear-gradient(45deg, #1abc9c, #149279);
            color: #fff;
            text-align: center;
            line-height: 35px;
            margin-right: 0.5rem;
            transition: 0.3s;
        }

        .form01 .social-icons a:hover {
            transform: scale(1.05);
        }

        .form01 .contact-info:before {
            content: "";
            position: absolute;
            width: 110px;
            height: 100px;
            border: 22px solid #1abc9c;
            border-radius: 50%;
            bottom: -77px;
            right: 50px;
            opacity: 0.3;
        }

        .form01 .big-circle {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: linear-gradient(to bottom, #1cd4af, #159b80);
            bottom: 50%;
            right: 50%;
            transform: translate(-40%, 38%);
        }

        .form01 .big-circle:after {
            content: "";
            position: absolute;
            width: 360px;
            height: 360px;
            background-color: #fafafa;
            border-radius: 50%;
            top: calc(50% - 180px);
            left: calc(50% - 180px);
        }

        .form01 .square {
            position: absolute;
            height: 400px;
            top: 50%;
            left: 50%;
            transform: translate(181%, 11%);
            opacity: 0.2;
        }

        @media (max-width: 850px) {
            .form01 .form {
                grid-template-columns: 1fr;
            }

            .form01 .contact-info:before {
                bottom: initial;
                top: -75px;
                right: 65px;
                transform: scale(0.95);
            }

            .form01 .contact-form:before {
                top: -13px;
                left: initial;
                right: 70px;
            }

            .form01 .square {
                transform: translate(140%, 43%);
                height: 350px;
            }

            .form01 .big-circle {
                bottom: 75%;
                transform: scale(0.9) translate(-40%, 30%);
                right: 50%;
            }

            .form01 .text {
                margin: 1rem 0 1.5rem 0;
            }

            .form01 .social-media {
                padding: 1.5rem 0 0 0;
            }
        }

        @media (max-width: 480px) {
            .form01 .container {
                padding: 1.5rem;
            }

            .form01 .contact-info:before {
                display: none;
            }

            .form01 .square,
            .form01 .big-circle {
                display: none;
            }

            .form01 form,
            .form01 .contact-info {
                padding: 1.7rem 1.6rem;
            }

            .form01 .text,
            .form01 .information,
            .form01 .social-media p {
                font-size: 0.8rem;
            }

            .form01 .title {
                font-size: 1.15rem;
            }

            .form01 .social-icons a {
                width: 30px;
                height: 30px;
                line-height: 30px;
            }

            .form01 .icon {
                width: 23px;
            }

            .form01 .input {
                padding: 0.45rem 1.2rem;
            }

            .form01 .btn {
                padding: 0.45rem 1.2rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="Home.php">Ravenshaw Campus Commune</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" tabindex="-1">Contact</a>
                </li>
            </ul>
            <div class=" row mx-2">
                <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
                    <p class="text-light my-0 mx-2"> </p>
                    <input class="form-control mr-sm-2" name="search" type="search" action="search.php" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Login</a>
                    <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Signup</a>
                </form>
            </div>
        </div>
    </nav>





    <section class="container-fluid form01">
        <div class="container">
            <span class="big-circle"></span>
            <img src="img/shape.png" class="square" alt="" />
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Let's get in touch</h3>
                    <p class="text">
                        Welcome to the Ravenshaw Campus Commune. We're a community of college students and recent graduates who are passionate about learning and sharing information. Whether you're looking for advice on classes, careers, or anything else related to college life, we're here to help.

                        If you have any questions or concerns, please don't hesitate to contact us. We're always happy to help .
                    </p>

                    <div class="info">
                        <div class="information">
                            <img src="img/email.png" class="icon" alt="" />
                            <p>Ravenshaw University<br>
                                College Square ,Cuttack-753003
                            </p>
                        </div>
                        <div class="information">
                            <img src="img/email.png" class="icon" alt="" />
                            <p>Ravenshawcampuscommue@gmail.com</p>
                        </div>
                        <div class="information">
                            <img src="img/phone.png" class="icon" alt="" />
                            <p> 7504059142</p>
                        </div>
                    </div>

                    <div class="social-media">
                        <p>Connect with us :</p>
                        <div class="social-icons">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>

                    <form action="https://formspree.io/f/xayzzpyb" method="POST">
                        <h3 class="title">Contact us</h3>
                        <div class="input-container">
                            <input type="text" name="name" class="input" />
                            <label for="">Username</label>
                            <span>Username</span>
                        </div>
                        <div class="input-container">
                            <input type="email" name="email" class="input" />
                            <label for="">Email</label>
                            <span>Email</span>
                        </div>
                        <div class="input-container">
                            <input type="tel" name="phone" class="input" />
                            <label for="">Phone</label>
                            <span>Phone</span>
                        </div>
                        <div class="input-container textarea">
                            <textarea name="message" class="input"></textarea>
                            <label for="">Message</label>
                            <span>Message</span>
                        </div>
                        <input type="submit" value="Send" class="btn" />
                    </form>
                </div>
            </div>
        </div>

    </section>
    <script>
        const inputs = document.querySelectorAll(".input");

        function focusFunc() {
            let parent = this.parentNode;
            parent.classList.add("focus");
        }

        function blurFunc() {
            let parent = this.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
        }

        inputs.forEach((input) => {
            input.addEventListener("focus", focusFunc);
            input.addEventListener("blur", blurFunc);
        });
    </script>


    <?php include 'partials/_footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>