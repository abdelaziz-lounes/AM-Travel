<div class="first-contact">
    <!-- logo -->
    <div class="logo-desc">
        <a href="#"><img class="logo" src="<?php echo URLROOT ?>/Images/Asset1.png" alt="logo"></a>
    </div>
    <!-- end logo -->
    <div class="lpContainer">
        <div class="links" data-aos="zoom-in-up">
            <h3>Quick links</h3>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#Guide">City Guide</a></li>
                <li><a href="#Blog">Blog</a></li>
            </ul>
        </div>
        <div class="post" data-aos="zoom-in-up">
            <h3>Recent post</h3>
            <p>Top 5 HImalayan Treks may 17,2021</p>
        </div>
        <div class="company" data-aos="zoom-in-up">
            <h3>Agency</h3>
            <ul>
                <li><a href="#">contuct us</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Feed back</a></li>
            </ul>
        </div>
    </div>
</div>
<!--second contact  -->
<div class="sndContact">
    <!-- social media -->
    <div class="social-media" data-aos-duration="500">
        <div class="facebook">
            <i class="fa-brands fa-facebook"></i>
            <p>facebook</p>
        </div>
        <div class="Twitter">
            <i class="fa-brands fa-twitter"></i>
            <p>Twitter</p>
        </div>
        <div class="Linkdin">
            <i class="fa-brands fa-linkedin-in"></i>
            <p>Linkdin</p>
        </div>
        <div class="Pintrest">
            <i class="fa-brands fa-pinterest"></i>
            <p>Pintrest </p>
        </div>
    </div>
    <!-- end social media -->
    <div class="copyright">
        <p>Copyright © 2022, AM-Travel.</p>
    </div>
</div>
<!-- end of 2 footer > div -->
<!-- copyright -->

</footer>
<script src="js/app.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    $(document).on("keyup", "#location", function(e) {
        e.preventDefault();

        let location = $("#location").val()

        $.ajax({
            url: "includes/search.inc.php",
            method: "post",
            data: {
                location: location,


            },
            success: function(data, status) {
                if (data.length > 0) {
                    console.log(data)
                    let res = $.parseJSON(data);
                    let html = "";

                    $("#data").html('')
                    res.result.forEach((element) => {
                        html = html.concat("<a style='padding:5px ; display:block  ; color:white' href=" + element.url + ">" + element.page + "</a>");
                        console.log(html)
                    })

                    $("#data").html(html)
                } else {
                    $("#data").html('')
                }




            }
        })

    });
</script>