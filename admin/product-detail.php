<?php
require('top.inc.php');

if (isset($_GET['id'])) {
    $product_id = mysqli_real_escape_string($con, $_GET['id']);

    if ($product_id > 0) {
        // Fetch product details
        $get_product_query = mysqli_query($con, "SELECT * FROM product WHERE id='$product_id'");

        if (mysqli_num_rows($get_product_query) > 0) {
            $get_product = mysqli_fetch_assoc($get_product_query); // Fetch the product data

            // Fetch product price from the product_prices table
            $get_price_query = mysqli_query($con, "SELECT price FROM product_attributes WHERE product_id='$product_id'");
            if (mysqli_num_rows($get_price_query) > 0) {
                $price_data = mysqli_fetch_assoc($get_price_query);
                $product_price = $price_data['price']; // Assign the price from product_prices table
            } else {
                $product_price = "Price not available"; // Handle if price is not found
            }
        } else {
            echo "<script>alert('Product not found'); window.location.href = 'index.php';</script>";
            exit();
        }
    } else {
        header('Location: index.php');
        exit();
    }

    // Fetch multiple images and attributes as before...
    $resMultipleImages = mysqli_query($con, "SELECT product_images FROM product_images WHERE product_id='$product_id'");
    $multipleImages = [];
    if (mysqli_num_rows($resMultipleImages) > 0) {
        while ($rowMultipleImages = mysqli_fetch_assoc($resMultipleImages)) {
            $multipleImages[] = $rowMultipleImages['product_images'];
        }
    }

    $stmt = $con->prepare("SELECT product_attributes.*, color_master.color, size_master.size 
        FROM product_attributes 
        LEFT JOIN color_master ON product_attributes.color_id = color_master.id AND color_master.status = 1 
        LEFT JOIN size_master ON product_attributes.size_id = size_master.id AND size_master.status = 1 
        WHERE product_attributes.product_id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $resAttr = $stmt->get_result();

    $productAttr = [];
    $colorArr = [];
    $sizeArr = [];
    $colorArr1 = [];
    $sizeArr1 = [];

    if ($resAttr->num_rows > 0) {
        while ($rowAttr = $resAttr->fetch_assoc()) {
            $productAttr[] = $rowAttr;
            $colorArr[$rowAttr['color_id']][] = $rowAttr['color'];
            $sizeArr[$rowAttr['size_id']][] = $rowAttr['size'];

            $colorArr1[] = $rowAttr['color'];
            $sizeArr1[] = $rowAttr['size'];
        }
    }

    $is_size = !empty($sizeArr1) ? count(array_filter($sizeArr1)) : 0;
    $is_color = !empty($colorArr1) ? count(array_filter($colorArr1)) : 0;
}

if (isset($_POST['review_submit'])) {
    $rating = get_safe_value($con, $_POST['rating']);
    $review = get_safe_value($con, $_POST['review']);
    $added_on = date('Y-m-d h:i:s');
    mysqli_query($con, "INSERT INTO product_review(product_id, user_id, rating, review, status, added_on) 
                        VALUES('$product_id', '" . $_SESSION['USER_ID'] . "', '$rating', '$review', '1', '$added_on')");
    header('location:product.php?id=' . $product_id);
    exit();
}
$get_product_query = mysqli_query($con, "
    SELECT product.*, categories.categories
    FROM product 
    LEFT JOIN categories ON product.categories_id = categories.id 
    WHERE product.id='$product_id'
");

if (mysqli_num_rows($get_product_query) > 0) {
    $get_product = mysqli_fetch_assoc($get_product_query);
    $product_category = isset($get_product['categories']) ? $get_product['categories'] : 'N/A';
}

$product_review_res = mysqli_query($con, "SELECT users.name, product_review.id, product_review.rating, product_review.review, product_review.added_on 
                                           FROM users, product_review 
                                           WHERE product_review.status = 1 
                                           AND product_review.user_id = users.id 
                                           AND product_review.product_id = '$product_id' 
                                           ORDER BY product_review.added_on DESC");
?>

<div class="content pb-0">
    <div class="product">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Product Details </h4>
                    </div>
                    <div class="card-body card-block">
                        <div class="product-details-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 col-12 ">
                                        <div class="zoomWrapper">
                                            <div id="img-1" class="zoomWrapper single-zoom">
                                                <a href="#">
                                                    <img id="zoom1" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['image']; ?>"
                                                        data-zoom-image="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['image']; ?>"
                                                        alt="Product Image">
                                                </a>
                                            </div>
                                            <br>
                                            <?php if (!empty($multipleImages)) { ?>
                                                <div class="single-zoom-thumb">
                                                    <ul class="nav" id="gallery_01">
                                                        <?php foreach ($multipleImages as $image) { ?>
                                                            <li>
                                                                <a href="#" class="elevatezoom-gallery"
                                                                    data-image="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $image; ?>"
                                                                    data-zoom-image="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $image; ?>">
                                                                    <img width="70" height="70"
                                                                        src="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $image; ?>"
                                                                        alt="Thumbnail">
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                                        <div class="product-content mt-5">
                                            <h2 class="product-name mt-5">
                                                <?php echo htmlspecialchars($get_product['name']); ?>
                                            </h2>
                                            <br>

                                            <!-- <div class="price-boxes">
                                                <span class="new-price">PKR <?php echo htmlspecialchars($product_price); ?></span>
                                            </div>
                                            <div class="color-boxes">
                                                <span class="new-color"><?php echo htmlspecialchars($color); ?></span>
                                            </div> -->
                                            <div class="price-boxes">
                                                <span class="new-price">PKR <?php echo htmlspecialchars($product_price); ?></span>
                                            </div>
                                           

                                            <div class="product-desc">
                                                <h1>Product Details:</h1>
                                                <p><span>Product Name:</span> <?php echo htmlspecialchars($get_product['name']); ?></p>
                                            </div>
                                            <p><span>Category:</span> <?php echo isset($get_product['categories']) ? htmlspecialchars($get_product['categories']) : 'N/A'; ?></p>
                                            <div class="color-boxes">
                                                <span class="new-color">
                                                    <?php
                                                    if (!empty($colorArr1)) {
                                                        echo "Available Colors: ";
                                                        foreach ($colorArr1 as $color) {
                                                            echo htmlspecialchars($color) . " ";
                                                        }
                                                    } else {
                                                        echo "No colors available";
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="size-boxes">
                                                <span class="new-size">
                                                    <?php
                                                    if (!empty($sizeArr1)) {
                                                        echo "Available size: ";
                                                        foreach ($sizeArr1 as $size) {
                                                            echo htmlspecialchars($size) . " ";
                                                        }
                                                    } else {
                                                        // echo "No colors available";
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('footer.inc.php'); ?>