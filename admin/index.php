
<!-- require('top.inc.php'); -->

<?php 

    include 'top.inc.php' ;
    $query = "SELECT COUNT(*) AS product_count FROM product";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $product_count = $row['product_count'];
    } else {
        $product_count = 'N/A'; 
    }

    $query = "SELECT COUNT(*) AS pending_orders_count FROM `order` WHERE order_status = 1";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $pending_orders_count = $row['pending_orders_count'];
    } else {
        $pending_orders_count = 'N/A'; 
    }

    $query = "SELECT COUNT(*) AS user_count FROM users";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $user_count = $row['user_count'];
    } else {
        $user_count = 'N/A';
    }
?>

<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Dashboard </h4>
				</div>
				<div>
					
				</div>
			</div>
		  </div>
	   </div>
       <?php
       if($_SESSION['ADMIN_ROLE']== 'Admin' && $_SESSION['ADMIN_ROLE']== 'Product Team'){
        ?>
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="bi bi-box"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"><?php echo $product_count; ?></span></div>
                                    <div class="stat-heading">Products</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="bi bi-cart"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"><?php echo $pending_orders_count; ?></span></div>
                                    <div class="stat-heading">Pendings Orders</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- s -->

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"><?php echo $user_count; ?></span></div>
                                    <div class="stat-heading">Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <!-- /Widgets -->
	</div>
</div>
<?php
require('footer.inc.php');
?>