<?php
    include './connection/connect.php';

    $grand_total = 0;
    $allItems = '';
    $items = array();

    $sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()){
        $grand_total +=$row['total_price'];
        $item[] = $row['ItemQty'];
    }
    $allItems = implode("<br/>", $item);
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ayuruveda | Checkout</title>

    <!-- Common Tags -->
    <?php require('includes/head.php') ?>
</head>

<body>
    <!-- Navbar and Header -->
    <?php require('includes/navbar.php') ?>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 px-4 pb-4" id="order">
                    <h4 class="text-center text-dark p-2">Complete your order!</h4>
                    <div class="card-body p-3 mb-2 text-center">
                        <h6 class="lead bg-info"><b>Product : </b><?= $allItems; ?></h6>
                        <h6 class="lead bg-secondary"><b>Delivery Charge : </b>Free</h6>
                        <h5><b>Total Amount Payable : Rs. </b><?= number_format($grand_total,2) ?></h5>
                    </div>
                    <form action="" method="post" id="placeOrder">
                        <input type="hidden" name="products" value="<?= $allItems; ?>">
                        <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
                        <div class="form-group mt-2">
                            <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                        </div>
                        <div class="form-group mt-2">
                            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                        </div>
                        <div class="form-group mt-2">
                            <input type="tel" name="phone" class="form-control" placeholder="Enter phone" required>
                        </div>
                        <div class="form-group mt-2">
                            <textarea name="address" class="form-control" id="" cols="3" rows="4"placeholder="Enter Delivery Address"></textarea>
                        </div>
                        <h6 class="text-center mt-2">Select Payment Mode</h6>
                        <div class="form-group mt-2 mb-3">
                            <select name="pmode" class="form-select" id="">
                                <option value="" selected disabled>-Select Payment Mode-</option>
                                <option value="cod">Cash on Delivery</option>
                                <option value="cards">Debit/Credit card</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <input type="submit" name="submit" value="Place Order" class="btn btn-warning btn-block col-12 mx-auto" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Navbar and Header -->
    <?php require('includes/footer.php') ?>

    <!-- Script -->
    <script type="text/javascript">
    $(document).ready(function() {

        $("#placeOrder").submit(function(e){
            e.preventDefault();
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: $('form').serialize()+"&action=order",
                success: function(response){
                    $("#order").html(response);
                }
            });
        });

        load_cart_item_number();

        function load_cart_item_number() {
            $.ajax({
                url: 'action.php',
                method: 'get',
                data: {
                    cartItem: "cart_item"
                },
                success: function(response) {
                    $("#cart-item").html(response);
                }
            });
        }
    });
    </script>
</body>

</html>