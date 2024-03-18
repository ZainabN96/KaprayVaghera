<div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 50px 30px;">
                    <p class="text-right"><!-- 15 Products --><?php 
                           $Query = "SELECT categories_id from product where categories_id = '$cat_id' ";
                            $cate_count = mysqli_query($con,$Query);
                            $row = mysqli_num_rows($cate_count);
                            echo  $row ;
                    ?> Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="<?php echo $image_path; ?>" alt="image"/>
                    </a>
                    <!-- <h5 class="font-weight-semi-bold m-0">Table Runners</h5> -->
                   
                    <div class="card-footer d-flex justify-content-between bg-light border">
                         <h5 class="font-weight-semi-bold" style="margin: 15px 4px"><?php echo $cateRecord['categories']; ?></h5>
                         <a class="btn btn-primary btn-lg" href="
                         categories.php?id=<?php echo $cat_id; ?>"
                         >Shop Now</a>
                    </div>
                </div>
            </div>