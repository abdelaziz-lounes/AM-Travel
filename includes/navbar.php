<nav class="nav-links" id="horizontal">
    <a href="#home" id="logo"><img class="logo" src="<?php echo URLROOT ?>/Images/Asset1.png" alt="logo"></a>
    <ul>
        <li><a href="#home">HOME</a></li>
        <li><a href="includes/logout.php">ABOUT US</a></li>
        <li><a href="#Blog">BLOGS</a></li>
        <li><a href="pages/contact.php">CONTACT</a></li>
    </ul>
    <div>
        <?php
        if (isset($_SESSION["user"])) {

        ?>
            <div style="text-align:center;">
                <h3 id="profile"> <?php echo $_SESSION["user"]; ?></h3>
            </div>
    </div>
    <div style="margin-left:1vw;" class="nav-btn">
        <a href="includes/logout.php" id="logout">logout</a>
    </div>
<?php
        } else {
?>
    <div class="nav-btn">
        <a href="login.php" id="create-btnlink">Creat Account</a>
    </div>
    </div>
<?php
        }
?>

<!-- menu bars -->
<div class="menu-bars" id="menu-bars">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
</div>
</nav>
<!-- overlay -->
<div class="overlay slide-right" id="overlay">
    <nav id="vertical">
        <ul>
            <li id="nav-1" class="slide-out-1"><a href="#home">Home</a></li>
            <li id="nav-2" class="slide-out-2"><a href="#about">About</a></li>
            <li id="nav-3" class="slide-out-3"><a href="#Blog">Blogs</a></li>
            <li id="nav-4" class="slide-out-4"><a href="pages/contact.php">Contact</a></li>
            <?php if (isset($_SESSION["user"])) { ?>
                <li id="nav-5" class="slide-out-5"><a href="includes/logout.php">logout</a></li>
            <?php } else {
            ?>
                <li id="nav-5" class="slide-out-5"><a href="<?php echo URLROOT ?>/login.php">Create Account</a></li>
            <?php
            } ?>
            <li id="nav-6" class="slide-out-6"><a href="#home" id="logo"><img class="logo" src="Images/Asset1.png" alt="logo"></a></li>
        </ul>
    </nav>
</div>