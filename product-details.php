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

if ($product):
?>
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
                </div>
                <div class="col-lg-6">
                    <h1><?php echo $product['title']; ?></h1>
                    <p><?php echo $product['desc']; ?></p>
                    <!-- <p>Price: <?php echo $product['price']; ?></p> -->
                    <!-- Additional product details as needed -->
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <p>Product not found.</p>
<?php endif; ?>

<?php include('includes/footer.php'); ?>