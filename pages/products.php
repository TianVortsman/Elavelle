<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>
    <link rel="stylesheet" href="../css/products.css">
    <link rel="stylesheet" href="../css/shopify.css">
</head>
<body>
    <header class="elavelle-header">
        <div class="elavelle-header-container">
            <img src="../img/logo-pure.png" alt="Logo" class="elavelle-logo">
            <nav class="elavelle-nav">
                <a href="../index.php" class="elavelle-nav-link">Home</a>
                <a href="https://yvtutp-by.myshopify.com" class="elavelle-nav-link" target="_blank">Shop</a>
                <a href="contact.php" class="elavelle-nav-link">Contact</a>
            </nav>
        </div>
    </header>

    <section class="elavelle-products">
    <div class="elavelle-tabs">
            <button onclick="switchTab(event, 'tab1')" class="elavelle-tab-btn active" data-tab="tab1">Natural Hygiene</button>
            <button onclick="switchTab(event, 'tab2')" class="elavelle-tab-btn" data-tab="tab2">Leather Products</button>
            <button onclick="switchTab(event, 'tab3')" class="elavelle-tab-btn" data-tab="tab3">Hides and Skins</button>
            <button onclick="switchTab(event, 'tab4')" class="elavelle-tab-btn" data-tab="tab3">Handcrafted Products</button>
        </div>
    <div class="elavelle-container">

        <!-- Tab navigation -->

        
        <!-- Tab Content -->
        <div class="elavelle-tab-content active" id="tab1">
            <div class="elavelle-product-grid-container">
                <div class="elavelle-product-grid">
                    <!-- Product Card 1 -->
                    <div class="elavelle-product-card">
                        <div id="product-component-1"></div>
                        <!-- Shopify Buy Button Component -->
                    </div>
                    <!-- Product Card 2 -->
                    <div class="elavelle-product-card">
                        <div id='product-component-2'></div>
                    </div>
                    <!-- Product Card 3 -->
                    <div class="elavelle-product-card">
                    <div id='product-component-3'></div>
                    </div>
                    <!-- Product Card 4 -->
                    <div class="elavelle-product-card">
                    <div id='product-component-4'></div>
                    </div>
                    <!-- Product Card 5 -->
                    <div class="elavelle-product-card">
                    <div id='product-component-5'></div>
                    </div>
                    <!-- Product Card 6 -->
                    <div class="elavelle-product-card">
                    <div id='product-component-6'></div>
                    </div>
                    <!-- Product Card 7 -->
                    <div class="elavelle-product-card">
                    </div>
                    <!-- Product Card 8 -->
                    <div class="elavelle-product-card">
                    </div>
                    <!-- Product Card 9 -->
                    <div class="elavelle-product-card">
                    </div>
                    <!-- Product Card 10 -->
                </div>
            </div>
        </div>
        
        <div class="elavelle-tab-content active" id="tab2" style="display: none;">
            <div class="elavelle-product-grid-container">
                <div class="elavelle-product-grid">
                    <!-- Product Card 2 -->
                    <div class="elavelle-product-card">
                    <div id='product-component-7'></div>
                    </div>

                    <div class="elavelle-product-card">
                    <div id='product-component-8'></div>
                    </div>

                    <div class="elavelle-product-card">
                    <div id='product-component-9'></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="elavelle-tab-content active" id="tab3" style="display: none;">
            <div class="elavelle-product-grid-container">
                <div class="elavelle-product-grid">
                    <!-- Product Card 3 -->
                    <div class="elavelle-product-card">
                        <img src="product3.jpg" alt="Product 3" class="elavelle-product-image">
                        <h4 class="elavelle-product-name">Product 3</h4>
                        <p class="elavelle-product-description">Designed for comfort and style.</p>
                        <p class="elavelle-product-price">$89.99</p>
                        <a href="#" class="elavelle-btn">Buy Now</a>
                        <a href="#" class="elavelle-btn">Add to Cart</a>
                    </div>
                    <!-- Additional Product Cards go here -->
                </div>
            </div>
        </div>

        <div class="elavelle-tab-content active" id="tab4" style="display: none;">
            <div class="elavelle-product-grid-container">
                <div class="elavelle-product-grid">
                    <!-- Product Card 3 -->
                    <div class="elavelle-product-card">
                        <img src="product3.jpg" alt="Product 3" class="elavelle-product-image">
                        <h4 class="elavelle-product-name">Product 4</h4>
                        <p class="elavelle-product-description">Designed for comfort and style.</p>
                        <p class="elavelle-product-price">$89.99</p>
                        <a href="#" class="elavelle-btn">Buy Now</a>
                        <a href="#" class="elavelle-btn">Add to Cart</a>
                    </div>
                    <!-- Additional Product Cards go here -->
                </div>
            </div>
        </div>
        
    </div>
</section>
    <footer class="elavelle-footer">
        <div class="elavelle-footer-container">
            <p>&copy; 2024 Elavelle. All Rights Reserved.</p>
            <nav class="elavelle-footer-nav">
                <a href="#" class="elavelle-footer-link">Privacy Policy</a>
                <a href="#" class="elavelle-footer-link">Terms of Service</a>
                <a href="contact.php" class="elavelle-footer-link">Contact Us</a>
            </nav>
        </div>
    </footer>
    <script src="js/products.js"></script>
</body>
</html>
