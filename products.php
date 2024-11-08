<?php
include('includes/nav.php');
include('includes/products.php');
?>

<!--====== Page Title Start ======-->
<section class="page-title-area page-title-bg" style="background-image: url(assets/img/section-bg/titlebg01.jpg);">
    <div class="container">
        <h1 class="page-title">Products</h1>
        <ul class="breadcrumb-nav">
            <li><a href="index.php">Home</a></li>
            <li><i class="fas fa-angle-right"></i></li>
            <li>Products</li>
        </ul>
    </div>
</section>
<!--====== Page Title End ======-->

<!--====== Product Tab Section Start ======-->
<section class="product-tab-section bg-color-grey section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="tab-content" id="productTabContent">
                    <div class="tab-pane fade show active" id="cat-dental" role="tabpanel">
                        <div class="row justify-content-center product-boxes">
                            <?php foreach ($products as $category => $items) : ?>
                                <div class="category-section">
                                    <!-- Category Name Heading -->
                                    <h3 class="my-3"><?php echo htmlspecialchars($category); ?></h3>

                                    <div class="row justify-content-center product-boxes">
                                        <?php foreach ($items as $product) : ?>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="product-box mt-30">
                                                    <div class="thumbnail">
                                                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">
                                                            <!-- Pass both category and product ID as URL parameters -->
                                                            <a href="product-details.php?category=<?php echo urlencode($category); ?>&id=<?php echo $product['id']; ?>">
                                                                <?php echo $product['title']; ?>
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div class="hover-action">
                                                        <!-- <ul class="action-btns">
                                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                            <li><a href="#"><i class="far fa-expand"></i></a></li>
                                                            <li><a href="#"><i class="far fa-repeat-alt"></i></a></li>
                                                        </ul> -->
                                                        <a href="product-details.php?category=<?php echo urlencode($category); ?>&id=<?php echo $product['id']; ?>" class="add-to-cart">
                                                            View Details <i class="far fa-plus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--====== Product Tab Section End ======-->

<?php
include('includes/footer.php');
?>