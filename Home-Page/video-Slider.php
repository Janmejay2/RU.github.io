<!-- video Slider -->
<div class="container-expand-lg ">
    <section class="home">
        <video class="video-slide active" src="video/Front Original Test 06.mp4" autoplay muted loop></video>
        <video class="video-slide" src="video/Front Original Test 06.mp4" autoplay muted loop></video>
      

        <div class="content active">
            <h1 class="h01">Ravenshaw<br><span>University</span></h1>
            <p>Welcome to Ravenshaw University, where excellence in education meets a rich cultural heritage.
                Our university has a storied history of providing exceptional education to students from across
                India and around the world. With a commitment to academic excellence, social responsibility,
                and intellectual rigor, we offer a wide range of undergraduate, postgraduate, and doctoral
                programs that prepare students for success in a rapidly changing world. At Ravenshaw, you'
                ll find a supportive and inclusive community of scholars and thinkers who are dedicated to
                making a positive impact on society. Join us today and discover the transformative power of
                a Ravenshaw education</p>
        </div>
        <div class="content">
            <h1>Ravenshaw<br><span>University</span></h1>
            <p>Step into a world of boundless opportunities at Ravenshaw University. From cutting-edge research
                to top-notch academics, our institution has been at the forefront of higher education for over
                150 years. With a proud legacy of producing world-class scholars, we offer a range of
                undergraduate, postgraduate, and doctoral programs that cater to diverse interests
                and passions. Our distinguished faculty, state-of-the-art facilities, and vibrant
                campus life provide an unparalleled learning experience that inspires creativity,
                critical thinking, and personal growth. Whether you're a student, researcher,
                or aspiring professional, Ravenshaw has something to offer you. Join our dynamic
                community and embark on a journey of discovery and excellence.</p>
        </div>
       


        <div class="slider-navigation">
            <div class="nav-btr active"></div>
            <div class="nav-btr"></div>
            

        </div>
    </section>
</div>

<script type="text/javascript">
    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btr");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual) {
        btns.forEach((btn) => {
            btn.classList.remove("active");
        });

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        contents.forEach((content) => {
            content.classList.remove("active");
        });

        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
        contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            sliderNav(i);
        });
    });
</script>