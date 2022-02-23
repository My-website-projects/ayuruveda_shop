<?php
    session_start();
    include './connection/connect.php';

    if(isset($_POST['pid'])){
        $pid = $_POST['pid'];
        $pname = $_POST['pname'];
        $pprice = $_POST['pprice'];
        $pimage = $_POST['pimage'];
        $pcode = $_POST['pcode'];
        $pqty = 1;

        $stmt = $con->prepare("SELECT product_code from cart WHERE product_code=?");
        $stmt->bind_param("s",$pcode);
        $stmt->execute();
        $res = $stmt->get_result();
        $r = $res->fetch_assoc();
        $code = ($r['product_code'] ?? []);

        if(!$code){
            $query = $con->prepare("INSERT INTO cart (product_name,product_price,product_image,qty,total_price,product_code) VALUES (?,?,?,?,?,?)");
            $query->bind_param("sssiss",$pname,$pprice,$pimage,$pqty,$pprice,$pcode);
            $query->execute();

            echo '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <strong>Congratulations!</strong> Item added to your cart!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>Warning!</strong> Item already added to your cart!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
    if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
        $stmt = $con->prepare("SELECT * FROM cart");
        $stmt->execute();
        $stmt->store_result();
        $rows = $stmt->num_rows;

        echo $rows;
    }

    if(isset($_GET['remove'])){
      $id = $_GET['remove'];

      $stmt = $con->prepare("DELETE FROM cart WHERE id=?");
      $stmt->bind_param("i",$id);
      $stmt->execute();

      $_SESSION['showAlert'] = 'block';
      $_SESSION['message'] = 'Item removed from the cart!';
      header('location:cart.php');
    }

    if(isset($_GET['clear'])){
      $stmt = $con->prepare("DELETE FROM cart");
      $stmt->execute();

      $_SESSION['showAlert'] = 'block';
      $_SESSION['message'] = 'All Item removed from the cart!';
      header('location:cart.php');
    }

    if(isset($_POST['qty'])){
        $qty = $_POST['qty'];
        $pid = $_POST['pid'];
        $pprice = $_POST['pprice'];

        $tprice = $qty*$pprice;

        $stmt = $con->prepare("UPDATE cart SET qty=?, total_price=? WHERE id=?");
        $stmt->bind_param("isi",$qty,$tprice,$pid);
        $stmt->execute();
    }
?>