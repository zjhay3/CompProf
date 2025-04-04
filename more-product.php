<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="more-product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
	<div class="loading-screen">
		<img src="images/pagereload.gif" alt="Loading..." class="loading-video" />
	</div>
    <div class="search-container">
        <input type="text" id="searchBox" placeholder="Search for products...">
        <div id="searchResults"></div>
    </div>
    

    <div class="container">
        <!-- Collapsible Sidebar - starts collapsed by default -->
        <div class="sidebar collapsed" id="sidebar">
            <div class="sidebar-header">
                <h3>Product Categories</h3>
                <button id="toggleSidebar"><i class="fas fa-bars"></i></button>
            </div>
            <div class="sidebar-content">
                <ul class="sidebar-menu">
                    <li><a href="#chairs"><i class="fas fa-chair"></i> <span>Chairs</span></a></li>
                    <li><a href="#tables"><i class="fas fa-table"></i> <span>Tables</span></a></li>
                    <li><a href="#conference-set"><i class="fas fa-users"></i> <span>Conference Set</span></a></li>
                    <li><a href="#sofa-sets"><i class="fas fa-couch"></i> <span>Sofa Sets</span></a></li>
                    <li><a href="#sofa-single"><i class="fas fa-couch"></i> <span>Sofa Single</span></a></li>
                    <li><a href="#showcase"><i class="fas fa-store"></i> <span>Showcase</span></a></li>
                    <li><a href="#display"><i class="fas fa-tv"></i> <span>Display</span></a></li>
                    <li><a href="#props-and-aids"><i class="fas fa-tools"></i> <span>Props and Aids</span></a></li>
                    <li><a href="#carpet"><i class="fas fa-rug"></i> <span>Carpet</span></a></li>
                    <li><a href="#appliances"><i class="fas fa-blender"></i> <span>Appliances</span></a></li>
                    <li><a href="#tv-and-audio-visual"><i class="fas fa-tv"></i> <span>TV and Audio Visual</span></a></li>
                    <li><a href="#outlet-and-adaptor"><i class="fas fa-plug"></i> <span>Outlet and Adaptor</span></a></li>
                    <li><a href="#breaker-single-phase"><i class="fas fa-bolt"></i> <span>Breaker Single Phase</span></a></li>
                    <li><a href="#breaker-three-phase"><i class="fas fa-bolt-lightning"></i> <span>Breaker Three Phase</span></a></li>
                    <li><a href="#transformer"><i class="fas fa-charging-station"></i> <span>Transformer</span></a></li>
                    <li><a href="#light-fittings"><i class="fas fa-lightbulb"></i> <span>Light Fittings</span></a></li>
                </ul>
            </div>
        </div>
    </div>
        
