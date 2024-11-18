<?php
include("includes/header.php");
include("includes/navbar.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="container mt-5">
        <div class="row">
            <!-- Main Content Area -->
            <div class="col-md-9">
                <h1 class="text-center my-4">Our Products</h1>
                <div class="row">
                    <!-- Product Card Template -->
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-header text-end">
                                <!-- Stock Status -->
                                <span class="badge bg-success">In Stock</span>
                            </div>
                            <img src="https://via.placeholder.com/250" class="card-img-top mx-auto d-block mt-3" style="width: 80%; height: auto;" alt="Product Name">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text text-muted">This is a short description of the product.</p>
                                <p class="card-text"><strong>Price:</strong> $99.99</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                    <a href="#" class="btn btn-secondary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat Product Card for More Products -->
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-header text-end">
                                <!-- Stock Status -->
                                <span class="badge bg-success">In Stock</span>
                            </div>
                            <img src="https://via.placeholder.com/250" class="card-img-top mx-auto d-block mt-3" style="width: 80%; height: auto;" alt="Product Name">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text text-muted">This is a short description of the product.</p>
                                <p class="card-text"><strong>Price:</strong> $99.99</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                    <a href="#" class="btn btn-secondary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-header text-end">
                                <!-- Stock Status -->
                                <span class="badge bg-success">In Stock</span>
                            </div>
                            <img src="https://via.placeholder.com/250" class="card-img-top mx-auto d-block mt-3" style="width: 80%; height: auto;" alt="Product Name">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text text-muted">This is a short description of the product.</p>
                                <p class="card-text"><strong>Price:</strong> $99.99</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                    <a href="#" class="btn btn-secondary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-header text-end">
                                <!-- Stock Status -->
                                <span class="badge bg-success">In Stock</span>
                            </div>
                            <img src="https://via.placeholder.com/250" class="card-img-top mx-auto d-block mt-3" style="width: 80%; height: auto;" alt="Product Name">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text text-muted">This is a short description of the product.</p>
                                <p class="card-text"><strong>Price:</strong> $99.99</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                    <a href="#" class="btn btn-secondary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-header text-end">
                                <!-- Stock Status -->
                                <span class="badge bg-success">In Stock</span>
                            </div>
                            <img src="https://via.placeholder.com/250" class="card-img-top mx-auto d-block mt-3" style="width: 80%; height: auto;" alt="Product Name">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text text-muted">This is a short description of the product.</p>
                                <p class="card-text"><strong>Price:</strong> $99.99</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                    <a href="#" class="btn btn-secondary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-header text-end">
                                <!-- Stock Status -->
                                <span class="badge bg-success">In Stock</span>
                            </div>
                            <img src="https://via.placeholder.com/250" class="card-img-top mx-auto d-block mt-3" style="width: 80%; height: auto;" alt="Product Name">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text text-muted">This is a short description of the product.</p>
                                <p class="card-text"><strong>Price:</strong> $99.99</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                    <a href="#" class="btn btn-secondary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-header text-end">
                                <!-- Stock Status -->
                                <span class="badge bg-success">In Stock</span>
                            </div>
                            <img src="https://via.placeholder.com/250" class="card-img-top mx-auto d-block mt-3" style="width: 80%; height: auto;" alt="Product Name">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text text-muted">This is a short description of the product.</p>
                                <p class="card-text"><strong>Price:</strong> $99.99</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                    <a href="#" class="btn btn-secondary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-header text-end">
                                <!-- Stock Status -->
                                <span class="badge bg-success">In Stock</span>
                            </div>
                            <img src="https://via.placeholder.com/250" class="card-img-top mx-auto d-block mt-3" style="width: 80%; height: auto;" alt="Product Name">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text text-muted">This is a short description of the product.</p>
                                <p class="card-text"><strong>Price:</strong> $99.99</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                    <a href="#" class="btn btn-secondary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Area -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Categories</h5>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Electronics</a>
                        <a href="#" class="list-group-item list-group-item-action">Fashion</a>
                        <a href="#" class="list-group-item list-group-item-action">Home Appliances</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include("includes/footer.php");
?>