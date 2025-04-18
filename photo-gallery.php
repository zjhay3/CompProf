<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="photo-gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
	<div class="loading-screen">
		<img src="images/pagereload.gif" alt="Loading..." class="loading-video" />
	</div>

    <div class="container">
        <!-- Collapsible Sidebar - starts collapsed by default -->
        <div class="sidebar collapsed" id="sidebar">
            <div class="sidebar-header">
                <h3>Gallery Categories</h3>
                <button id="toggleSidebar"><i class="fas fa-bars"></i></button>
            </div>
            <div class="sidebar-content">
                <ul class="sidebar-menu">
                    <li class="active"><a href="#all"><i class="fas fa-images"></i> <span>All Photos</span></a></li>
                    <li><a href="#collateral"><i class="fas fa-file-alt"></i> <span>Collateral</span></a></li>
                    <li><a href="#special"><i class="fas fa-star"></i> <span>Special</span></a></li>
                    <li><a href="#standard"><i class="fas fa-building"></i> <span>Standard</span></a></li>
                    <li><a href="#upgraded"><i class="fas fa-crown"></i> <span>Upgraded</span></a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            <header>
                <div class="header-left">
                    <button id="sidebarToggle" class="sidebar-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1>Photo Gallery</h1>
                </div>
                <div class="header-right">
                    <button id="backToMain" onclick="window.close()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </header>

            <!-- Gallery Content -->
            <div class="gallery-content">
                <div class="gallery-wrapper">
                    <div class="gallery-row row-1">
                        <!-- Images will be populated dynamically -->
                    </div>
                    <div class="gallery-row row-2">
                        <!-- Images will be populated dynamically -->
                    </div>
                    <div class="gallery-row row-3">
                        <!-- Images will be populated dynamically -->
                    </div>
                </div>
            </div>

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
                <a href="https://www.facebook.com/MSDGospeedExhibitsCorp" class="social-link">
                    <img src="images/facebook.png" alt="Facebook" class="social-icon">
                </a>
                <a href="https://www.instagram.com/msdgodspeed2022/" class="social-link">
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
    <a href="contact.html" class="floating-btn">📞 Contact Us</a>
    <script src="photo-gallery.js"></script>
    <button id="backButton" class="back-button">← Back to Main Page</button>

</body>
</html>