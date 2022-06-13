<?php
require_once '../config/config.php';
require "../includes/header.php";
?>

<body>
    <header id="dubai">
        <?php require_once '../includes/navbar.php' ?>
        <div class="title-box">
            <h1 data-aos="fade-up">Welcome to dubai <br></h1>
            </div>
            <div style="background-color: white; color:black;" id="data"></div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="distinations-container">
                <h1>Our destinations</h1>
                <div class="zone blue grid-wrapper">
                    <div class="box zone 1"><img src="../images/dubai/1.png"></div>
                    <div class="box zone 2"><img src="../images/dubai/2.png"></div>
                    <div class="box zone 3"><img src="../images/dubai/3.png"></div>
                    <div class="box zone 3"><img src="../images/dubai/4.png"></div> 
                    <div class="box zone 5"><img src="../images/dubai/5.png"></div>
                    <div class="box zone 7"><img src="../images/dubai/7.png"></div>
                    <div class="box zone 8"><img src="../images/dubai/8.png"></div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <footer id="contuct">
        <?php require_once '../includes/footer.php' ?>

</body>

</html>