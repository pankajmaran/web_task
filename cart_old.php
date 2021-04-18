<link rel="stylesheet" href="bootstrap.css">
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap.js"></script>
 
<div class="container" style="margin-top: 50px;">
 
    <?php
    $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
    $cart = json_decode($cart);
 
    $total = 0;
 
    foreach ($cart as $c)
    {
    //    <scritp>  console.log($c);</script>
        $total += $c->cost * $c->quantity;
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $c->productCode; ?></h5>
                        <p class="card-text"><?php echo $c->cost * $c->quantity; ?></p>
 
                        <form method="POST" action="delete-cart.php" style="float: right; margin-left: 10px;">
                            <input type="hidden" name="productCode" value="<?php echo $c->productCode; ?>">
                            <button type="submit" class="btn btn-danger">
                                x
                            </button>
                        </form>
 
                        <form method="POST" action="update-cart.php" style="float: right;">
                            <input type="number" name="quantity" min="1" value="<?php echo $c->quantity; ?>">
                            <input type="hidden" name="productCode" value="<?php echo $c->productCode; ?>">
                            <input type="submit" class="btn btn-warning" value="Update">
                        </form>
 
                    </div>
                </div>
            </div>
        </div>
 
        <?php
    }
    ?>
 
    <p>
        <?php echo $total; ?>
    </p>
 
</div>