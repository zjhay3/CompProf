<?php
// Include database connection if needed
include "php/db.php";

// Initialize variables to avoid undefined errors
$name = $email = $department = $message = "";
$formSubmitMessage = "";

// Form processing logic - this can be used for direct PHP form submission without AJAX
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Processing will be handled by AJAX/insert.php
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Swiss721', Georgia, serif; /* Apply Swiss 721 */
        }

        body {
            font-family: 'Swiss721', Georgia, serif; /* Apply Swiss 721 */
            background-color: #005a05;
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .container {
            font-family: 'Swiss721', Georgia, serif; /* Apply Swiss 721 */
            display: flex;
            width: 100%;
            max-width: 900px;
            background: #002d02;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin: 20px 0; /* Added margin to create space around the container */
        }
        section{
			padding: 100px 20px;
			min-height: 100vh;
			text-align: center;
			color: white;
		}

        /* Left Side */
        .left {
            flex: 1;
            padding: 20px;
        }

        .left h2 {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 20px;
        }


        .contact-info p {
            margin-bottom: 10px;
            font-size: 14px;
        }


        /* Right Side (Form) */
        .right {
            flex: 1;
            padding: 20px;
            background: white;
            border-radius: 10px;
            color: black;
        }
        .right select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        select {
            color: gray;
        }
        select:valid {
            color: black;
        }

        /* Alert messages */
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            text-align: center;
        }
        
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            height: 80px;
            resize: none;
        }

        button {
            background: #22A6DF; /* Light Blue */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #1C8CC4; /* Slightly darker blue for hover effect */
        }

        /* Responsive (Mobile) */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
                width: 90%;
            }

            .left, .right {
                padding: 15px;
            }

            .social-icons {
                justify-content: center;
            }
        }

        /* Footer Styles */
        .footer {
            position: relative;
            background-image: url("images/footer-background.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 10px 0 5px;
            color: white;
            overflow: hidden;
            margin-top: auto;
            width: 100%;
        }

        /* Dark green overlay */
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(1, 29, 2, 0.85);
            z-index: 0;
        }

        .footer-container {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: space-between;
            align-items: stretch; /* Changed from flex-start to stretch */
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
        }

        /* Footer Left - Logo */
        .footer-left {
            flex: 0 0 20%;
            display: flex;
            align-items: center; /* This centers vertically */
            justify-content: flex-start;
            padding-top: 20px; /* Added padding to push logo down a bit */
        }

        .footer-left img {
            max-width: 180px;
            height: auto;
        }

        /* Footer Center - Info */
        .footer-center {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
            padding-left: 20px;
        }

        .footer-center h3 {
            color: #f0a500;
            font-family: 'Swiss721', Georgia, serif; /* Apply Swiss 721 */
            font-size: 24px;
            margin-bottom: 10px;
        }

        .footer-center p {
            margin-bottom: 15px;
            line-height: 1.5;
            font-size: 14px;--
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: flex-start;
        }

        .contact-row {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 5px;
        }

        .contact-icon-wrapper {
            width: 24px;
            height: 24px;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-icon {
            width: 100px;
            height: 100px;
            object-fit: contain;
        }

        .contact-text {
            display: flex;
            flex-direction: column;
        }

        .contact-label {
            font-weight: bold;
            color: #f0a500;
        }

        .contact-text a {
            color: white;
            text-decoration: none;
        }

        .contact-text a:hover {
            color: #f0a500;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
            margin-left: -3px;
        }

        .social-link {
            width: 30px;
            height: 30px;
            background-color: transparent;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: scale(1.1);
        }

        .social-icon {
            width: 100px;
            height: 100px;
            object-fit: contain;
        }

        /* Footer Right - Links */
        .footer-right {
            flex: 0 0 30%;
            display: flex;
            justify-content: flex-start;
            align-items: center; /* This centers vertically */
            padding-top: 15px; /* Added padding to push links down a bit */
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px 30px;
            text-align: left;
        }

        .footer-links li a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-links li a:hover {
            color: #f0a500;
        }

        /* Copyright Text */
        .copyright {
            position: relative;
            z-index: 2;
            text-align: center;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .copyright p {
            font-size: 14px;
        }

        .copyright a {
            color: white;
            text-decoration: none;
        }

        .copyright a:hover {
            color: #f0a500;
        }

        .floating-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #f0a500; /* Adjust color as needed */
            color: white;
            font-size: 16px;
            padding: 12px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease, transform 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 1000;
        }

        .floating-btn:hover {
            background-color: #d18e00;
            transform: scale(1.1);
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .footer-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .footer-left, .footer-center, .footer-right {
                flex: 0 0 100%;
                padding: 0;
                margin-bottom: 30px;
                text-align: center;
                justify-content: center;
            }
            
            .contact-info {
                align-items: center;
            }
            
            .footer-links {
                grid-template-columns: repeat(2, 1fr);
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .footer-links {
                grid-template-columns: 1fr;
            }
        }
        .back-button {
            position: fixed;
            top: 20px;
            font-family: 'Swiss721', Georgia, serif; /* Apply Swiss 721 */
            right: 20px; /* Moved to top-right */
            padding: 12px 18px;
            background-color: #008307;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 999; /* Ensure it stays on top */
        }

        .back-button:hover {
            background-color: #006200;
            transform:
        }

    </style>
</head>
<body>
    <section>
        <div class="container">
            <!-- Left Side -->
            <div class="left">
                <h2>MSD Godspeed Exhibits Corp.</h2>
                <div class="contact-info">
                    <p>📞 (02) 8 570-8069</p>
                    <p>📱 0915-9785683</p>
                    <p>📍 324 Navy Road Veterans Village, Barangay, Holy Spirit, Diliman, Quezon City, Philippines 1127</p>
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
    
            <!-- Right Side (Form) -->
            <div class="right">
                <!-- Status message container -->
                <div id="status-message"></div>
                
                <form id="contact-form" method="POST">
                    <input type="text" id="name" name="name" placeholder="Your name" required>
                    <input type="email" id="email" name="email" placeholder="Your email" required>
                
                    <!-- Department Selection -->
                    <select id="department" name="department" required>
                        <option value="" disabled selected>(Select Department)</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Admin & Accounting">Admin & Accounting</option>
                        <option value="Operations">Operations</option>
                    </select>
                
                    <textarea id="message" name="message" placeholder="Your message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>                
                
            </div>
        </div>
    </section>

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
            <p>&copy; 2025 MSD Godspeed Exhibits - All Rights Reserved | <a href="terms.php">Terms & Policies</a></p>
        </div>
    </footer>
    
    <a href="contact.php" class="floating-btn">📞 Contact Us</a>
    <button id="backButton" class="back-button">← Back to Main Page</button>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    emailjs.init("N4KnnXr5z0Hxj8y80");

    document.getElementById("contact-form").addEventListener("submit", function (event) {
        event.preventDefault();
        
        // Get form values
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const message = document.getElementById("message").value;
        const department = document.getElementById("department").value;
        
        // Get status message container
        const statusMessage = document.getElementById("status-message");
        
        // Validate inputs
        if (!name || !email || !message || !department) {
            statusMessage.innerHTML = '<div class="alert-error">Please fill all fields</div>';
            return;
        }

        // Create FormData for PHP submission
        const formData = new FormData();
        formData.append("name", name);
        formData.append("email", email);
        formData.append("message", message);
        formData.append("department", department);

        // Show loading message
        statusMessage.innerHTML = '<div class="alert-success">Sending message...</div>';

        // Step 1: Save to Database via PHP
        fetch("php/insert.php", {
            method: "POST",
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            console.log("Database Response:", data);
            
            // Try to parse the response as JSON
            let jsonResponse;
            try {
                jsonResponse = JSON.parse(data);
            } catch (e) {
                // If parsing fails, show the raw response
                statusMessage.innerHTML = '<div class="alert-error">Error processing response.</div>';
                console.error("Failed to parse response:", data);
                return;
            }
            
            // Check database operation status
            if (jsonResponse.status !== "success") {
                statusMessage.innerHTML = '<div class="alert-error">' + jsonResponse.message + '</div>';
                return;
            }
            
            // Assign recipient email based on department selection
            let recipientEmail;
            if (department === "Sales & Marketing") {
                recipientEmail = "msd.winlove@gmail.com";
            } else if (department === "Admin & Accounting") {
                recipientEmail = "msdgodspeed.finance@gmail.com";
            } else if (department === "Operations") {
                recipientEmail = "mcj.msd@gmail.com";
            }
            
            // Step 2: Send Email via EmailJS
            emailjs.send("service_ci53h1f", "template_oaswiav", {
                to_email: recipientEmail,
                from_name: name,
                from_email: email,
                message: message,
                department: department
            }).then(
                function (response) {
                    console.log("Email Sent:", response);
                    statusMessage.innerHTML = '<div class="alert-success">Message sent successfully!</div>';
                    
                    // Reset form
                    document.getElementById("contact-form").reset();
                },
                function (error) {
                    console.log("EmailJS Error:", error);
                    statusMessage.innerHTML = '<div class="alert-error">Email delivery failed, but your message was saved.</div>';
                }
            );
        })
        .catch(error => {
            console.error("Database Error:", error);
            statusMessage.innerHTML = '<div class="alert-error">Failed to save message. Please try again.</div>';
        });
    });
});
        
document.getElementById("backButton").addEventListener("click", function () {
    window.location.href = "index.php";
});
</script>        

</body>
</html>