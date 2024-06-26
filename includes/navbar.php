<?php
$wishlist_count = 0;
$cat_res = mysqli_query($con, "select * from categories where status=1 order by categories asc");
$cat_arr = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr[] = $row;
}

$obj = new add_to_cart();
$totalProduct = $obj->totalProduct();

if (isset($_SESSION['USER_LOGIN'])) {
    $uid = $_SESSION['USER_ID'];

    if (isset($_GET['wishlist_id'])) {
        $wid = get_safe_value($con, $_GET['wishlist_id']);
        mysqli_query($con, "delete from wishlist where id='$wid' and user_id='$uid'");
    }

    $wishlist_count = mysqli_num_rows(mysqli_query($con, "select product.name,product.image,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'"));

}

?>
<header class="header-5 short-stor">
    <div class="container-fluid">
        <div class="row">
            <!-- logo start -->
            <div class="col-lg-3 text-center">
                <div class="top-logo">
                    <a href="index.php"><img width="100" height="80" src="img/newlogoo.png" alt="" /></a>
                </div>
            </div>
            <!-- logo end -->
            <!-- mainmenu area start -->
            <div class="col-lg-6 text-center">
                <div class="mainmenu">
                    <nav>
                        <ul class="d-flex align-items-right justify-content-right">
                            <li class="expand" href=""><a>Shop</a>
                                <div class="restrain mega-menu megamenu1">
                                    <div class="">
                                        <?php
                                        foreach ($cat_arr as $list) {
                                            ?>
                                            <div class="col-12">
                                                <span>
                                                    <a class="mega-menu-title"
                                                        href="categories.php?id=<?php echo $list['id'] ?>">
                                                        <?php echo $list['categories'] ?>
                                                    </a>
                                                    <?php
                                                    $cat_id = $list['id'];
                                                    $sub_cat_res = mysqli_query($con, "select * from sub_categories where status='1' and categories_id='$cat_id'");
                                                    if (mysqli_num_rows($sub_cat_res) > 0) {
                                                        while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
                                                            echo '<a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a>';
                                                        }
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="">
                                        <span class="block-last">
                                            <img class="img-fluid" src="img/brown kurta.webp" alt="" />
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li><a href="about-us.php">About Us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- mobile menu start -->
                <div class="row">
                    <div class="col-sm-12 mobile-menu-area">
                        <div class="mobile-menu hidden-md d-lg-none" id="mob-menu">
                            <span class="mobile-menu-title">Menu</span>
                            <a href="javascript:void(0);" class="openNav">
                                <i class="fa fa-bars" style="color: white;"></i>
                            </a>
                            <!-- Categories Menu -->
                            <div class="categories-menu">
                                <ul class="categories-list">
                                    <?php foreach ($cat_arr as $list) { ?>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);" class="expand-cat">
                                                <?php echo $list['categories']; ?>
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <?php
                                                $cat_id = $list['id'];
                                                $sub_cat_res = mysqli_query($con, "select * from sub_categories where status='1' and categories_id='$cat_id'");
                                                if (mysqli_num_rows($sub_cat_res) > 0) {
                                                    while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
                                                        echo '<li><a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a></li>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile menu end -->
            </div>

            <!-- mainmenu area end -->
            <!-- top details area start -->
            <div class="col-lg-3 nopadding-left">
                <div class="top-detail">
                    <!-- language division start -->
                    <div class="disflow" style=" color: white ;height: 60; width:25.19 ">
                        <?php
                        if (isset($_SESSION['USER_LOGIN'])) {
                            ?>
                            <div class="expand lang-all disflow">
                                <span> Hi
                                    <?php echo $_SESSION['USER_NAME'] ?>
                                </span>

                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <!-- language division end -->
                    <!-- addcart top start -->
                    <div class="disflow" style="height: 60; width:25.19">
                        <div class="circle-shopping expand">
                            <div class="shopping-carts text-end">
                                <div class="cart-toggler">

                                    <a href="cart.php"><i class="icon-bag"></i></a>
                                    <a href="cart.php"><span class=" htc__qua cart-quantity">
                                            <?php echo $totalProduct ?>
                                        </span></a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="disflow" style="height: 60; width:25.19">
                        <div class="circle-shopping expand">
                            <div class="shopping-carts text-end">
                                <div class="cart-toggler">

                                    <a href="wishlist.php"><i class="fa fa-heart"></i></a>
                                    <a href="wishlist.php"><span class=" htc__wishlist heart-quantity">
                                            <?php echo $wishlist_count ?>
                                        </span></a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="disflow" style="height: 60; width:25.19">
                        <a href="#" id="contactUsBtn" class="whatsapp-icon">
                            <i class="fa fa-whatsapp whatsapp-icon-custom-size "></i>
                        </a>
                    </div>

                    <!-- addcart top start -->
                    <!-- search divition start -->
                    <div class="disflow" style="height: 60; width:25.19">
                        <div class="header-search expand">
                            <div class="search-icon fa fa-search"></div>
                            <div class="product-search restrain">
                                <div class="container nopadding-right">
                                    <form action="search.php" id="searchform" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" maxlength="128"
                                                placeholder="Search product..." name="str">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i
                                                        class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- search divition end -->
                    <div class="disflow" style="height: 60; width:25.19">
                        <div class="expand dropps-menu">
                            <a href="#"><i class="fa fa-align-right fa-lg"></i></a>
                            <ul class="restrain language">
                                <?php
                                if (isset($_SESSION['USER_LOGIN'])) {
                                    ?>
                                    <li><a href="profile.php">My Account</a></li>
                                    <?php
                                } ?>

                                <li><a href="wishlist.php">My Wishlist</a></li>
                                <li><a href="cart.php">My Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <?php
                                if (isset($_SESSION['USER_LOGIN'])) {
                                    ?>
                                    <li><a href="my_order.php">My Orders</a></li>
                                    <li><a href="logout.php">Log out</a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li><a href="login.php">Log In</a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top details area end -->
        </div>
    </div>
</header>

<script>
    // Ensure the DOM content is fully loaded before adding event listeners
    document.addEventListener('DOMContentLoaded', function () {
        // Toggle mobile navigation
        document.querySelector('.openNav').addEventListener('click', function () {
            document.getElementById("mob-menu").classList.toggle("show");
            document.querySelector('.categories-menu').classList.toggle("show");
        });

        // Toggle category dropdown
        document.querySelectorAll('.expand-cat').forEach(item => {
            item.addEventListener('click', function () {
                this.parentNode.querySelector('.sub-menu').classList.toggle('show');
            });
        });
    });
</script>