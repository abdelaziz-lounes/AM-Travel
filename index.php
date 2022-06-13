<?php
require_once 'config/config.php';
require_once 'includes/header.php' ?>

<body>
    <header id="homenav">
        <?php require_once 'includes/navbar.php' ?>
        <div class="title-box">
            <h1 data-aos="fade-up">Exploring The World <br>
            </h1>
            <h2 data-aos="fade-up" data-text="In_Comfort...">In_Comfort...</h2>
            <p data-aos="fade-right">You do not have the right to remain silent… let us know what it takes to challenge you</p>
            <div class="inbox">
                <!-- SEARCH -->
                <div class="search-con">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <input id="location" type="text" placeholder="C.location">
                    </div>
                </div>
                <button class="sub-btn" id="sub" type="submit">Search</button>
            </div>
            <div class="inbox">
                <div id="insinbox" style="display: flex;background-color: black;justify-content: space-around;align-items: center;width: 574px;color:white">
                    <div id="data"></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- first section -->
        <section class="first" id="home">
            <div class="container">
                <div class="titre" data-aos="fade-up" data-aos-duration="500">
                    <h1>We Provide Best</h1>
                    <p>Take high quality online courses from the best online instrictors <br>
                        around the world & develop your skills.
                    </p>
                </div>
                <div class="trips">
                    <div class="trip" data-aos="fade-right" data-aos-delay="1000">
                        <img src="Images/trip1.png" alt="trip1">
                        <div class="text-trip">
                            <h2>Select Destination</h2>
                            <p>At first choose the place you wanted to go</p>
                        </div>
                    </div>
                    <div class="trip" data-aos="fade-up" data-aos-delay="1400">
                        <img src="Images/trip2.png" alt="trip2">
                        <div></div>
                        <div class="text-trip">
                            <h2>Book a Trip</h2>
                            <p>book your tip form our exclusive offers</p>
                        </div>
                    </div>
                    <div class="trip" data-aos="fade-left" data-aos-delay="1600">
                        <img src="Images/trip3.png" alt="trip3">
                        <div></div>
                        <div class="text-trip">
                            <h2>Take your flight</h2>
                            <p>Take your flight on selected date and joy</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- second section -->
        <section class="second" id="blog">
            <div class="container">
                <div class="descript" data-aos="zoom-in-right" data-aos-delay="500">
                    <div class="descript-title">
                        <h3 style="color: #4141A5;">TOP CITYS </h3>
                        <h1>Explore all corners of <br>
                            the world with us.
                        </h1>
                    </div>
                    <div class="descript-p">
                        <p>These exercises ran in parallel with a series of focus groups comprising of parents. <br> These exercises ran in parallel with a series of focus groups comprising of parents.</p>
                    </div>
                </div>
                <div class="pics">
                    <div class="normal" data-aos="flip-left" data-aos-delay="500">
                        <img src="Images/boat.png" alt="">
                        <div></div>
                        <h2>Nanjing, China</h2>
                        <p>These exercises ran in parallel with a series of focus groups comprising of parents. These exercises ran in parallel with a series.</p>
                    </div>
                    <div class="slide">
                        <div class="box" data-aos="zoom-in-right" data-aos-delay="1400">
                            <img id="last-clone" src="Images/gate.png" alt="gate">
                            <img src="Images/speed.png" alt="speed">
                            <img src="Images/mosque.png" alt="mosque">
                            <img src="Images/gate.png" alt="gate">
                            <img id="first-clone" src="Images/speed.png" alt="speed">
                        </div>
                        <div class="buttons">
                            <button id="prevBtn" class="btn"><i class="fa-solid fa-arrow-left"></i></button>
                            <button id="nextBtn" class="btn"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 3rd section-  -->
        <section class="third" id="Guide">
            <div class="container">
                <div class="titre" data-aos="fade-down">
                    <h1>Best places</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                    </p>
                </div>
                <div class="trips">
                    <div class="trip" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <img src="Images/spain.png" alt="place1" class="places">
                        <h2>spain</h2>
                        <!-- font awsome icon here -->
                        <div class="info-container">
                            <i class="fa-regular fa-clock"></i>
                            <p>7 days/6</p>
                            <span>$544.0</span>
                        </div>
                    </div>
                    <div class="trip" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <img src="Images/japan.png" alt="place2" class="places">
                        <h2>japan</h2>
                        <!-- font awsome icon here -->
                        <div class="info-container">
                            <i class="fa-regular fa-clock"></i>
                            <p>7 days/6</p>
                            <span>$544.0</span>
                        </div>
                    </div>
                    <div class="trip" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <img src="Images/london.png" alt="place3" class="places">
                        <h2>London</h2>
                        <!-- font awsome icon here -->
                        <div class="info-container">
                            <i class="fa-regular fa-clock"></i>
                            <p>7 days/6</p>
                            <span>$544.0</span>
                        </div>
                    </div>
                    <div class="trip" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <span><img src="Images/canada.png" alt="place4" class="places"></span>
                        <h2>Canada</h2>
                        <!-- font awsome icon here -->
                        <div class="info-container">
                            <i class="fa-regular fa-clock"></i>
                            <p>7 days/6</p>
                            <span>$544.0</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section 4 -->
        <section class="four">
            <div class="titre" data-aos="fade-up" data-aos-duration="500">
                <h1>Our Tour Partner</h1>
                <p>There are many variations of passages available, but the majority have suffered alteration.</p>
            </div>
            <!-- animated partners -->
            <div class="partners">
                <div class="partners-logos">
                    <div class="marque-container" style="--pause-on-hover:running; --pause-on-click:running;">
                        <div class="Overlay" style="--gradient-color:rgba(255, 255, 255, 1), rgba(255, 283, 255, 0); --gradient-width:200px;"></div>
                        <div class="marque" style="--play:running; --direction:normal; --duration:54.5532s; --delay:0s; --iteration-count:infinite;">
                            <img class="logos" src="Images/1.png" alt="">
                            <img class="logos" src="Images/2.png" alt="">
                            <img class="logos" src="Images/3.png" alt="">
                            <img class="logos" src="Images/4.png" alt="">
                            <img class="logos" src="Images/5.png" alt="">
                            <img class="logos" src="Images/6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of section -->
        <section class="six" id="about">
            <div class="container">
                <div class="descript-title" data-aos="fade-up" data-aos-duration="500">
                    <h3 style="color: #4141A5;">TESTIMONIALS </h3>
                    <h1>
                        What our client say.
                    </h1>
                    <p>Create a visual identity for your company, and an overall brand</p>
                </div>
                <div class="reviews">
                    <div class="review">
                        <img src="Images/face1.jpg" alt="">
                        <div class="review-t">
                            <h2>John Smith</h2>
                            <p>Product designer</p>
                        </div>
                        <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></div>
                        <p>Before we define any approach, we need to define the brands' overall goal.
                            We then need to dive.</p>
                    </div>
                    <div class="review">
                        <img src="Images/j.jpg" alt="">
                        <div class="review-t">
                            <h2>John Smith</h2>
                            <p>Product designer</p>
                        </div>
                        <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></div>
                        <p>Before we define any approach, we need to define the brands' overall goal.
                            We then need to dive.</p>
                    </div>
                    <div class="review">
                        <img src="Images/face2.jpg" alt="">
                        <div class="review-t">
                            <h2>John Smith</h2>
                            <p>Product designer</p>
                        </div>
                        <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></div>
                        <p>Before we define any approach, we need to define the brands' overall goal.
                            We then need to dive.</p>
                    </div>
                    <div class="review">
                        <img src="Images/jeg.jpg" alt="">
                        <div class="review-t">
                            <h2>John Smith</h2>
                            <p>Product designer</p>
                        </div>
                        <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></div>
                        <p>Before we define any approach, we need to define the brands' overall goal.
                            We then need to dive.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- part seven -->
        <section class="seven" id="Blog">
            <div class="container">
                <div class="descript-title" data-aos="fade-up">
                    <h3 style="color: #4141A5;">TOP CITYS </h3>
                    <h1>
                        Our popular cities.
                    </h1>
                    <p>We're a team of humans with the strategy, tools, <br>and solutions and digital products.</p>
                </div>
                <ul id="autoWidth" class="cs-hidden">
                    <!-- 1 -->
                    <li class="item-a" data-aos="flip-left">
                        <!-- img box-->
                        <div class="slide-img">

                            <img src="Images/dubai.png" class="model" alt="">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li>
                    <!-- 2 -->
                    <li class="item-b" data-aos="flip-left" data-aos-duration="100">
                        <!-- img box-->
                        <div class="slide-img">
                            <img src="Images/bali.png" class="model" alt="">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li>
                    <!-- 3 -->
                    <li class="item-c" data-aos="flip-left" data-aos-duration="200">
                        <!-- img box-->
                        <div class="slide-img">
                            <img src="Images/spain copy.png" class="model" alt="beaty places">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li>
                    <!-- 4 -->
                    <li class="item-d" data-aos="flip-left" data-aos-duration="300">
                        <!-- img box-->
                        <div class="slide-img">
                            <img src="Images/qatar.png" class="model" alt="">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li>

                    <!-- 5 -->
                    <li class="item-e" data-aos="flip-left" data-aos-duration="400">
                        <!-- img box-->
                        <div class="slide-img">
                            <img src="Images/romania.png" class="model" alt="">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li>
                    <!-- 6 -->
                    <li class="item-f" data-aos="flip-left" data-aos-duration="500">
                        <!-- img box-->
                        <div class="slide-img">
                            <img src="Images/emarat.png" class="model" alt="">
                            <div class="layer">
                                <h3>EXPLORE NOW!</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <!-- footer -->
    <footer id="contuct">
        <!-- promotion  -->
        <div class="offer">
            <div class="pro-text" data-aos="fade-down">
                <h2>Get our pro offers</h2>
                <p>create a visual identity for yor company,and overallbrand</p>
            </div>
            <div class="get-offer">
                <input type="email" name="email" id="email" placeholder="enter your email here">
                <button type="submit">Subscribe</button>
            </div>
        </div>
        <!-- end promotion -->
        <?php require_once 'includes/footer.php'; ?>
</body>

</html>