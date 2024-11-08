<?php
include('includes/nav.php');
include('includes/products.php');

// Get the category and product ID from the URL
$category = $_GET['category'] ?? null;
$product_id = $_GET['id'] ?? null;
$product = null;

// Check if the category exists and then look for the product by ID
if ($category && isset($products[$category])) {
    foreach ($products[$category] as $item) {
        if ($item['id'] == $product_id) {
            $product = $item;
            break; // Product found, exit the loop
        }
    }
}
?>

<!-- Page Title Area -->
<?php if ($product): ?>
    <section class="page-title-area page-title-bg" style="background-image: url('assets/img/section-bg/titlebg01.jpg');">
        <div class="container">
            <h1 class="page-title text-center">Product Details</h1>
            <ul class="breadcrumb-nav text-center">
                <li><a href="products.php">Products</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li>Product Details</li>
            </ul>
        </div>
    </section>
    <!-- <section class="page-title-area">
        <div class="container">
            <h1 class="page-title">Product Details</h1>

            <ul class="breadcrumb-nav">
                <li><a href="products.php">Products</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li>Details</li>
            </ul>
        </div>
    </section> -->

    <!-- Product Details Section -->
    <section class="product-details py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="img-fluid product-image">
                </div>
                <div class="col-lg-6">
                    <div class="product-info">
                        <h1 class="product-title"><?php echo $product['title']; ?></h1>
                        <p class="product-description"><?php echo $product['desc']; ?></p>
                        <!-- <p class="product-price">Price: $<?php echo $product['price']; ?></p> -->
                        <!-- Additional product details as needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section class="product-not-found text-center py-5">
        <p>Product not found.</p>
    </section>
<?php endif; ?>

<?php include('includes/footer.php'); ?>