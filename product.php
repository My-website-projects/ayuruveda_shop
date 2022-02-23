<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ayuruveda | Products</title>

    <!-- Common Tags -->
    <?php require('includes/head.php') ?>
</head>

<body>
    <!-- Navbar and Header -->
    <?php require('includes/navbar.php') ?>

    <section>
        <div class="container">
            <div class="" id="message"></div>
            <div class="row mt-4 pb-3">
                <?php
                    include './connection/connect.php';
                    $stmt = $con->prepare("SELECT * FROM product");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()):
                ?>
                <div class="col-md-4" style="text-align: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $row['product_image'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title bold"><?= $row['product_name'] ?></h5>
                            <h5 class="card-title bold">Rs. <?= $row['product_price'] ?> /=</h5>
                            <form action="" class="form-submit">
                                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">

                                <div class="btnrow">
                                    <a class="btn btn-primary addItemBtn">Add to cart</a>
                                    <a href="#" class="btn btn-primary"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </section>
    <!-- Navbar and Header -->
    <?php require('includes/footer.php') ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".addItemBtn").click(function(e){
                e.preventDefault();
                var $form = $(this).closest(".form-submit");
                var pid = $form.find(".pid").val();
                var pname = $form.find(".pname").val();
                var pprice = $form.find(".pprice").val();
                var pimage = $form.find(".pimage").val();
                var pcode = $form.find(".pcode").val();

                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    data: {pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
                    success:function(response){
                        $("#message").html(response);
                        window.scrollTo(0,0);
                        load_cart_item_number();
                    }
                });
            });

            load_cart_item_number();

            function load_cart_item_number(){
                $.ajax({
                    url: 'action.php',
                    method: 'get',
                    data: {cartItem:"cart_item"},
                    success:function(response){
                        $("#cart-item").html(response);
                    }
                });
            }
        });
    </script>
</body>

</html>