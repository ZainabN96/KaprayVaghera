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
<link rel="stylesheet" href="styles.css">
<!-- <style>
   
</style> -->
<!-- header area start -->
<header class="header-5 short-stor ">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="mainmenu about">
                    <nav class="nav-links">
                        <ul class="main__menu">
                            <?php foreach ($cat_arr as $list) { ?>
                                <li class="drop">
                                    <a href="categories.php?id=<?php echo $list['id']; ?>">
                                        <?php echo $list['categories']; ?>
                                    </a>
                                    <ul class="dropdown">
                                        <?php
                                        $cat_id = $list['id'];
                                        $sub_cat_res = mysqli_query($con, "SELECT * FROM sub_categories WHERE status=1 AND categories_id='$cat_id'");
                                        if (mysqli_num_rows($sub_cat_res) > 0) {
                                            while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
                                                echo '<li><a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a></li>';
                                            }
                                        } else {
                                            echo '<li>No subcategories available</li>'; // Optional fallback
                                        }
                                        ?>
                                    </ul>
                                </li>
                            <?php } ?>
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
        </div>
    </div>
</header>
<!-- header area end -->


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add toggle behavior for dropdowns in mobile view
        document.querySelectorAll('li.drop > a').forEach(function(categoryLink) {
            categoryLink.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent the link from navigating
                const parent = this.parentElement; // Get the parent <li>
                parent.classList.toggle('open'); // Toggle the "open" class
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Toggle mobile navigation
        document.querySelector('.openNav').addEventListener('click', function() {
            document.getElementById("mob-menu").classList.toggle("show");
            document.querySelector('.categories-menu').classList.toggle("show");
        });

        // Toggle category dropdown
        document.querySelectorAll('.expand-cat').forEach(item => {
            item.addEventListener('click', function() {
                this.parentNode.querySelector('.sub-menu').classList.toggle('show');
            });
        });
    });
</script>