<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Banner</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link rel="stylesheet" href="banner.css"> -->
</head>
<body>

<div class="banner">
    <h1>Welcome to Our Website</h1>
    <p>Your success starts here</p>
</div>

<!-- Include Font Awesome CDN in your <head> section for icons -->
<br>
<br>
<br>


<section id="products">
    <h2>Our Products</h2>
    <br>
    <div class="product-list">
        <div class="product-item">
            <i class="fas fa-jean"></i> <!-- Icon for Jeans -->
            <h3>Jeans</h3>
            <p>All Kind Of Jeans Are Available Here</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-item">
            <i class="fas fa-tshirt"></i> <!-- Icon for Shirts -->
            <h3>Shirts</h3>
            <p>All Kind Of Shirts Are Available Here</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-item">
            <i class="fas fa-gem"></i> <!-- Icon for Jewelry -->
            <h3>Jewelry</h3>
            <p>All Kind Of Jewelry Are Available Here</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-item">
            <i class="fas fa-shoe-prints"></i> <!-- Icon for Shoes -->
            <h3>Shoes</h3>
            <p>All Kind Of Shoes Are Available Here</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-item">
            <i class="fas fa-handbag"></i> <!-- Icon for Bags -->
            <h3>Bags</h3>
            <p>All Kind Of Bags Are Available Here</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-item">
            <i class="fas fa-cogs"></i> <!-- Icon for Accessories -->
            <h3>Accessories</h3>
            <p>All Kind Of Accessories Are Available Here</p>
            <button>Add to Cart</button>
        </div>
    </div>
</section>


<!-- featured-products start -->


<div class="container mt-5">
    <h1 class="featured-heading">Featured Products</h1>
    <h5 class="text-center mb-4">Best Selling</h5>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/jeans4.jpg" class="card-img-top" alt="Product 1"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Product Title 1</h5>
                    <p class="card-text">$29.99</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/jeans3.jpg" class="card-img-top" alt="Product 2"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Product Title 2</h5>
                    <p class="card-text">$49.99</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/jeans5.jpg" class="card-img-top" alt="Product 3"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Product Title 3</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <!-- <h1 class="featured-heading">Featured Products</h1> -->
    <h5 class="text-center mb-4">New Arrival</h5>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/new1.jpg" class="card-img-top" alt="Product 1"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Product Title 1</h5>
                    <p class="card-text">$29.99</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/new2.jpg" class="card-img-top" alt="Product 2"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Product Title 2</h5>
                    <p class="card-text">$49.99</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/new1.jpg" class="card-img-top" alt="Product 3"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Product Title 3</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <!-- <h1 class="featured-heading">Featured Products</h1> -->
    <!-- <h5 class="text-center mb-4">Best Selling</h5> -->
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/new4.jpg" class="card-img-top" alt="Product 1"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Product Title 1</h5>
                    <p class="card-text">$29.99</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/jeans3.jpg" class="card-img-top" alt="Product 2"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Product Title 2</h5>
                    <p class="card-text">$49.99</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/new4.jpg" class="card-img-top" alt="Product 3"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Product Title 3</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- discount offer -->

<div class="container mt-5">
    <h1 class="special-offer-heading">Special Offers</h1>
    <h5 class="text-center mb-4">Discount</h5>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/dis2.jpg" class="card-img-top" alt="Special Offer 1"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Special Offer Title 1</h5>
                    <p class="card-text">Now: $19.99 <del>$29.99</del></p>
                    <a href="#" class="btn btn-success">Grab Offer</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/dis1.jpg" class="card-img-top" alt="Special Offer 2"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Special Offer Title 2</h5>
                    <p class="card-text">Now: $24.99 <del>$39.99</del></p>
                    <a href="#" class="btn btn-success">Grab Offer</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="images/dis3.jpg" class="card-img-top" alt="Special Offer 3"> <!-- Replace with your image path -->
                <div class="card-body">
                    <h5 class="card-title">Special Offer Title 3</h5>
                    <p class="card-text">Now: $15.99 <del>$25.99</del></p>
                    <a href="#" class="btn btn-success">Grab Offer</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include ('footer.php');
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
