<!DOCTYPE html>
<html class="no-js" lang="">


<?php
ob_start();
$title = 'Size Chart | Kapray Vaghera';
include 'includes/header.php';
?>

<body class="s-prodct">
    <!-- header area start -->
    <?php include 'includes/navbar2.php' ?>
    <!-- header area end -->
    <!-- breadcrumbs area start -->
    <section>
        <div class="breadcrumbs" style="margin-top: 150px!important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-inner">
                            <ul>
                                <li class="home">
                                    <a href="index.php">Home</a>
                                    <span><i class="fa fa-angle-right"></i></span>
                                </li>
                                <li class="category3"><span>Size Chart</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs area end -->
        <div>
            <section class="container">
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
                            <!-- <tr>
                        <td>XS</td>
                        <td>30 - 32</td>
                        <td>24 - 26</td>
                        <td>33 - 35</td>
                        <td>25</td>
                    </tr> -->
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
                            <!-- <tr>
                        <td>XL</td>
                        <td>46 - 48</td>
                        <td>40 - 42</td>
                        <td>49 - 51</td>
                        <td>29</td>
                    </tr>
                    <tr>
                        <td>XXL</td>
                        <td>50 - 52</td>
                        <td>44 - 46</td>
                        <td>53 - 55</td>
                        <td>30</td>
                    </tr> -->
                        </tbody>
                    </table>

                </div>
            </section>
        </div>
    
        
    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php';
    ob_flush();
    ?>
</body>

</html>