<?php 

?>
<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2">
                <div class="account-bar">
                    <a href="login.php">Login</a>
                    <div> | </div>
                    <a href="#">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Navbar -->
<nav class="Main-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Ayuruveda</a>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link"  href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">
                        <i class="fa-solid fa-cart-arrow-down"></i> <span id="cart-item" class="badge bg-danger"></span>
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>

<style>
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');

header {
    width: 100%;
    height: 30px;
    background-color: #07660a;
}

header .col-11 {
    text-align: end;
}

header .account-bar {
    display: flex;
    flex-direction: end;
}

header .account-bar a {
    color: white;
}

header .account-bar div {
    color: white;
    padding-left: 5px;
    padding-right: 5px;
}

.Main-nav{
    height: 75px;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.Main-nav a{
    color: #07660a;
    font-size: 45px;
    margin-top: 30px;
    font-family: 'Kaushan Script', cursive;
}
.navbar-nav .nav-item{
    margin-left: 30px;
}
</style>