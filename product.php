<?php
ob_start();
$title = 'Product-Details | Kapray Vaghera';
include 'includes/header2.php';
if (isset($_GET['id'])) {

    $product_id = mysqli_real_escape_string($con, $_GET['id']);

    if ($product_id > 0) {
        $get_product = get_product($con, '', '', $product_id);

        if (!$get_product) {
            echo "<script>alert('Product not found');</script>";
?>
            <script>
                window.location.href = 'index.php';
            </script>
    <?php
            exit();
        }
    }

    $resMultipleImages = mysqli_query($con, "select product_images from product_images where product_id='$product_id'");
    $multipleImages = [];
    if (mysqli_num_rows($resMultipleImages) > 0) {
        while ($rowMultipleImages = mysqli_fetch_assoc($resMultipleImages)) {
            $multipleImages[] = $rowMultipleImages['product_images'];
        }
    }

    $resAttr = mysqli_query($con, "select product_attributes.*,color_master.color,size_master.size from product_attributes 
			left join color_master on product_attributes.color_id=color_master.id and color_master.status=1 
			left join size_master on product_attributes.size_id=size_master.id and size_master.status=1
			where product_attributes.product_id='$product_id'");
    $productAttr = [];
    $colorArr = [];
    $sizeArr = [];
    if (mysqli_num_rows($resAttr) > 0) {
        while ($rowAttr = mysqli_fetch_assoc($resAttr)) {
            $productAttr[] = $rowAttr;
            $colorArr[$rowAttr['color_id']][] = $rowAttr['color'];
            $sizeArr[$rowAttr['size_id']][] = $rowAttr['size'];

            $colorArr1[] = $rowAttr['color'];
            $sizeArr1[] = $rowAttr['size'];
        }
    }
    $is_size = count(array_filter($sizeArr1));
    $is_color = count(array_filter($colorArr1));
    //$colorArr=array_unique($colorArr);
    //$sizeArr=array_unique($sizeArr1);
} else {
    ?>
    <script>
        window.location.href = 'index.php';
    </script>
<?php
}

if (isset($_POST['review_submit'])) {
    $rating = get_safe_value($con, $_POST['rating']);
    $review = get_safe_value($con, $_POST['review']);

    $added_on = date('Y-m-d h:i:s');
    mysqli_query($con, "insert into product_review(product_id,user_id,rating,review,status,added_on) values('$product_id','" . $_SESSION['USER_ID'] . "','$rating','$review','1','$added_on')");
    header('location:product.php?id=' . $product_id);
    die();
}


$product_review_res = mysqli_query($con, "select users.name,product_review.id,product_review.rating,product_review.review,product_review.added_on from users,product_review where product_review.status=1 and product_review.user_id=users.id and product_review.product_id='$product_id' order by product_review.added_on desc");

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details | Kapray Vaghera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-image {
            max-width: 100%;
            height: auto;
        }
        .thumbnail-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
        }
        .product-info h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
    </style>
</head> -->
<style>
    .product-image {
        max-width: 100%;
        height: auto;
    }

    .thumbnail-img {
        width: 70px;
        height: 70px;
        object-fit: cover;
    }

    .product-info h2 {
        font-size: 1.8rem;
        margin-bottom: 10px;
    }

    hr {
        margin: 20px 0;
        border: 0;
        border-top: 1px solid #000;
    }
</style>

