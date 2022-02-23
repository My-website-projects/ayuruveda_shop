<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ayuruveda</title>

    <!-- Common Tags -->
    <?php require('includes/head.php') ?>
</head>

<body>
    <!-- Navbar and Header -->
    <?php require('includes/navbar.php') ?>

    <section>
        <!-- Slide -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/slide (1).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/slide (2).jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/slide (3).jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="home-product">
        <div class="container">
            <div class="title">
                <h2>Products</h2>
            </div>
            <div class="product-list">
                <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/products/Aloe_safrone.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">ALOE SAFFRON GEL AND SKIN REJUVENATION</h5>
                                <div class="btnrow">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                    <a href="#" class="btn btn-primary"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/products/Herbal Soap.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">KRISHNA AYURVEDA Herbal Soap</h5>
                                <div class="btnrow">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                    <a href="#" class="btn btn-primary"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/products/KERALA AYURVEDA Baby Oil.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">KERALA AYURVEDA Baby Oil</h5>
                                <div class="btnrow">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                    <a href="#" class="btn btn-primary"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Navbar and Header -->
    <?php require('includes/footer.php') ?>
</body>

</html>