(function () {
    var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
    
    // Check if ShopifyBuy UI is already loaded, if not, load it
    if (window.ShopifyBuy) {
        if (window.ShopifyBuy.UI) {
            setTimeout(ShopifyBuyInit, 0); // Add a 0ms timeout
        } else {
            loadScript();
        }
    } else {
        loadScript();
    }

    function loadScript() {
        var script = document.createElement('script');
        script.async = true;
        script.src = scriptURL;
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
        script.onload = function() {
            setTimeout(ShopifyBuyInit, 0); // Add a 0ms timeout
        };
    }

    function ShopifyBuyInit() {
        var client = ShopifyBuy.buildClient({
            domain: 'yvtutp-by.myshopify.com',
            storefrontAccessToken: '5286f14e4d057f8eb665f97f5f67a88e',
        });
    
        ShopifyBuy.UI.onReady(client).then(function (ui) {
            // Example products data - Add all your product IDs and variant IDs here
            var products = [
                { id: '9986529820983', variantId: '50059529748791', elementId: 'product-component-1' },
                { id: '9986529820983', variantId: '50059529781559', elementId: 'product-component-2' },
                { id: '9986529820983', variantId: '50059529814327', elementId: 'product-component-3' },
                { id: '9986592538935', variantId: '50059873354039', elementId: 'product-component-4' },
                { id: '9986592538935', variantId: '50059873386807', elementId: 'product-component-5' },
                { id: '9986592538935', variantId: '50059873419575', elementId: 'product-component-6' },
                { id: '9983790580023', variantId: '', elementId: 'product-component-7' },
                { id: '9983814566199', variantId: '', elementId: 'product-component-8' },
                { id: '9983684542775', variantId: '', elementId: 'product-component-9' },
                { id: '9998308311351', variantId: '', elementId: 'product-component-10' },
                { id: '9998318993719', variantId: '', elementId: 'product-component-11' },
                { id: '9998327611703', variantId: '', elementId: 'product-component-12' },
                { id: '9990106251575', variantId: '50071259349303', elementId: 'product-component-13' },
                { id: '9990106251575', variantId: '50071259382071', elementId: 'product-component-14' },
                { id: '9990106251575', variantId: '50071259414839', elementId: 'product-component-15' },
                { id: '9990106251575', variantId: '50071259447607', elementId: 'product-component-16' },
                { id: '9982555685175', variantId: '50049543045431', elementId: 'product-component-17' },
                { id: '9982555685175', variantId: '50049543078199', elementId: 'product-component-18' },
                { id: '9982555685175', variantId: '50049543110967', elementId: 'product-component-19' },
                { id: '10003252445495', variantId: '50116238770487', elementId: 'product-component-20' },
                { id: '10003252445495', variantId: '50116238803255', elementId: 'product-component-21' },
                { id: '10003252445495', variantId: '50116238836023', elementId: 'product-component-22' },
                { id: '9990104023351', variantId: '50071253975351', elementId: 'product-component-23' },
                { id: '9990104023351', variantId: '50071254008119', elementId: 'product-component-24' },
                { id: '9983810142519', variantId: '', elementId: 'product-component-25' },
                { id: '9990111985975', variantId: '', elementId: 'product-component-26' },
                { id: '10005201682743', variantId: '', elementId: 'product-component-27' },
    
            ];
    
            // Loop through all products and create them
            products.forEach(function(product) {
                createProduct(ui, product.id, product.variantId, product.elementId);
            });
        });
    }

    function createProduct(ui, productId, variantId, elementId) {
        ui.createComponent('product', {
            id: productId,
            variantId: variantId,
            node: document.getElementById(elementId),
            moneyFormat: 'R%20%7B%7Bamount%7D%7D',
            options: {
                "product": {
                    "styles": {
                        "product": {
                            "@media (min-width: 601px)": {
                                "max-width": "calc(25% - 20px)",
                                "margin-left": "20px",
                                "margin-bottom": "50px"
                            },
                            "background-color": "#1A1A1D",  // Dark background for product card
                            "color": "#fff",  // White text for the product
                            "padding": "20px",
                            "border-radius": "10px",
                            "box-shadow": "0 4px 10px rgba(0, 0, 0, 0.1)"
                        },
                        "button": {
                            ":hover": {
                                "background-color": "#e6c200"
                            },
                            "background-color": "#ffd700", // Gold button color
                            ":focus": {
                                "background-color": "#e6c200"
                            }
                        }
                    },
                    "contents": {
                        "options": false
                    },
                    "text": {
                        "button": "Add to cart"
                    }
                },
                "productSet": {
                    "styles": {
                        "products": {
                            "@media (min-width: 601px)": {
                                "margin-left": "-20px"
                            }
                        }
                    }
                },
                "modalProduct": {
                    "styles": {
                        "product": {
                            "@media (min-width: 601px)": {
                                "max-width": "100%",
                                "margin-left": "0px",
                                "margin-bottom": "0px"
                            }
                        },
                        "button": {
                            ":hover": {
                                "background-color": "#e6c200"
                            },
                            "background-color": "#ffd700",  // Custom button color for modal
                            ":focus": {
                                "background-color": "#e6c200"
                            }
                        }
                    },
                    "text": {
                        "button": "Add to cart"
                    }
                },
                "cart": {
                    "styles": {
                        "button": {
                            ":hover": {
                                "background-color": "#e6c200"
                            },
                            "background-color": "#ffd700", // Custom cart button color
                            ":focus": {
                                "background-color": "#e6c200"
                            }
                        }
                    },
                    "text": {
                        "total": "Subtotal",
                        "button": "Checkout"
                    },
                    "popup": false
                },
                "toggle": {
                    "styles": {
                        "toggle": {
                            "background-color": "#ffd700",  // Custom toggle button
                            ":hover": {
                                "background-color": "#e6c200"
                            },
                            ":focus": {
                                "background-color": "#e6c200"
                            }
                        }
                    }
                }
            }
        });
    }
})();
function switchTab(event, tabId) {
    // Get all elements with the class "elavelle-tab-content" and hide them
    const tabContents = document.querySelectorAll('.elavelle-tab-content');
    tabContents.forEach(function(content) {
        content.style.display = 'none'; // Hide all tab contents
    });
  
    // Get all tab buttons and remove the active class from them
    const tabButtons = document.querySelectorAll('.elavelle-tab-btn');
    tabButtons.forEach(function(button) {
        button.classList.remove('active'); // Remove active state from all tab buttons
    });
  
    // Get the current tab element
    const currentTab = document.getElementById(tabId);
  
    if (currentTab) {
        // Show the current tab's content
        currentTab.style.display = 'block';
    }
  
    // Add the active class to the clicked tab button
    event.currentTarget.classList.add('active');
  
    // Trigger the window resize event after tab switching
    triggerResize();
  }
  
  // Add event listeners for each tab button
  document.querySelectorAll('.elavelle-tab-btn').forEach(function(button) {
    button.addEventListener('click', function(event) {
        const tabId = button.getAttribute('data-tab'); // Get the associated tab ID
        switchTab(event, tabId);
    });
  });
  
  // Function to simulate a window resize
  function triggerResize() {
    // Trigger a window resize event
    window.dispatchEvent(new Event('resize'));
  }
  
  // Listen for the resize event
  window.addEventListener('resize', function() {
    // You can add logic here to handle adjustments on resize
  });
  
  
