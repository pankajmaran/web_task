<link rel="stylesheet" href="bootstrap.css">
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap.js"></script>
 
<div class="container" style="margin-top: 50px;">
 
    <!-- link to open cart page -->
    <div class="row">
        <div class="col-md-6">
            <a href="cart.php" class="btn btn-link">
                Cart
            </a>
        </div>
    </div>
 
    <div class="row">
        <?php
        // connect with database
        // $conn = mysqli_connect("localhost:8889", "root", "root", "classicmodels");
        $url='localhost';
        $username='root';
        $password='';
        $conn=mysqli_connect($url,$username,$password,"test");
        if(!$conn){
            die('Could not Connect My Sql:' .mysql_error());
        }
         
        // get all products
        $result = mysqli_query($conn, "SELECT * FROM products");
 
        // get cookie cart
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);
 
        // loop through all cart items
        while ($row = mysqli_fetch_object($result))
        {
            // check if product already exists in cart
            $flag = false;
            foreach ($cart as $c)
            {
                if ($c->productCode == $row->ID)
                {
                    $flag = true;
                    break;
                }
            }
            ?>
 
            <div class="col-md-3" style="margin-bottom: 20px;">
                <div class="card" style="height: 200px;">
                <!-- <img src="images/category-2.jpg" alt="" />
                <img src="images/category-2.jpg" alt="" />
                <img src="images/category-2.jpg" alt="" />
                <img src="images/category-2.jpg" alt="" /> -->
                    <div class="card-body">
                    
                        <h5 class="card-title">
                       
                            <?php echo $row->Item_name; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $row->cost; ?>
                        </p>
 
                        <?php if ($flag) { ?>
 
                            <!-- show delete button if already exists -->
 
                            <form method="POST" action="delete-cart.php">
                                <input type="hidden" name="productCode" value="<?php echo $row->ID; ?>">
                                <input type="submit" class="btn btn-danger" value="Delete from cart">
                            </form>
 
                        <?php } else { ?>
 
                            <!-- add to cart -->
                            
                            <form method="POST" action="add-cart.php">
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="productCode" value="<?php echo $row->Id; ?>">
                                <input type="submit" class="btn btn-primary" value="Add to cart">
                            </form>
 
                        <?php } ?>
 
                    </div>
                </div>
            </div>
 
            <?php
        }
        ?>
    </div>
</div>