<div class="main-content" id="main-content">

    <!-- Chairs Section -->
        <section class="product-section" id="chairs">
            <div class="section-header">
                <h2>Chairs</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="monobloc-chair"> 
                        <div class="product-image">
                            <img src="images/items/AA-1.png" alt="Monobloc Chair">
                        </div>
                        <div class="product-info">
                            <h3>Monobloc Chair White & Gray</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱250.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="black-stacking-chair-leatherette-cushion">
                        <div class="product-image">
                            <img src="images/items/AB-2.png" alt="Black Stacking Chair">
                        </div>
                        <div class="product-info">
                            <h3>Black Stacking Chair Leatherette Cushion</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="white-plastic-chair">
                        <div class="product-image">
                            <img src="images/items/AC-3.png" alt="White Plastic Chair">
                        </div>
                        <div class="product-info">
                            <h3>White Plastic Chair</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="brown-folded-chair">
                        <div class="product-image">
                            <img src="images/items/AD-4.png" alt="Brown Folded chair with Stainless Footing">
                        </div>
                        <div class="product-info">
                            <h3>Brown Folded chair with Stainless Footing</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱550.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="white-special-chair-nordic">
                        <div class="product-image">
                            <img src="images/items/AE-5.png" alt="White Special Chair">
                        </div>
                        <div class="product-info">
                            <h3>White Special Chair (Nordic chair with Cushion)</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱1,200.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="black-special-chair-chopstick-cushion">
                        <div class="product-image">
                            <img src="images/items/AE-6.png" alt="Black Special Chair">
                        </div>
                        <div class="product-info">
                            <h3>Black Special Chair (Chopstick with Cushion)</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱1,250.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="white-special-chair-chopstick-cushion">
                        <div class="product-image">
                            <img src="images/items/AE-7.png" alt="White Special Chair">
                        </div>
                        <div class="product-info">
                            <h3>White Special Chair (Chopstick with Cusion)</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱1,250.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="black-special-chair-chopstick">
                        <div class="product-image">
                            <img src="images/items/AE-8.png" alt="Black Special Chair">
                        </div>
                        <div class="product-info">
                            <h3>Black Special Chair (Chopstick Chair)</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱850.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="white-special-chair-chopstick">
                        <div class="product-image">
                            <img src="images/items/AE-9.png" alt="White Special Chair">
                        </div>
                        <div class="product-info">
                            <h3>White Special Chair (Chopstick Chair)</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱850.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="black-barstool">
                        <div class="product-image">
                            <img src="images/items/AF-10.png" alt="Black Barstool Leatherette">
                        </div>
                        <div class="product-info">
                            <h3>Black Barstool Leatherette</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱600.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="black-hydraulic-chair">
                        <div class="product-image">
                            <img src="images/items/AG-11.png" alt="Black Hydraulic Chairs Low Backrest">
                        </div>
                        <div class="product-info">
                            <h3>Black Hydraulic Chairs Low Backrest</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱1,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="white-hydraulic-chair">
                        <div class="product-image">
                            <img src="images/items/AG-12.png" alt="White Hydraulic Chairs Low Backrest">
                        </div>
                        <div class="product-info">
                            <h3>White Hydraulic Chairs Low Backrest</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱1,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="maroon-hydraulic-chair">
                        <div class="product-image">
                            <img src="images/items/AG-13.png" alt="Maroon Hydraulic Chairs High Backrest">
                        </div>
                        <div class="product-info">
                            <h3>Maroon Hydraulic Chairs High Backrest</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱1,000.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="red-hydraulic-chair">
                        <div class="product-image">
                            <img src="images/items/AG-14.png" alt="Red Hydraulic Chairs High Backrest">
                        </div>
                        <div class="product-info">
                            <h3>Red Hydraulic Chairs High Backrest</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱1,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="orange-hydraulic-chair">
                        <div class="product-image">
                            <img src="images/items/AG-15.png" alt="Orange Hydraulic Chairs Smiley">
                        </div>
                        <div class="product-info">
                            <h3>Orange Hydraulic Chairs Smiley</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱1,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="yellow-hydraulic-chair">
                        <div class="product-image">
                            <img src="images/items/AG-16.png" alt="Yellow Hydraulic Chairs Smiley">
                        </div>
                        <div class="product-info">
                            <h3>Yellow Hydraulic Chairs Smiley</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱1,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="conference-chair">
                        <div class="product-image">
                            <img src="images/items/AH-17.png" alt="Conference Chairs">
                        </div>
                        <div class="product-info">
                            <h3>Conference Chairs</h3>
                            <p class="product-category">Chairs</p>
                            <p class="product-price">₱2,500.00</p>
                        </div>
                    </div>

                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Tables Section -->
        <section class="product-section" id="tables">
        <div class="section-header">
            <h2>Tables</h2>
        </div>

        <div class="product-carousel-container">
            <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>
          
            <div class="product-carousel">

                <div class="product-card interactive" id="information-table">             
                    <div class="product-image">
                        <img src="images/items/BA-1.png" alt="Information System Table">
                    </div>
                    <div class="product-info">
                        <h3>Information System Table</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱600.00</p>
                    </div>
                </div>
    
                <div class="product-card interactive" id="round-glass-table-60">
                    <div class="product-image">
                        <img src="images/items/BB-2.png" alt="Round Glass Conference Table">
                    </div>
                    <div class="product-info">
                        <h3>Round Glass Conference Table (60 diameter)</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱850.00</p>
                    </div>
                </div>
    
                <div class="product-card interactive" id="round-glass-table-80">
                    <div class="product-image">
                        <img src="images/items/BB-3.png" alt="Round Glass Conference Table">
                    </div>
                    <div class="product-info">
                        <h3>Round Glass Conference Table (80 diameter)</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱1,000.00</p>
                    </div>
                </div>
    
                <div class="product-card interactive" id="round-white-table-60">
                    <div class="product-image">
                        <img src="images/items/BB-4.png" alt="Round Conference White Round Table">
                    </div>
                    <div class="product-info">
                        <h3>Round Conference White Round Table (60 diameter)</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱800.00</p>
                    </div>
                </div>
    
                <div class="product-card interactive" id="round-white-table-80">
                    <div class="product-image">
                        <img src="images/items/BB-5.png" alt="Round Conference White Round Table">
                    </div>
                    <div class="product-info">
                        <h3>Round Conference White Round Table (80 diameter)</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱900.00</p>
                    </div>
                </div>
    
                <div class="product-card interactive" id="cocktail-table-60">
                    <div class="product-image">
                        <img src="images/items/BC-6.png" alt="Cocktail Glass Table">
                    </div>
                    <div class="product-info">
                        <h3>Cocktail Glass Table (60 diameter)</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱1,000.00</p>
                    </div>
                </div>
    
                <div class="product-card interactive" id="cocktail-table-80">
                    <div class="product-image">
                        <img src="images/items/BC-7.png" alt="Cocktail Glass Table">
                    </div>
                    <div class="product-info">
                        <h3>Cocktail Glass Table (80 diameter)</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱1,100.00</p>
                    </div>
                </div>
    
                <div class="product-card interactive" id="hydraulic-white-table">
                    <div class="product-image">
                        <img src="images/items/BD-8.png" alt="Hydraulic White Round Table">
                    </div>
                    <div class="product-info">
                        <h3>Hydraulic White Round Table</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱1,300.00</p>
                    </div>
                </div>

                <div class="product-card interactive" id="coffee-table-1">
                    <div class="product-image">
                        <img src="images/items/BE-9.png" alt="Coffee Table Rectangular 1">
                    </div>
                    <div class="product-info">
                        <h3>Coffee Table Rectangular 1</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱850.00</p>
                    </div>
                </div>

                <div class="product-card interactive" id="coffee-table-2">
                    <div class="product-image">
                        <img src="images/items/BE-10.png" alt="Coffee Table Rectangular 2">
                    </div>
                    <div class="product-info">
                        <h3>Coffee Table Rectangular 2</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱850.00</p>
                    </div>
                </div>

                <div class="product-card interactive" id="system-lockable-table1">
                    <div class="product-image">
                        <img src="images/items/BF-11.png" alt="System Lockable Table">
                    </div>
                    <div class="product-info">
                        <h3>System Lockable Table ( 1m .5m x .75m (h))</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱1,000.00</p>
                    </div>
                </div>

                <div class="product-card interactive" id="system-lockable-table2">
                    <div class="product-image">
                        <img src="images/items/BF-12.png" alt="System Lockable Table">
                    </div>
                    <div class="product-info">
                        <h3>System Lockable Table ( 1m .5m x 1m (h))</h3>
                        <p class="product-category">Tables</p>
                        <p class="product-price">₱1,200.00</p>
                    </div>
                </div>

            </div>
            <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
        </div>
        </section>
    

     <!-- Conference Set Section -->
        <section class="product-section" id="conference-set">
            <div class="section-header">
                <h2>Conference Set</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>
                
                <div class="product-carousel">
                    
                    <div class="product-card interactive" id="conference-set1">
                        <div class="product-image">
                            <img src="images/items/CA-1.png" alt="Conference Set 1">
                        </div>
                        <div class="product-info">
                            <h3>Conference Set 1 ( 1 Table, 2 Chair )</h3>
                            <p class="product-category">Tables</p>
                            <p class="product-price">₱1,200.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="conference-set2">
                        <div class="product-image">
                            <img src="images/items/CA-2.png" alt="Conference Set 2">
                        </div>
                        <div class="product-info">
                            <h3>Conference Set 2 (1 Table, 2 Chairs)</h3>
                            <p class="product-category">Conference Sets</p>
                            <p class="product-price">₱1,300.00</p>
                        </div>
                    </div>
                    <div class="product-card" interactive id="conference-set3">
                        <div class="product-image">
                            <img src="images/items/CB-3.png" alt="Conference Set 3">
                        </div>
                        <div class="product-info">
                            <h3>Conference Set 3 (1 Table, 4 Chairs)</h3>
                            <p class="product-category">Conference Sets</p>
                            <p class="product-price">₱1,450.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="conference-set4">
                        <div class="product-image">
                            <img src="images/items/CB-4.png" alt="Conference Set 4">
                        </div>
                        <div class="product-info">
                            <h3>Conference Set 4 (1 Table, 4 Chairs)</h3>
                            <p class="product-category">Conference Sets</p>
                            <p class="product-price">₱1,500.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="conference-set5">
                        <div class="product-image">
                            <img src="images/items/CC-5.png" alt="Conference Set 5 White">
                        </div>
                        <div class="product-info">
                            <h3>Conference Set 5 White (1 Table, 4 Chairs)</h3>
                            <p class="product-category">Conference Sets</p>
                            <p class="product-price">₱5,500.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="conference-set6">
                        <div class="product-image">
                            <img src="images/items/CC-6.png" alt="Conference Set 6 Black">
                        </div>
                        <div class="product-info">
                            <h3>Conference Set 6 Black (1 Table, 4 Chairs)</h3>
                            <p class="product-category">Conference Sets</p>
                            <p class="product-price">₱5,500.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="conference-set7">
                        <div class="product-image">
                            <img src="images/items/CD-7.png" alt="Conference Set 7">
                        </div>
                        <div class="product-info">
                            <h3>Conference Set 7 (1 Cocktail Table, 2 Barstool Chairs)</h3>
                            <p class="product-category">Conference Sets</p>
                            <p class="product-price">₱2,350.00</p>
                        </div>
                    </div>
                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>
    

    <!-- Sofa Sets Section -->
        <section class="product-section" id="sofa-sets">
            <div class="section-header">
                <h2>Sofa Sets</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="sofa-set-1">
                        <div class="product-image">
                            <img src="images/items/DA-1.png" alt="Sofa Set 1">
                        </div>
                        <div class="product-info">
                            <h3>Sofa Set 1 Black Leatherette ((1) 3-seater, (2) 1-seater, (3) (1) Center Table)</h3>
                            <p class="product-category">Sofa Sets</p>
                            <p class="product-price">₱7,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="sofa-set-2">
                        <div class="product-image">
                            <img src="images/items/DA-2.png" alt="Sofa Set 2">
                        </div>
                        <div class="product-info">
                            <h3>Sofa Set 2 Black Leatherette ((1) 3-seater, (2) 1-seater, (3) (1) Center Table)</h3>
                            <p class="product-category">Sofa Sets</p>
                            <p class="product-price">₱7,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="sofa-set-3">
                        <div class="product-image">
                            <img src="images/items/DA-3.png" alt="Sofa Set 3">
                        </div>
                        <div class="product-info">
                            <h3>Sofa Set 3 Black Leatherette ((1) 2-seater, (2) 1-seater, (3) (1) Center Table)</h3>
                            <p class="product-category">Sofa Sets</p>
                            <p class="product-price">₱6,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="sofa-set-4">
                        <div class="product-image">
                            <img src="images/items/DA-4.png" alt="Sofa Set 4">
                        </div>
                        <div class="product-info">
                            <h3>Sofa Set 4 Black Leatherette ((1) 2-seater, (2) 1-seater, (3) (1) Center Table)</h3>
                            <p class="product-category">Sofa Sets</p>
                            <p class="product-price">₱6,000.00</p>
                        </div>
                    </div>
                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>

    
    <!-- Sofa Single Section -->
        <section class="product-section" id="sofa-single">
            <div class="section-header">
                <h2>Sofa Single</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="sofa-3-seater-black">
                        <div class="product-image">
                            <img src="images/items/DA-1.1.png" alt="Sofa 3 seater Black Leatherette">
                        </div>
                        <div class="product-info">
                            <h3>Sofa 3 seater Black Leatherette part of DA-1</h3>
                            <p class="product-category">Sofa Single</p>
                            <p class="product-price">₱2,500.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="sofa-1-seater-black">
                        <div class="product-image">
                            <img src="images/items/DB-1.2.png" alt="Sofa 1 seater Black Leatherette">
                        </div>
                        <div class="product-info">
                            <h3>Sofa 1 seater Black Leatherette part of DA-1</h3>
                            <p class="product-category">Sofa Single</p>
                            <p class="product-price">₱1,500.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="sofa-3-seater-white">
                        <div class="product-image">
                            <img src="images/items/DN-2.1.png" alt="Sofa 3 seater White Leatherette">
                        </div>
                        <div class="product-info">
                            <h3>Sofa 3 seater White Leatherette part of DA-2</h3>
                            <p class="product-category">Sofa Single</p>
                            <p class="product-price">₱2,500.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="sofa-1-seater-white">
                        <div class="product-image">
                            <img src="images/items/DD-2.2.png" alt="Sofa 1 seater White Leatherette">
                        </div>
                        <div class="product-info">
                            <h3>Sofa 1 seater White Leatherette part of DA-2</h3>
                            <p class="product-category">Sofa Single</p>
                            <p class="product-price">₱1,500.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="sofa-2-seater-black">
                        <div class="product-image">
                            <img src="images/items/DE-3.1.png" alt="Sofa 2 seater Black Leatherette">
                        </div>
                        <div class="product-info">
                            <h3>Sofa 2 seater Black Leatherette part of DA-3</h3>
                            <p class="product-category">Sofa Single</p>
                            <p class="product-price">₱2,000.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="sofa-2-seater-white">
                        <div class="product-image">
                            <img src="images/items/DF-3.1.png" alt="Sofa 2 seater White Leatherette">
                        </div>
                        <div class="product-info">
                            <h3>Sofa 2 seater White Leatherette part of DA-3</h3>
                            <p class="product-category">Sofa Single</p>
                            <p class="product-price">₱2,000.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="sofa-2-seater-dark-gray">
                        <div class="product-image">
                            <img src="images/items/DG-4.png" alt="Sofa 2 seater Dark Gray Fabric">
                        </div>
                        <div class="product-info">
                            <h3>Sofa 2 seater Dark Gray Fabric</h3>
                            <p class="product-category">Sofa Single</p>
                            <p class="product-price">₱3,000.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="ottoman">
                        <div class="product-image">
                            <img src="images/items/DH-5.png" alt="Ottoman">
                        </div>
                        <div class="product-info">
                            <h3>Ottoman</h3>
                            <p class="product-category">Sofa Single</p>
                            <p class="product-price">₱750.00</p>
                        </div>
                    </div>
                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Showcase Section -->
        <section class="product-section" id="showcase">
            <div class="section-header">
                <h2>Showcase</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="showcase-a">
                        <div class="product-image">
                            <img src="images/items/EA-1.png" alt="Showcase Type A">
                        </div>
                        <div class="product-info">
                            <h3>Showcase Type A (1m x .5m x 1m (h))</h3>
                            <p class="product-category">Showcase</p>
                            <p class="product-price">₱4,100.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="showcase-b">
                        <div class="product-image">
                            <img src="images/items/EB-2.png" alt="Showcase Type B">
                        </div>
                        <div class="product-info">
                            <h3>Showcase Type B (1m x .5m x 1.2m (h))</h3>
                            <p class="product-category">Showcase</p>
                            <p class="product-price">₱5,800.00</p>
                        </div>
                    </div>
                    <div class="product-card interactive" id="showcase-c">
                        <div class="product-image">
                            <img src="images/items/EC-3.png" alt="Showcase Type C">
                        </div>
                        <div class="product-info">
                            <h3>Showcase Type C (1m x .5m x 1.8m (h))</h3>
                            <p class="product-category">Showcase</p>
                            <p class="product-price">₱6,500.00</p>
                        </div>
                    </div>
                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Display Section -->
       <section class="product-section" id="display">
        <div class="section-header">
            <h2>Display</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="standard-shelves1">
                        <div class="product-image">
                            <img src="images/items/FA-1.png" alt="Standard Shelves">
                        </div>
                        <div class="product-info">
                            <h3>Standard Shelves (1m x .30m x 3/4" (thick))</h3>
                            <p class="product-category">Display</p>
                            <p class="product-price">₱300.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="standard-shelves2">
                        <div class="product-image">
                            <img src="images/items/FB-2.png" alt="Standard Shelves">
                        </div>
                        <div class="product-info">
                            <h3>Standard Shelves (2m x .30m x 3/4" (thick))</h3>
                            <p class="product-category">Display</p>
                            <p class="product-price">₱600.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="wall-mounted-brochure-pocket1">
                        <div class="product-image">
                            <img src="images/items/FC-3.png" alt="Wall Mounted Brochure Pocket 1">
                        </div>
                        <div class="product-info">
                            <h3>Wall Mounted Brochure Pocket 1( 4 cases )</h3>
                            <p class="product-category">Display</p>
                            <p class="product-price">₱900.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="wall-mounted-brochure-pocket2">
                        <div class="product-image">
                            <img src="images/items/FD-4.png" alt="Wall Mounted Brochure Pocket 1">
                        </div>
                        <div class="product-info">
                            <h3>Wall Mounted Brochure Pocket 1( 2 cases )</h3>
                            <p class="product-category">Display</p>
                            <p class="product-price">₱600.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="wooded-brochure-standee-1">
                        <div class="product-image">
                            <img src="images/items/FE-5.png" alt="Wooded Brochure Standee 1">
                        </div>
                        <div class="product-info">
                            <h3>Wooded Brochure Standee 1( 3 pockets )</h3>
                            <p class="product-category">Display</p>
                            <p class="product-price">₱1,100.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="acrylic-folded-brochure-standee">
                        <div class="product-image">
                            <img src="images/items/FF-6.png" alt="Acrylic Folded Brochure Standee 1">
                        </div>
                        <div class="product-info">
                            <h3>Acrylic Folded Brochure Standee 1 ( 4 pockets )</h3>
                            <p class="product-category">Display</p>
                            <p class="product-price">₱1,550.00</p>
                        </div>
                    </div>
                    
                    <div class="product-card interactive" id="universal-tv-stand">
                        <div class="product-image">
                            <img src="images/items/FG-7.png" alt="Universal TV Stand">
                        </div>
                        <div class="product-info">
                            <h3>Universal TV Stand</h3>
                            <p class="product-category">Display</p>
                            <p class="product-price">₱2,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="universal-tv-bracket">
                        <div class="product-image">
                            <img src="images/items/FH-8.png" alt="Universal TV Bracket">
                        </div>
                        <div class="product-info">
                            <h3>Universal TV Bracket</h3>
                            <p class="product-category">Display</p>
                            <p class="product-price">₱1,275.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="system-vertical-photo-panel1">
                        <div class="product-image">
                            <img src="images/items/FI-9.png" alt="System Vertical Photo Panel">
                        </div>
                        <div class="product-info">
                            <h3>System Vertical Photo Panel ( 1m x 2.5m (h))</h3>
                            <p class="product-category">Display</p>
                            <p class="product-price">₱1,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="system-vertical-photo-panel2">
                        <div class="product-image">
                            <img src="images/items/FJ-10.png" alt="System Vertical Photo Panel">
                        </div>
                        <div class="product-info">
                            <h3>System Vertical Photo Panel with one spotlight</h3>
                            <p class="product-category">Display</p>
                            <p class="product-price">₱1,500.00</p>
                        </div>
                    </div>

                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Prop & Aids Section -->
        <section class="product-section" id="props-and-aids">
            <div class="section-header">
                <h2>Props & Aids</h2>
            </div>
            
            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="dry-waste-bin1">
                        <div class="product-image">
                            <img src="images/items/GA-1.png" alt="Dry Waste Bin 1">
                        </div>
                        <div class="product-info">
                            <h3>Dry Waste Bin 1</h3>
                            <p class="product-category">Prop & Aids</p>
                            <p class="product-price">₱120.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="s-hook">
                        <div class="product-image">
                            <img src="images/items/GB-2.png" alt="S Hook">
                        </div>
                        <div class="product-info">
                            <h3>S Hook</h3>
                            <p class="product-category">Prop & Aids</p>
                            <p class="product-price">₱50.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="tambiolo">
                        <div class="product-image">
                            <img src="images/items/GC-3.png" alt="Tambiolo">
                        </div>
                        <div class="product-info">
                            <h3>Tambiolo</h3>
                            <p class="product-category">Prop & Aids</p>
                            <p class="product-price">₱2,200.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="dressing-room-mirror">
                        <div class="product-image">
                            <img src="images/items/GD-4.png" alt="Dressing Room Mirror">
                        </div>
                        <div class="product-info">
                            <h3>Dressing Room Mirror</h3>
                            <p class="product-category">Prop & Aids</p>
                            <p class="product-price">₱1,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="easel-stand">
                        <div class="product-image">
                            <img src="images/items/GE-5.png" alt="Easel Stand">
                        </div>
                        <div class="product-info">
                            <h3>Easel Stand</h3>
                            <p class="product-category">Prop & Aids</p>
                            <p class="product-price">₱1,200.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="palochina-folded-rack3">
                        <div class="product-image">
                            <img src="images/items/GF-6.png" alt="Palochina Folded Rack 3 layer">
                        </div>
                        <div class="product-info">
                            <h3>Palochina Folded Rack 3 layer</h3>
                            <p class="product-category">Prop & Aids</p>
                            <p class="product-price">₱2,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="palochina-folded-rack4">
                        <div class="product-image">
                            <img src="images/items/GF-7.png" alt="Palochina Folded Rack 4 layer">
                        </div>
                        <div class="product-info">
                            <h3>Palochina Folded Rack 4 layer</h3>
                            <p class="product-category">Prop & Aids</p>
                            <p class="product-price">₱2,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="x-banner">
                        <div class="product-image">
                            <img src="images/items/GI-8.png" alt="X-Banner with Graphics printed of Tarp">
                        </div>
                        <div class="product-info">
                            <h3>X-Banner with Graphics printed of Tarp</h3>
                            <p class="product-category">Prop & Aids</p>
                            <p class="product-price">₱1,200.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="pull-up-banner">
                        <div class="product-image">
                            <img src="images/items/GI-9.png" alt="Pull up Banner with Graphics printed of Tarp">
                        </div>
                        <div class="product-info">
                            <h3>Pull up Banner with Graphics printed of Tarp</h3>
                            <p class="product-category">Prop & Aids</p>
                            <p class="product-price">₱2,200.00</p>
                        </div>
                    </div>

                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Carpet Section -->
        <section class="product-section" id="carpet">
            <div class="section-header">
                <h2>Carpet</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="needle-punched-carpet1">
                        <div class="product-image">
                            <img src="images/items/HA-1.png" alt="Needle Punched Carpet">
                        </div>
                        <div class="product-info">
                            <h3>Needle Punched Carpet ( Standard Color Red, Green, Blue, Light Gray, Dark Gray, Black ) /sqm</h3>
                            <p class="product-category">Carpet</p>
                            <p class="product-price">₱370.00</p>
                        </div>
                    </div>
                    
                    <div class="product-card interactive" id="faux-grass-carpet">
                        <div class="product-image">
                            <img src="images/items/HB-2.png" alt="Faux Grass Carpet">
                        </div>
                        <div class="product-info">
                            <h3>Faux Grass Carpet /sqm</h3>
                            <p class="product-category">Carpet</p>
                            <p class="product-price">₱400.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="loop-pile-carpet">
                        <div class="product-image">
                            <img src="images/items/HC-3.png" alt="Loop Pile Carpet">
                        </div>
                        <div class="product-info">
                            <h3>Loop Pile Carpet /sqm</h3>
                            <p class="product-category">Carpet</p>
                            <p class="product-price">₱1,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="tile-carpet">
                        <div class="product-image">
                            <img src="images/items/HD-4.png" alt="Tile Carpet">
                        </div>
                        <div class="product-info">
                            <h3>Tile Carpet /sqm</h3>
                            <p class="product-category">Carpet</p>
                            <p class="product-price">₱800.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="needle-punched-carpet2">
                        <div class="product-image">
                            <img src="images/items/HD-5.png" alt="Needle Punched Carpet">
                        </div>
                        <div class="product-info">
                            <h3>Needle Punched Carpet ( Special Color ) /sqm</h3>
                            <p class="product-category">Carpet</p>
                            <p class="product-price">₱400.00</p>
                        </div>
                    </div>

                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Appliances Section -->
        <section class="product-section" id="appliances">
            <div class="section-header">
                <h2>Appliances</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="water-dispenser">
                        <div class="product-image">
                            <img src="images/items/IA-1.png" alt="Water Dispenser">
                        </div>
                        <div class="product-info">
                            <h3>Water Dispenser ( with 5 gal of water with 50 cups )</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱3,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="refrigerator1">
                        <div class="product-image">
                            <img src="images/items/IB-2.png" alt="Refrigerator 1">
                        </div>
                        <div class="product-info">
                            <h3>Refrigerator 1</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱5,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="refrigerator2">
                        <div class="product-image">
                            <img src="images/items/IB-3.png" alt="Refrigerator 2">
                        </div>
                        <div class="product-info">
                            <h3>Refrigerator 2</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱7,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="chest-type-freezer-1">
                        <div class="product-image">
                            <img src="images/items/IC-4.png" alt="Chest Type Freezer 1">
                        </div>
                        <div class="product-info">
                            <h3>Chest Type Freezer 1 /day</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱3,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="chest-type-freezer-2">
                        <div class="product-image">
                            <img src="images/items/IC-5.png" alt="Chest Type Freezer 2">
                        </div>
                        <div class="product-info">
                            <h3>Chest Type Freezer 2 /day</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱5,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="chest-type-freezer-3">
                        <div class="product-image">
                            <img src="images/items/IC-6.png" alt="Chest Type Freezer 3">
                        </div>
                        <div class="product-info">
                            <h3>Chest Type Freezer 3 /day</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱6,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="microwave-oven">
                        <div class="product-image">
                            <img src="images/items/ID-7.png" alt="Microwave Oven">
                        </div>
                        <div class="product-info">
                            <h3>Microwave Oven</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱3,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="coffee-maker">
                        <div class="product-image">
                            <img src="images/items/IE-8.png" alt="Coffee Maker">
                        </div>
                        <div class="product-info">
                            <h3>Coffee Maker 1 gal of water with 50 cups</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱1,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="stand-fan">
                        <div class="product-image">
                            <img src="images/items/IF-9.png" alt="Stand Fan">
                        </div>
                        <div class="product-info">
                            <h3>Stand Fan</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱1,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="electric-kettle">
                        <div class="product-image">
                            <img src="images/items/IG-10.png" alt="Electric Kettle">
                        </div>
                        <div class="product-info">
                            <h3>Electric Kettle</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱1,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="projector-sets">
                        <div class="product-image">
                            <img src="images/items/IH-11.png" alt="Projector Sets">
                        </div>
                        <div class="product-info">
                            <h3>Projector Sets</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱7,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="alcohol-dispenser1">
                        <div class="product-image">
                            <img src="images/items/II-12.png" alt="Alcohol Dispenser">
                        </div>
                        <div class="product-info">
                            <h3>Alcohol Dispenser with 1 gal of Alcohol</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱2,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="alcohol-dispenser2">
                        <div class="product-image">
                            <img src="images/items/II-13.png" alt="Alcohol Dispenser">
                        </div>
                        <div class="product-info">
                            <h3>Alcohol Dispenser with Thermometer with 1 gal Alcohol</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱3,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="mist-spray">
                        <div class="product-image">
                            <img src="images/items/IJ-14.png" alt="Mist Spray">
                        </div>
                        <div class="product-info">
                            <h3>Mist Spray with ultra violet light with 1 gal Disinfectant</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱2,500.00</p>
                        </div>
                    </div>

                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- TV and Audio Visual Section -->
        <section class="product-section" id="tv-and-audio-visual">
            <div class="section-header">
                <h2>TV & Audio Visual</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="led-32">
                        <div class="product-image">
                            <img src="images/items/JA-1.png" alt="LED 32 Inches">
                        </div>
                        <div class="product-info">
                            <h3>LED 32 Inches HDMI Ready with TV Stand/Wall mounted</h3>
                            <p class="product-category">TV & Audio Visual</p>
                            <p class="product-price">₱4,400.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="led-42">
                        <div class="product-image">
                            <img src="images/items/JA-2.png" alt="LED 42 Inches">
                        </div>
                        <div class="product-info">
                            <h3>LED 42 Inches HDMI Ready with TV Stand/Wall mounted</h3>
                            <p class="product-category">TV & Audio Visual</p>
                            <p class="product-price">₱6,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="led-50">
                        <div class="product-image">
                            <img src="images/items/JA-3.png" alt="LED 50 Inches">
                        </div>
                        <div class="product-info">
                            <h3>LED 50 Inches HDMI Ready with TV Stand/Wall mounted</h3>
                            <p class="product-category">TV & Audio Visual</p>
                            <p class="product-price">₱6,600.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="led-65">
                        <div class="product-image">
                            <img src="images/items/JA-4.png" alt="LED 65 Inches">
                        </div>
                        <div class="product-info">
                            <h3>LED 65 Inches HDMI Ready with TV Stand/Wall mounted</h3>
                            <p class="product-category">TV & Audio Visual</p>
                            <p class="product-price">₱11,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="led-75">
                        <div class="product-image">
                            <img src="images/items/JA-5.png" alt="LED 75 Inches">
                        </div>
                        <div class="product-info">
                            <h3>LED 75 Inches HDMI Ready with TV Stand/Wall mounted</h3>
                            <p class="product-category">TV & Audio Visual</p>
                            <p class="product-price">₱14,500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="led-wall-standard-size1">
                        <div class="product-image">
                            <img src="images/items/JB-6.png" alt="LED Wall Standard Size with Basic Sound System">
                        </div>
                        <div class="product-info">
                            <h3>LED Wall Standard Size with Basic Sound System</h3>
                            <p class="product-category">Appliances</p>
                            <p class="product-price">₱25,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="led-wall-standard-size2">
                        <div class="product-image">
                            <img src="images/items/JB-7.png" alt="LED Wall Standard Size">
                        </div>
                        <div class="product-info">
                            <h3>LED Wall Standard Size</h3>
                            <p class="product-category">TV & Audio Visual</p>
                            <p class="product-price">₱20,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="led-wall-other-size">
                        <div class="product-image">
                            <img src="images/items/JC-8.png" alt="LED Wall Other Size">
                        </div>
                        <div class="product-info">
                            <h3>LED Wall Other Size</h3>
                            <p class="product-category">TV & Audio Visual</p>
                            <p class="product-price">₱ UPON REQUEST</p>
                        </div>
                    </div>

                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Outlet & Adaptor Section -->
        <section class="product-section" id="outlet-and-adaptor">
            <div class="section-header">
                <h2>Outlet & Adaptor</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="convenience-outlet3">
                        <div class="product-image">
                            <img src="images/items/KA-1.png" alt="Convenience Outlet 3 gang">
                        </div>
                        <div class="product-info">
                            <h3>Convenience Outlet 3 gang</h3>
                            <p class="product-category">Outlet & Adaptor</p>
                            <p class="product-price">₱500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="convenience-outlet2">
                        <div class="product-image">
                            <img src="images/items/KA-2.png" alt="Convenience Outlet 2 gang">
                        </div>
                        <div class="product-info">
                            <h3>Convenience Outlet 2 gang</h3>
                            <p class="product-category">Outlet & Adaptor</p>
                            <p class="product-price">₱450.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="convenience-outlet1">
                        <div class="product-image">
                            <img src="images/items/KA-3.png" alt="Convenience Outlet ( Universal )">
                        </div>
                        <div class="product-info">
                            <h3>Convenience Outlet ( Universal )</h3>
                            <p class="product-category">Outlet & Adaptor</p>
                            <p class="product-price">₱500.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="universal-adaptor">
                        <div class="product-image">
                            <img src="images/items/KB-4.png" alt="Universal Adaptor">
                        </div>
                        <div class="product-info">
                            <h3>Universal Adaptor</h3>
                            <p class="product-category">Outlet & Adaptor</p>
                            <p class="product-price">₱300.00</p>
                        </div>
                    </div>

                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Breaker Single Phase Section -->
        <section class="product-section" id="breaker-single-phase">
            <div class="section-header">
                <h2>Breaker Single Phase</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="breaker-single-phase1">
                        <div class="product-image">
                            <img src="images/items/LA-1.png" alt="Up to 4.4kw w/20 A Switch 1P">
                        </div>
                        <div class="product-info">
                            <h3>Up to 4.4kw w/20 A Switch 1P</h3>
                            <p class="product-category">Breaker Single Phase</p>
                            <p class="product-price">₱3,900.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="breaker-single-phase2">
                        <div class="product-image">
                            <img src="images/items/LA-2.png" alt="Up to 6.6kw w/30 A Switch 1P">
                        </div>
                        <div class="product-info">
                            <h3>Up to 6.6kw w/30 A Switch 1P</h3>
                            <p class="product-category">Breaker Single Phase</p>
                            <p class="product-price">₱5,600.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="breaker-single-phase3">
                        <div class="product-image">
                            <img src="images/items/LA-3.png" alt="Up to 15.4kw w/60 A Switch 1P">
                        </div>
                        <div class="product-info">
                            <h3>Up to 15.4kw w/60 A Switch 1P</h3>
                            <p class="product-category">Breaker Single Phase</p>
                            <p class="product-price">₱8,400.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="breaker-single-phase4">
                        <div class="product-image">
                            <img src="images/items/LA-4.png" alt="Up to 22kw w/100 A Switch 1P">
                        </div>
                        <div class="product-info">
                            <h3>Up to 22kw w/100 A Switch 1P</h3>
                            <p class="product-category">Breaker Single Phase</p>
                            <p class="product-price">₱15,500.00</p>
                        </div>
                    </div>

                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Breaker Three Phase Section -->
        <section class="product-section" id="breaker-three-phase">
            <div class="section-header">
                <h2>Breaker Three Phase</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="breaker-three-phase1">
                        <div class="product-image">
                            <img src="images/items/LB-1.png" alt="30 Amps V 60 Hz Breaker 3P">
                        </div>
                        <div class="product-info">
                            <h3>30 Amps V 60 Hz Breaker 3P</h3>
                            <p class="product-category">Breaker Three Phase</p>
                            <p class="product-price">₱11,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="breaker-three-phase2">
                        <div class="product-image">
                            <img src="images/items/LB-2.png" alt="60 Amps V 60 Hz Breaker 3P">
                        </div>
                        <div class="product-info">
                            <h3>60 Amps V 60 Hz Breaker 3P</h3>
                            <p class="product-category">Breaker Three Phase</p>
                            <p class="product-price">₱13,200.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="breaker-three-phase3">
                        <div class="product-image">
                            <img src="images/items/LB-3.png" alt="100 Amps V 60 Hz Breaker 3P">
                        </div>

                        <div class="product-info">
                            <h3>100 Amps V 60 Hz Breaker 3P</h3>
                            <p class="product-category">Breaker Three Phase</p>
                            <p class="product-price">₱31,700.00</p>
                        </div>
                    </div>

                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Transformer Section -->
        <section class="product-section" id="transformer">
            <div class="section-header">
                <h2>Transformer</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="step-down-single">
                        <div class="product-image">
                            <img src="images/items/MA-1.png" alt="Step-down Transformer">
                        </div>
                        <div class="product-info">
                            <h3>Step-down Transformer ( Single Phase )</h3>
                            <p class="product-category">Transformer</p>
                            <p class="product-price">₱ UPON REQUEST</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="step-down-three">
                        <div class="product-image">
                            <img src="images/items/MA-2.png" alt="Step-down Transformer">
                        </div>
                        <div class="product-info">
                            <h3>Step-down Transformer ( Three Phase )</h3>
                            <p class="product-category">Transformer</p>
                            <p class="product-price">₱ UPON REQUEST</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="step-up-single">
                        <div class="product-image">
                            <img src="images/items/MB-3.png" alt="Step-Up Transformer">
                        </div>
                        <div class="product-info">
                            <h3>Step-Up Transformer ( Single Phase )</h3>
                            <p class="product-category">Transformer</p>
                            <p class="product-price">₱ UPON REQUEST</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="step-up-three">
                        <div class="product-image">
                            <img src="images/items/MB-4.png" alt="Step-Up Transformer">
                        </div>
                        <div class="product-info">
                            <h3>Step-Up Transformer ( Three Phase )</h3>
                            <p class="product-category">Transformer</p>
                            <p class="product-price">₱ UPON REQUEST</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="genset">
                        <div class="product-image">
                            <img src="images/items/MC-5.png" alt="Genset">
                        </div>
                        <div class="product-info">
                            <h3>Genset</h3>
                            <p class="product-category">Transformer</p>
                            <p class="product-price">₱ UPON REQUEST</p>
                        </div>
                    </div>

                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>


    <!-- Light Fittings Section -->
        <section class="product-section" id="light-fittings">
            <div class="section-header">
                <h2>Light Fittings</h2>
            </div>

            <div class="product-carousel-container">
                <button class="scroll-btn scroll-left"><i class="fas fa-chevron-left"></i></button>

                <div class="product-carousel">

                    <div class="product-card interactive" id="flourescent-lamp-40">
                        <div class="product-image">
                            <img src="images/items/NA-1.png" alt="Flourescent Lamp(40 watts)">
                        </div>
                        <div class="product-info">
                            <h3>Flourescent Lamp(40 watts)</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱700.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="led-flourescent-day-light">
                        <div class="product-image">
                            <img src="images/items/NA-2.png" alt="LED Flourescent (Day Light)">
                        </div>
                        <div class="product-info">
                            <h3>LED Flourescent (Day Light)</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱800.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="led-pin-light1">
                        <div class="product-image">
                            <img src="images/items/NB-3.png" alt="LED Pinlight( 5 watts )">
                        </div>
                        <div class="product-info">
                            <h3>LED Pinlight( 5 watts )</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱700.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="led-pin-light2">
                        <div class="product-image">
                            <img src="images/items/NB-4.png" alt="LED Pinlight( 15 watts )">
                        </div>
                        <div class="product-info">
                            <h3>LED Pinlight( 15 watts )</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱800.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="long-arm-spotlight">
                        <div class="product-image">
                            <img src="images/items/NC-5.png" alt="Long Arm Spotlight">
                        </div>
                        <div class="product-info">
                            <h3>Long Arm Spotlight</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱850.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="short-arm-spotlight">
                        <div class="product-image">
                            <img src="images/items/NC-6.png" alt="Short Arm Spotlight">
                        </div>
                        <div class="product-info">
                            <h3>Short Arm Spotlight</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱1,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="track-bar-track-light">
                        <div class="product-image">
                            <img src="images/items/ND-7.png" alt="Track Bar with 3 Track Light">
                        </div>
                        <div class="product-info">
                            <h3>Track Bar with 3 Track Light</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱1,000.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="halogen-pinlight">
                        <div class="product-image">
                            <img src="images/items/NE-8.png" alt="Halogen Pinlight">
                        </div>
                        <div class="product-info">
                            <h3>Halogen Pinlight</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱800.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="floodlight1">
                        <div class="product-image">
                            <img src="images/items/NF-11.png" alt="Floodlight 150 watts">
                        </div>
                        <div class="product-info">
                            <h3>Floodlight 150 watts</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱1,150.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="floodlight2">
                        <div class="product-image">
                            <img src="images/items/NF-13.png" alt="Floodlight 300 watts">
                        </div>
                        <div class="product-info">
                            <h3>Floodlight 300 watts</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱1,200.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="metal-halide1">
                        <div class="product-image">
                            <img src="images/items/NG-14.png" alt="Metal Halide 150 watts">
                        </div>
                        <div class="product-info">
                            <h3>Metal Halide 150 watts</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱2,250.00</p>
                        </div>
                    </div>

                    <div class="product-card interactive" id="metal-halide2">
                        <div class="product-image">
                            <img src="images/items/NG-15.png" alt="Metal Halide 400 watts">
                        </div>
                        <div class="product-info">
                            <h3>Metal Halide 400 watts</h3>
                            <p class="product-category">Light Fittings</p>
                            <p class="product-price">₱4,250.00</p>
                        </div>
                    </div>
                    
                </div>
                <button class="scroll-btn scroll-right"><i class="fas fa-chevron-right"></i></button>
            </div>
        </section>
    </div>

    <button id="backButton" class="back-button">← Back to Main Page</button>


<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <!-- Footer Left - Logo -->
        <div class="footer-left">
            <a href="index.php">
                <img src="images/campaign-monitor-logo.png" alt="MSD Godspeed Logo">
            </a>
        </div>

        <!-- Footer Center - Company Info -->
        <div class="footer-center">
            <h3>Main Office</h3>
            <p>324 Navy Road Veterans Village,<br>
               Barangay, Holy Spirit, Diliman, Quezon<br>
               City, Philippines 1127</p>
            
            <div class="contact-row">
                <div class="contact-icon-wrapper">
                    <img src="images/phone.png" alt="Phone" class="contact-icon">
                </div>
                <div class="contact-text">
                    <span class="contact-label">Phone:</span> (02) 8 570-8069<br>
                    <span class="contact-label">Mobile:</span> 0915-9785683
                </div>
            </div>
        
            <div class="contact-row">
                <div class="contact-icon-wrapper">
                    <img src="images/email.png" alt="Email" class="contact-icon">
                </div>
                <div class="contact-text">
                    <a href="mailto:wdcampos@msdgodspeedexhibits.com">wdcampos@msdgodspeedexhibits.com</a>
                </div>
            </div>
        
            <div class="social-icons">
                <a href="https://www.facebook.com/MSDGospeedExhibitsCorp" class="social-link" target="_blank" rel="noopener norefferer">
                    <img src="images/facebook.png" alt="Facebook" class="social-icon">
                </a>
                <a href="https://www.instagram.com/msdgodspeed2022/" class="social-link" target="_blank" rel="noopener norefferer">
                    <img src="images/instagram.png" alt="Instagram" class="social-icon">
                </a>
            </div>      
        </div>
        
        <!-- Footer Right - Navigation Links -->
        <div class="footer-right">
            <ul class="footer-links">
                <li><a href="photo-gallery.php">Galleries</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="docs/company-profile.pdf" download>Catalogue Download</a></li>
                <li><a href="docs/pricelist.pdf" download>Price Lists</a></li>
                <li><a href="index.php#about">About Us</a></li>
                <li><a href="more-product.php">Products</a></li>
                <li><a href="index.php#services">Services</a></li>

            </ul>
        </div>
    </div>
    
    <!-- Copyright Text -->
    <div class="copyright">
        <p>&copy; 2025 MSD Godspeed Exhibits - All Rights Reserved | <a href="terms.html">Terms & Policies</a></p>
    </div>
</footer>

        </div>
    </div>
    <a href="contact.php" class="floating-btn">📞 Contact Us</a>
    <script src="more-product.js"></script>
</body>
</html>