<body>
    <?php include 'includes/navbar2.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex">
                <!-- Left Side Thumbnails -->
                <?php if (isset($multipleImages[0])) { ?>
                    <div class="d-flex flex-column mt-2 me-3 flex-grow-0 flex-shrink-0">
                        <?php foreach ($multipleImages as $list) { ?>
                            <a href="#" class="elevatezoom-gallery mb-2"
                                data-image="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $list; ?>"
                                data-zoom-image="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $list; ?>">
                                <img width="80" height="80"
                                    src="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $list; ?>"
                                    class="thumbnail-img rounded" alt="Thumbnail">
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>

                <!-- Main Image -->
                <div class="zoomWrapper mt-1 flex-grow-1">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['0']['image'] ?>"
                                data-zoom-image="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['0']['image'] ?>"
                                class="product-image img-fluid rounded" alt="Product Image">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 product-info mt-5">
                <h2><?php echo $get_product[0]['name']; ?></h2>
                <p> PKR <?php echo $get_product[0]['price']; ?></p>
                <hr>
                <p><?php echo $get_product[0]['short_desc']; ?></p>

                <p><?php
                    $getProductAttr = getProductAttr($con, $get_product['0']['id']);

                    $productSoldQtyByProductId = productSoldQtyByProductId($con, $get_product['0']['id'], $getProductAttr);

                    $pending_qty = $get_product['0']['qty'] - $productSoldQtyByProductId;

                    echo ($pending_qty > 0) ? 'In Stock' : 'Out of Stock'; ?></p>

                <!-- <?php //if ($is_color > 0) { 
                        ?>
                    <label for="color">Color:</label>
                    <select class="form-select mb-3" id="color">
                        <?php //foreach ($colorArr as $key => $val) { 
                        ?>
                            <option value="<?php echo $key; ?>"><?php echo $val[0]; ?></option>
                        
                    </select>
                <?php //} 
                ?> -->

                <?php if ($is_color > 1) { // Check if multiple colors exist 
                ?>
                    <!-- <label for="color">Color:</label> -->
                    <select class="form-select mb-3" id="color">
                        <?php foreach ($colorArr as $key => $val) { ?>
                            <option value="<?php echo $key; ?>"><?php echo $val[0]; ?></option>
                        <?php } ?>
                    </select>
                <?php } elseif ($is_color == 1) { // If only one color exists 
                ?>
                    <p>
                        <!-- <strong>Color:</strong>  -->
                        <?php echo reset($colorArr)[0]; ?>
                    </p>
                <?php } ?>


                <div class="d-flex align-items-center gap-3">
                    <?php if ($is_size > 0) { ?>
                        <div>
                            <!-- <label for="size">Size:</label> -->
                            <select class="form-select" id="size">
                                <?php foreach ($sizeArr as $key => $val) { ?>
                                    <option value="<?php echo $key; ?>"><?php echo $val[0]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    <?php } ?>

                    <div>
                        <!-- <label for="qty">Quantity:</label> -->
                        <select id="qty" class="form-select">
                            <?php for ($i = 1; $i <= $pending_qty; $i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <button class="btn btn-primary" onclick="manage_cart('<?php echo $get_product[0]['id']; ?>', 'add')">Add to Cart</button>
                <br>
                <!-- <p class="mt-5"> <?php echo $get_product[0]['description']; ?></p> -->

                <!-- Tabs -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Start List And Grid View -->
                        <ul class="pro__details__tab" role="tablist">
                            <li role="presentation" class="description active"><a href="#description" role="tab"
                                    data-bs-toggle="tab" aria-selected="true">Description</a></li>
                            <li role="presentation" class="care"><a href="#care" role="tab" data-bs-toggle="tab"
                                    aria-selected="true">Care</a></li>
                            <li role="presentation" class="size"><a href="#size" role="tab" data-bs-toggle="tab"
                                    aria-selected="true"></a></li>
                            <!-- <li role="presentation" class="size"><a href="#size" role="tab" data-bs-toggle="tab"
                                    aria-selected="true">Size Chart</a></li> -->
                        </ul>

                        <!-- End List And Grid View -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ht__pro__details__content">
                            <!-- Start Single Content -->
                            <div role="tabpanel mt-5" id="description" class="pro__single__content tab-pane ">
                                <div class="pro__tab__content__inner">
                                    <?php echo $get_product['0']['description'] ?>
                                </div>
                                <h4>Size Chart</h4>
                                <div class="table-responsive mt-5">
                                    <table class="table table-bordered table-striped text-center">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>Size</th>
                                                <th>Bust </th>
                                                <th>Waist </th>
                                                <th>Hips </th>
                                                <th>Length </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>S</td>
                                                <td>21</td>
                                                <td>20</td>
                                                <td>23</td>
                                                <td>43</td>
                                            </tr>
                                            <tr>
                                                <td>M</td>
                                                <td>23</td>
                                                <td>21</td>
                                                <td>25</td>
                                                <td>43</td>
                                            </tr>
                                            <tr>
                                                <td>L</td>
                                                <td>25</td>
                                                <td>24</td>
                                                <td>27</td>
                                                <td>43</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End Single Content -->
                            <div role="tabpanel mt-5" id="care" class="pro__single__content tab-pane ">
                                <div class="pro__tab__content__inner">
                                    To preserve the intricate embroidery and fabric quality, we recommend gentle hand washing or dry cleaning. Avoid harsh detergents and excessive wringing. Store in a cool, dry place and iron on low heat, preferably inside out, to maintain its beauty for years.
                                </div>
                            </div>

                            <div role="tabpanel mt-5" id="size" class="pro__single__content tab-pane ">
                                <div class="pro__tab__content__inner">
                                    <img src="img/sizechart.jpeg" alt="Size Chart">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-center">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Size</th>
                                                    <th>Bust </th>
                                                    <th>Waist </th>
                                                    <th>Hips </th>
                                                    <th>Length </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>S</td>
                                                    <td>21</td>
                                                    <td>20</td>
                                                    <td>23</td>
                                                    <td>43</td>
                                                </tr>
                                                <tr>
                                                    <td>M</td>
                                                    <td>23</td>
                                                    <td>21</td>
                                                    <td>25</td>
                                                    <td>43</td>
                                                </tr>
                                                <tr>
                                                    <td>L</td>
                                                    <td>25</td>
                                                    <td>24</td>
                                                    <td>27</td>
                                                    <td>43</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- FOOTER START -->
        <?php include 'includes/footer.php'; ?>
        <!-- FOOTER END -->

        <!-- JS -->
        <?php include 'includes/jsfiles.php'; ?>
        <!-- Include jQuery and ElevateZoom JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.rawgit.com/elevateweb/elevatezoom/master/jquery.elevatezoom.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                // Initialize ElevateZoom on the main image
                $("#zoom1").elevateZoom({
                    zoomType: "inner", // Inner zoom effect
                    cursor: "crosshair", // Crosshair cursor
                    gallery: "gallery_01", // Thumbnail gallery ID
                    galleryActiveClass: "active", // Active thumbnail class
                    responsive: true // Make responsive
                });

                // Change the zoom image when a thumbnail is clicked
                $(".elevatezoom-gallery").on("click", function(e) {
                    e.preventDefault(); // Prevent default anchor behavior
                    var newImage = $(this).data("image");
                    var newZoomImage = $(this).data("zoom-image");

                    // Update the main image source
                    $("#zoom1").attr("src", newImage);
                    $("#zoom1").data("zoom-image", newZoomImage);

                    // Reinitialize ElevateZoom with the new image
                    $('.zoomContainer').remove(); // Remove the old zoom container
                    $("#zoom1").elevateZoom({
                        zoomType: "inner",
                        cursor: "crosshair",
                        gallery: "gallery_01",
                        galleryActiveClass: "active",
                        responsive: true
                    });
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                const descriptionTab = document.querySelector('.description');
                const careTab = document.querySelector('.care');
                const sizeTab = document.querySelector('.size');
                const descriptionContent = document.getElementById('description');
                const careContent = document.getElementById('care');
                const sizeContent = document.getElementById('size');

                // Function to show description tab and hide review tab
                function showDescription() {
                    descriptionTab.classList.add('active');
                    careTab.classList.remove('active');
                    sizeTab.classList.remove('active');
                    descriptionContent.classList.add('active');
                    careContent.classList.remove('active');
                    sizeContent.classList.remove('active');
                }

                // Function to show review tab and hide description tab
                function showCare() {
                    careTab.classList.add('active');
                    descriptionTab.classList.remove('active');
                    sizeTab.classList.remove('active');
                    careContent.classList.add('active');
                    descriptionContent.classList.remove('active');
                    sizeContent.classList.remove('active');
                }

                function showSize() {
                    sizeTab.classList.add('active');
                    descriptionTab.classList.remove('active');
                    careTab.classList.remove('active');
                    sizeContent.classList.add('active');
                    descriptionContent.classList.remove('active');
                    careContent.classList.remove('active');
                }

                // Show description by default or based on URL hash
                if (window.location.hash === '#care') {
                    showCare();
                } else if (window.location.hash === '#size') {
                    showSize();
                } else {
                    showDescription();
                }

                // Add event listener to description tab
                descriptionTab.addEventListener('click', function(event) {
                    event.preventDefault();
                    showDescription();
                });

                // Add event listener to review tab
                careTab.addEventListener('click', function(event) {
                    event.preventDefault();
                    showCare();
                });

                sizeTab.addEventListener('click', function(event) {
                    event.preventDefault();
                    showSize();
                });
            });
        </script>
        <?php include 'includes/footer.php'; ?>
        <!-- FOOTER END -->

        <!-- JS -->
        <?php include 'includes/jsfiles.php';
        ob_flush();
        ?>
</body>

</html>