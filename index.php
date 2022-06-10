<?php
    include "./layout/header.php";
    include "./layout/navbar.php";
?>

<!-- about us section starts -->
<section class="about">
    <div class="about-container">
        <div class="about-content">
            <h1 class="heading">about us</h1>
            <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus soluta dolor porro deserunt exercitationem provident, autem qui eius laborum nostrum, amet est reiciendis non reprehenderit optio repudiandae officia architecto.</p>
            <a href="./aboutus.php" class="btn">read more <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="about-img"><img src="./images/About Us.jpg" alt=""></div>
    </div>
</section>
<!-- about us section ends -->

<!-- course section starts -->
<section class="course">
    <div class="course-section">
        <div class="course-head">
            <h1 class="heading">Our Course</h1>
            <p class="content">This is our <br> Customers' Favourite Courses we supply</p>
        </div>

        <div class="course-content row d-flex justify-content-around align-items-center px-0 mx-0">

            <div class="box col-lg-4 col-md-4 col-sm-12 text-center">
                <img src="./images/pexels-alexander-dummer-1912868.jpg" alt="">
                <div class="box-overlay">
                    <h3>primary</h3>
                    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, libero!</p>

                    <p class="content"><span class="highlight">age</span>:3-5 years,<span class="highlight">time</span>:8-10 AM,<span class="highlight"> Seat</span>:25</p>
                    <button type="button" class="btn btn-primary">Enroll Now</button>
                </div>
            </div>

            <div class="box col-lg-4 col-md-4 col-sm-12 text-center">
                <img src="./images/pexels-naomi-shi-1001914.jpg" alt="">
                <div class="box-overlay">
                        <h3>secondary</h3>
                        <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, libero!</p>

                    <p class="content"><span class="highlight">age</span>:3-5 years,<span class="highlight">time</span>:8-10 AM,<span class="highlight"> Seat</span>:25</p>
                    <button type="button" class="btn btn-primary">Enroll Now</button>
                </div>
            </div>

            <div class="box col-lg-4 col-md-4 col-sm-12 text-center">
                <img src="./images/pexels-samer-daboul-1815257.jpg" alt="">
                <div class="box-overlay">
                    <h3>summer programmes</h3>
                    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, libero!</p>

                    <p class="content"><span class="highlight">age</span>:3-5 years,<span class="highlight">time</span>:8-10 AM,<span class="highlight"> Seat</span>:25</p>
                    <button type="button" class="btn btn-primary">Enroll Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- course section ends -->

<!-- stats section starts -->
<section class="stats">
    <div class="statistic">
        <div class="stat-head">
            <img src="./images/logo.png" alt="...">
            <p class="content">You can see our Statistics' rate here</p>
        </div>

        <div class="wrapper">
            <div class="container">
                <i class="fas fa-graduation-cap"></i>
                    <span class="num" data-val="1200">0000</span>
                <span class="text">students</span>
            </div>

            <div class="container">
                <i class="fas fa-chalkboard-teacher"></i>
                    <span class="num" data-val="150">000</span>
                <span class="text">teachers</span>
            </div>

            <div class="container">
                <i class="fas fa-users"></i>
                <span class="num" data-val="60">00</span>
                <span class="text">classroom</span>
            </div>

            <div class="container">
                <i class="fas fa-bus"></i>
                    <span class="num" data-val="50">00</span>
                <span class="text">bus</span>
            </div>
        </div>
    </div>
</section>
<!-- stats section ends -->

<!-- activity section starts -->
<section class="activity-section">
    <div class="activity">
        <div class="activity-head">
            <h1 class="heading">our activities</h1>
            <p class="content">We hold many activities to make our children grow happily and smart</p>
        </div>

        <div class="pic-box">
            <div class="img-box">
                <img src="./images/image 1.jpg" alt="">
                <div class="img-overlaybox">
                    <p class="content">We</p>
                </div>
            </div>

            <div class="img-box">
                <img src="./images/image 2.jpg" alt="">
                <div class="img-overlaybox">
                    <p class="content">Love</p>
                </div>
            </div>

            <div class="img-box">
                <img src="./images/image 3.jpg" alt="">
                <div class="img-overlaybox">
                    <p class="content">Attending</p>
                </div>
            </div>

            <div class="img-box">
                <img src="./images/image 4.jpg" alt="">
                <div class="img-overlaybox">
                    <p class="content">Our</p>
                </div>
            </div>

            <div class="img-box">
                <img src="./images/image 5.jpg" alt="">
                <div class="img-overlaybox">
                    <p class="content">School</p>
                </div>
            </div>

            <div class="img-box">
                <img src="./images/image 6.jpg" alt="">
                <div class="img-overlaybox">
                    <p class="content"><i class="fas fa-heart"></i></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- activity section ends -->

<!-- subscribe section starts -->
<div class="subscribe">
    <label for="email">do you want to know get update <br> what's upcoming?</label>
    <input type="email" name="email" id="" placeholder="email address">
    <button type="button" class="btn">Subscribe Now!</button>
</div>
<!-- subscribe section end -->

<?php
    include "./layout/footer.php";
?>