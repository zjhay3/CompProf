<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MSD Godspeed Exhibits Corp</title>
	<style>


		@font-face{
			font-family: 'Swiss721BlkCnBT';
			src: url('fonts/Swiss721BlkCnBT.woff2') format('woff2'),
				 url('fonts/Swiss721BlkCnBT.woff') format('woff');
			font-weight: normal;
			font-style: normal;
		}
		@import url('https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap');
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			scroll-behavior: smooth;
		}
		html {
			overflow-x: hidden; /* Prevents horizontal scrolling */
			width: 100%; /* Ensures it stays within the viewport */
		}

		.loading-screen {
			position: fixed !important;
			top: 0;
			left: 0;
			width: 100vw;
			height: 100vh;
			background: rgba(38, 105, 60, 0.85) !important; /* Semi-transparent background */
			display: flex !important;
			align-items: center;
			justify-content: center;
			z-index: 9999 !important;
			opacity: 1 !important;
			transition: opacity 0.5s ease-out;
		}

		/* Circular Wrapper for the Video */
		.loading-logo-wrapper {
			width: 450px;
			height: 450px;
			display: block;
			position: relative;
			overflow: hidden; /* Keep content inside the circle */
			border-radius: 50%; /* Makes the wrapper circular */
		}

		/* Video Inside the Circle */
		.loading-video {
			width: 450px;
			height: 450px;
			object-fit: cover; /* Ensures video fits the circle */
			z-index: 9999;
		}

		/* Fade-Out Effect for Smooth Transition */
		.loading-screen.hide {
			opacity: 0 !important;
			visibility: hidden !important;
			display: none !important;
			transition: opacity 3.5s ease-out;
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
		}

		.floating-btn:hover {
			background-color: #d18e00;
			transform: scale(1.1);
		}


		/*  Parallax Effect */
		.parallax {
			position: relative;
			overflow: hidden;
			width: 100%; /* Use 100% instead of 100vw to avoid potential scrollbar issues */
			margin: 0;
			padding: 0;
		}

		/* Background with blur */
		.parallax-bg {
			position: absolute;
			top: -375px; /* Negative value to extend beyond top */
			left: -20px; /* Negative value to extend beyond left */
			width: calc(100% + 40px); /* Extend beyond right edge */
			height: calc(90% + 1050px); /* Extend beyond bottom edge */
			background-size: cover; /* This is enough, remove the duplicate background-size in the url */
			filter: blur(1px);
			z-index: 0;
			will-change: transform;
			transform: translateY(0);
			opacity: 1 !important;
			display: block !important;
		}
		.parallax-content {
			position: relative;
			z-index: 2; /* Higher value to bring "Our Products" in front */
			text-align: center;
			padding-top: 100px;
		}

		.parallax-bg::after {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.5); /* Darker overlay */
			z-index: 0;
		}
		
		#services .parallax-bg {
			background: url("images/parallax-image.jpg")center center;
		}

		#gallery .parallax-bg {
			background: url("images/parallax.jpg")center center;
		}

		/* Content container */
		.content {
			position: relative;
			z-index: 1;
			background-color: rgba(0, 45, 2, 0.8);
			padding: 40px;
			border-radius: 8px;
			width: 100%;
			max-width: 1200px;
			margin: 0 auto;
			box-sizing: border-box;
		}

		@media (max-width: 768px) {
			.parallax-bg {
				/* Disable parallax on mobile */
				transform: none !important;
			}
		}

		/* =============================================
   		3. Fade-in Scroll Animations
   		============================================= */
   		.fade-in {
    		opacity: 0;
    		transform: translateY(30px);
    		transition: opacity 1s ease-out, transform 1s ease-out;
		}

		.fade-in.show {
    		opacity: 1;
    		transform: translateY(0);
		}

		/* =============================================
   		4. Section Gradient Transitions
   		============================================= */
		.section-transition {
    		background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(0, 0, 0, 0.8));
    		height: 50px;
		}

		/* =============================================
   		5. Hover Effects on Interactive Elements
   		============================================= */
		.button:hover {
    		transform: scale(1.1);
    		transition: transform 0.3s ease-in-out;
		}

		.image:hover {
    		filter: brightness(1.2);
    		transition: filter 0.3s ease-in-out;
		}


		body {
			font-family: 'Swiss721', Georgia, serif; /* Apply Swiss 721 */
			font-weight: bold;
			line-height: 1.6;
		}

		#home {
			height: 100vh;
			width: 100%;
			overflow: hidden;
			position: relative;
			/*background-image: url("images/backgroundHome.jpg");*/
		}
		@keyframes typing {
			from { width: 0; }
			to { width: 100% }
		}
		.hero-text {
			position: absolute;
			top: 0; /* Pushes the text to the top of the section */
			left: 50%;
			transform: translateX(-50%);
			text-align: center;
			font-size: 50px;
			color: white;
			overflow: hidden;
			white-space: nowrap;
			display: inline-block;
			width: 0;
			animation: typing 4s steps(40, end) forwards;
		}

		.carousel-container {
			display: flex;
			align-items: center; /* Vertically centers the carousel */
			justify-content: center; /* Horizontally centers the carousel */
			height: 120%; /* Full viewport height */
			overflow: hidden;
		}

		.carousel-slide {
			display: flex;
			transition: transform 0.8s ease-in-out;
			width: 100%; /* Ensure the container only holds one image at a time */
			align-items: center; /* Centers vertically */
		}

		.carousel-slide img {
			width: 100vw; /* Ensure each image takes full screen width */
			height: 100vh; /* Make it full height */
			object-fit: contain; /* Ensure it covers the container */
			flex-shrink: 0;
			transform: translateX(-1.5%); /* Moves image slightly to the left */
			box-shadow: 0px 20px 60px rgba(0, 0, 0, 0.5); /* Keeps shadow tight around the image */
		}
		/*  Responsive Adjustments */
		@media (max-width: 1024px) { 
			.carousel-slide img {
				max-width: 100vw;
				max-height: 100vh;
			}
		}

		@media (max-width: 768px) { 
			.carousel-slide img {
				max-width: 100vw;
				max-height: 100vh;
			}
		}
		
		.carousel-buttons {
			position: absolute;
			top: 50%;
			width: 100%;
			display: flex;
			justify-content: space-between;
			transform: translateY(-50%);
			padding: 0 20px;
		}
		.carousel-buttons button {
			background-color: rgba(0, 0, 0, 0.5);
			border: none;
			color: white;
			padding: 10px;
			cursor: pointer;
			border-radius: 50%;
			transition: background-color 0.3s;
		}
		.carousel-buttons button:hover {
			background-color: rgba(0, 0, 0, 0.8);
		}
		.carousel-dots {
			position: absolute;
			bottom: 40px;
			left: 50%;
			transform: translateX(-50%);
			display: flex;
			gap: 10px;
		}
		.dot {
			width: 20px;
			height: 20px;
			border-radius: 50%;
			background-color: rgba(255, 255, 255, 0.5);
			cursor: pointer;
			transition: background-color 0.3s;
		}
		.dot.active {
			background-color: rgba(255, 255, 255, 1);
		}
		.carousel-dots .dot {
			width: 12px;
			height: 12px;
			border-radius: 50%;
			background-color: rgba(255, 255, 255, 0.5);
			cursor: pointer;
			transition: background-color 0.3s;
		}
		.carousel-dots .dot.active {
			background-color: rgba(255, 255, 255, 1);
		}
		#about {
			color: white;
			background-color: #002d02;
			padding: 100px 20px;
			min-height: 100vh;
			text-align: center;
		}
		.image-grid {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 200px 250px 250px;
			gap: 20px;
			margin-top: 40px;
			grid-template-areas:
				"img1 img2 img3"
				"img4 img2 img5"
				"img4 img6 img5";
		}
		.image-container:nth-child(1) { grid-area: img1; }
		.image-container:nth-child(2) { grid-area: img2; }
		.image-container:nth-child(3) { grid-area: img3; }
		.image-container:nth-child(4) { grid-area: img4; }
		.image-container:nth-child(5) { grid-area: img5; }
		.image-container:nth-child(6) { grid-area: img6; }

		.image-container {
			position: relative;
			overflow: hidden;
			border-radius: 15px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
			cursor: pointer;
			transition: transform 0.3s ease;
		}
		.image-container:hover {
			transform: scale(1.05);
			box-shadow: none !important;
		}
		.image-container img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			opacity: 0.9;
			transition: opacity 0.3s ease;
		}
		.image-container:hover img {
			opacity: 1.5;
		}
		.image-container::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(145deg, rgba(0, 45, 2, 0.8), rgba(0, 100, 0, 0.6));
			opacity: 0;
			transition: opacity 0.3s ease;
		}
		.image-container:hover::before {
			opacity: 1;
		}
		.image-container .overlay-text {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color: white;
			font-size: 24px;
			opacity: 0;
			transition: opacity 0.3s ease;
			text-align: center;
			pointer-events: auto;
		}
		.image-container:hover .overlay-text {
			opacity: 1;
		}


		header{
			background: rgba(226, 226, 226, 0.8);
			background-color: rgba(226, 226, 226, 0.6); /* Transparent background */
			backdrop-filter: blur(100px);
			transition: background-color 0.3s ease;
			color: black;
			padding: 10px 0;
			position: sticky;
			top: 0;
			z-index: 1000;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.logo a img {
			width: 350px;
			height: 50px;
			object-fit: contain;
			cursor: pointer;
			transition: transform 0.3s ease-in-out;
		}
		.logo a img:active {
			transform: scale(0.95);
		}
		/* Default styles for navigation */
		.nav {
			display: flex;
			align-items: center;
		}
		.nav-menu {
			list-style: none;
			display: flex;
			gap: 0;
		}
		.nav-menu li a {
			text-decoration: none;
			color: black;
			font-size: 18px;
			padding: 10px;
			display: inline-block;
		}
		/* Hamburger Menu ( Hidden by default ) */
		.hamburger {
			display: none;
			cursor: pointer;
			flex-direction: column;
			gap: 5px;
		}
		.bar {
			width: 30px;
			height: 4px;
			background: black;
			transition: 0.3s;
		}
		/* Responsive Adjustments */
		@media (max-width: 768px ) {
			.hamburger {
				display: flex;
			}
			.nav-menu {
				display: none;
				flex-direction: column;
				position: absolute;
				top: 60px;
				left: 0;
				width: 100%;
				background: white;
				box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
				text-align: center;
				padding: 20px 0;
			}
			.nav-menu.active {
				display: flex;
			}
		}
		/* Responsive Grid Adjustments */
		@media (max-width: 768px) {
			.image-grid, .services-grid {
				display: flex;
				flex-direction: column;
				gap: 20px;
			}
		}

		nav ul{
			list-style: none;
			display: flex;
			gap: 1px;
		}
		nav ul li {
			position: relative;
		}
		nav ul li a {
			transition: color 0.3s ease, transform 0.3s ease;
		}
		nav ul li{
			margin: 0 15px;
		}
		nav ul a{
			color: black;
			text-decoration: none;
			font-size: 18px;
			transition: color 0.3s transform 0.3s;
			display: inline-block;
		}
		nav ul li a{
			color: #003303;
			text-decoration: none;
			font-size: 19px;
			padding: 10px;
			display: inline-block;
			transition: color 0.3s, transform 0.3;
		}
		nav ul li a:hover{
			color: #f0a500;
			transform: translateY(-1px);
		}
		#home h2 {
			font-size: 48px;
			margin-bottom: 15px;
			text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
		}

		#home p { 
			font-size: 24px;
			max-width: 800px;
			text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
		}
		nav ul li:hover ul{
			display: block;
			animation: fadeIn 0.3s ease-in-out;
		}
		@keyframes fadeIn{
			from{
				opacity: 0;
				transform: translateY(-10px);
			}
			to{
				opacity: 1;
				transform: translateY(0);
			}
		}
		nav ul li ul {
			display: none;
			position: absolute;
			top: 40px;
			left: 0;
			min-width: 150px;
			background: transparent;
			background-color: rgba(226, 226, 226, 1); /* Transparent background */
			backdrop-filter: blur(5px); /* Adds blur effect */
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
			list-style: none;
			padding: 10px 0;
			z-index: 1000;
			transition: opacity 0.3s ease, transform 0.3s ease;
		}

		nav ul li ul li a{
			padding: 10px 20px;
			width: 150px;
			text-align: left;
		}
		section{
			padding: 100px 20px;
			min-height: 100vh;
			text-align: center;
			background-color: rgb(0, 73, 33);
			color: white;
		}
		/*#testimonials,*/
		#gallery,
		#timeline
		/*#team*/ {
			background-color: #011d02;/*background-color: rgba(0, 45, 2, 0.8); /* Slightly transparent */
			color: white;
			padding: 100px 20px;
			min-height: 100vh;
			text-align: center;
		}
		#gallery h2, #gallery p {
			position: relative;
			z-index: 11;
		}

		.gallery-wrapper {
			display: flex;
			flex-direction: column;
			align-items: center;
			max-width: 1200px;
			margin: 0 auto;
		}

		.gallery-row {
			display: flex;
			justify-content: center;
			width: 100%;
			margin-bottom: 20px;
		}

		.gallery-container {
			position: relative;
			width: 45%;
			margin: 0 10px;
			overflow: hidden;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s ease;
		}

		.gallery-container:hover {
			transform: scale(1.03);
		}

		.gallery-container img {
			width: 100%;
			height: 375px;
			object-fit: cover;
			display: block;
			transition: transform 0.4s ease;
		}

		.gallery-container:hover img {
			transform: scale(1.1);
		}

		.overlay-text {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: rgba(0, 0, 0, 0.6);
			color: white;
			font-size: 1.5rem;
			font-weight: bold;
			text-align: center;
			opacity: 0;
			transition: opacity 0.3s ease;
			padding: 0;
		}

		.gallery-container:hover .overlay-text {
			opacity: 1;
		}

		@media (max-width: 768px) {
			.gallery-row {
				flex-direction: column;
				align-items: center;
			}

			.gallery-container {
				width: 90%;
				margin-bottom: 20px;
			}
		}
		
		#home{
			color: white;
			background-color: #003303;
		}
		#about{
			color: white;
			background-color: #002d02;/*background-color: rgba(0, 45, 2, 0.8); Slightly transparent */
		}
		/* Services Section with Parallax */
		#services {
			position: relative;
			color: white;
			min-height: 400px;
			padding: 50px 0;
			overflow: hidden;
		}

		[data-aos] {
			opacity: 0;
			transition: opacity 0.6s ease-in-out, transform 0.6s ease-in-out;
		}

		[data-aos] img {
			width: 200%; /* Adjust this value */
			max-width: 600px; /* Set a max limit */
			height: auto;
		}


		[data-aos].aos-animate {
			opacity: 1 !important;
		}

		[data-aos].fade-out {
			opacity: 0 !important;
		}

		.services-grid {
			display: flex;
			flex-direction: column;
			gap: 40px;
			padding: 20px;
		}
		.service-row {
			display: flex;
			align-items: center;
			gap: 20px;
		}
		.service-image {
			flex: 1;
		}
		.service-image img{
			width: 100%;
			height: auto;
			border-radius: 8px;
		}
		.service-text {
			flex: 1;
			background-color: #004d04;
			color: white;
			padding: 20px;
			border-radius: 8px;
			text-align: left;
		}

		.number-circle {
    	width: 40px;
    	height: 40px;
    	border-radius: 50%;
    	background-color: #f0a500;
    	color: white;
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	font-size: 18px;
    	font-weight: bold;
    	margin-right: 10px;
		}
		.service-item {
    	display: flex;
    	align-items: center;
		}

		#contact {
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 0;
			min-height: 100vh;
			color: white;
			/*background-image: url("images/parallax-image.png");*/
			background-color: #001e01; /*background-color: rgba(0, 45, 2, 0.8);*/ /* Slightly transparent */
		}

		.contact-container {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: stretch;
			width: 100%;
		}
		.contact-top, .contact-bottom {
			width: 100%;
		}
		.contact-top img {
			width: 100%;
			height: auto;
		}
		.contact-locations {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			gap: 20px;
			width: 100%;
			max-width: 2000px;
			margin: 20px auto;
			text-align: left;
		}
		.contact-bottom {
			width: 100%;
			max-width: 1200px;
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		.contact-details {
			text-align: center;
			width: 100%;
			margin-top: 40px;
		}

		.location {
			background: #001e01;
			padding: 15px;
			border-radius: 8px;
			box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
		}
		.location h4 {
			margin-bottom: 5px;
			font-size: 18px;
		}
		.location img {
			width: 100%;
			border-radius: 8px;
			transition: transform 0.3s ease-in-out;
		}

		.location img:hover {
			transform: scale(1.8);
			box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
		}
		.location-image-container {
			position: relative;
			width: 100%;
		}
		.hover-info {
			position: absolute;
			right: 10px;
			top: 50%;
			transform: translateY(-50%);
			background: rgba(0, 0, 0, 0.7);
			color: white;
			padding: 5px 10px;
			border-radius: 5px;
			opacity: 0;
			transition: opacity;
			z-index: 1000;
		}
		.location-image-container.hover .hover-info {
			opacity: 1;
		}

		@media (max-width: 768px) {
			.location img:hover {
				transform: none;
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
			font-size: 14px;
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
				/*.faq {
			margin-top: 10px;
		}
		.faq-question {
			width: 100%;
			padding: 10px;
			background: #ffffff;
			color: black;
			border: none;
			text-align: left;
			cursor: pointer;
			font-size: 16px;
		}
		.faq-answer {
			display: none;
			padding: 10px;
			background: black;
			border-left: 3px solid #ffffff;
			transition: all 0.3s ease-in-out;
		}

		.faq-question:focus + .faq-answer,
		.faq-question:hover + .faq-answer {
			display: block;
		}*/

		/*.download-btn {
			padding: 10px 20px;
			background-color: #f0a500;
			color: white;
			border: none;
			cursor: pointer;
			font-size: 18px;
			border-radius: 5px;
			transition: background-color 0.3s ease;
		}
		.download-btn:hover {
			background-color: #d48f00; 
		}*/
		@media (max-width: 600px){
			header{
				flex-direction: column;
				align-items: center;
			}
			nav ul{
				flex-direction: column;
				gap: 20px;
			}
			.logo a img{
				width: 300px;
				height: auto;
			}
		}
		@media (max-width: 768px) {
			.image-grid {
			grid-template-columns: 1fr;
			grid-template-rows: repeat(6, 200px);
			grid-template-areas: none;
			}
		}

	</style>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
			<!-- Swiper.js Styles -->
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
</head>	
<body>
	<div class="loading-screen">
		<img src="images/pagereload.gif" alt="Loading..." class="loading-video" />
	</div>
	
	
	
	<!--<div class="background-wrapper"></div>--> <!-- Add this here -->
	<!-- <div class="headers-container"> -->
		<header>
			<div class="logo">
				<a href="#home">
					<img src="images/img.png" alt="Company Logo" width="450" height="600"></a>
			</div>
			<nav>
				<div class="hamburger" id="hamburger">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
				<ul class="nav-menu" id="nav-menu">
					<li><a href="#home">Home</a></li>
					<li><a href="index.php#about">About</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="more-product.php" target="_blank">Products</a></li>
					<li><a href="#gallery">Gallery</a></li>
				</ul>
			</nav>
		</header>

	<section id="home">
		<h1 class="hero-text" style="font-size: 50px;">Welcome to MSD Godspeed Exhibits Corp.</h1>

		<div class="carousel-container">
			<div class="carousel-slide" id="carouselSlide"></div>
			<div class="carousel-buttons">
				<button id="prevBtn">←</button>
				<button id="nextBtn">→</button>
			</div>
			<div class="carousel-dots"></div>
		</div>
	</section>
		

	<section id="about">
		<a href="fullview.php?image=about.jpg&text=We%20are%20one%20of%20the%20biggest%20Exhibition%20Booth%20Contractor%20in%20the%20Philippines.%20We%20have%20been%20catering%20Exhibition%2F%20Events%20for%20the%20past%2030%20years%20from%20Basic%20Booth%20System%20to%20Special%20Booth%20Designs.%0A%0A
		MSD%20Godspeed%20Exhibits%20Corporation%20started%20as%20a%20single%20proprietorship%20company%20known%20as%20GODSPEED%20EXHIBITS%20SYSTEMS%20in%20May%201992.%20As%20the%20exhibition%20market%20expanded,%20it%20became%20a%20corporation,%20registered%20and%20approved%20by%20the%20Securities%20and%20Exchange%20Commission%20(SEC)%20on%20July%203,%202007.%0A%0A
		As%20one%20of%20the%20key%20players%20in%20the%20exhibition%20business%20for%20the%20past%2026%20years,%20MSD%20Godspeed%20evolved%20from%20a%20system%20booth%20contractor%20to%20a%20total%20exhibition%20service%20provider,%20serving%20end%20to%20end%20services%20to%20customers.%0A%0A
		With%20its%20long%20years%20of%20involvement%20in%20the%20exhibition%20industry,%20MSD%20Godspeed%20has%20successfully%20accomplished%20a%20number%20of%20quality%20projects%20which%20produced%20a%20vast%20list%20of%20loyal,%20pleased%20and%20satisfied%20customers.%20MSD%20Godspeed%20takes%20pride%20in%20partnering%20with%20its%20customers%20to%20create%20an%20environment%20that%20supports%20their%20business%20objectives%20and%20deliver%20results." 
		style="text-decoration: none; color: inherit;">
		 <h2>About Us</h2>
		 <p>One of the Biggest Exhibition Booth Contractors in the Philippines.</p>
	 </a>
		<div class="image-grid">

			<a class="image-container" href="fullview.php?image=about1.jpg&text=VISION%20%26%20CORE%20VALUES%20STATEMENTS%0AFrom%20MSD%20GODSPEED%20EXHIBITS%20CORPORATION,%20we%20are%20engaged%20in%20the%20following%20scope%20of%20work:%20OUTDOOR%20%26%20INDOOR%20EXHIBIT%20BOOTH%20SERVICES,%20INTERIOR%20RENOVATION,%20AND%20OPERATIONS%20MANAGEMENT.%0AFocus%20on%20achieving%20it,%20MSD%20GODSPEED%20has%20defined%20the%20following%20corporate%20values%20and%20vision.%0A%0AVISION%20STATEMENT%0AThrough%20excellence%20in%20providing%20general%20services,%20MSD%20GODSPEED%20vision%20is%20to%20provide%20the%20best%20and%20professional%20quality%20installation%20of%20booths%20and%20interior%20renovation%20projects,%20supporting%20our%20clients%20in%20better%20performance,%20efficiency,%20and%20cost-effectiveness.">
				<img src="images/about1.jpg" alt="About Image 1">
				<div class="overlay-text"><b>VISION & CORE VALUES STATEMENTS</b></div>
			</a>
			<a class="image-container" href="fullview.php?image=about1.jpg&text=At MSD GODSPEED EXHIBITS CORP, we believe in delivering nothing but the highest quality of work in every project we undertake. From the initial concept design to the final execution, our team of skilled professionals meticulously oversees every detail to ensure precision, craftsmanship, and excellence. We take pride in our commitment to upholding industry standards and best practices, consistently exceeding our clients' expectations and setting new benchmarks for quality in the exhibition industry.">
				<img src="images/about2.jpg" alt="About Image 2">
				<div class="overlay-text"><b>QUALITY OF WORK</b></div>
			</a>
			<a class="image-container" href="fullview.php?image=about3.jpg&text=In today's dynamic and competitive business landscape, we understand the importance of staying ahead of the curve. At MSD GODSPEED EXHIBITS CORP, we proactively monitor market trends, industry developments, and emerging technologies to anticipate and adapt to changes in the competitive landscape. By staying agile and responsive, we position ourselves as leaders in innovation, continuously evolving our strategies and offerings to meet the evolving needs of our clients and stay one step ahead of the competition.">
				<img src="images/about3.jpg" alt="About Image 3">
				<div class="overlay-text"><b>PERCEIVED COMPETITIVE REACTION</b></div>
			</a>
			<a class="image-container" href="fullview.php?image=about4.jpg&text=Our journey at MSD GODSPEED EXHIBITS CORP has been characterized by steady and sustainable organic growth. Through our unwavering dedication to delivering exceptional value and unparalleled service to our clients, we have earned their trust and loyalty, driving organic growth through positive word-of-mouth referrals and repeat business. By fostering long-term partnerships built on mutual respect, integrity, and shared success, we continue to expand our reach and influence in the exhibition industry, organically growing our business while maintaining our commitment to excellence.">
				<img src="images/about4.jpg" alt="About Image 4">
				<div class="overlay-text"><b>ORGANIC GROWTH</b></div>
			</a>
			<a class="image-container" href="fullview.php?image=about5.jpg&text=At MSD GODSPEED EXHIBITS CORP, we are committed to continuous innovation and product extension to meet the evolving needs and preferences of our clients. By staying attuned to market dynamics and customer feedback, we identify new opportunities for expansion and diversification, developing innovative solutions and offerings that add value and enhance the overall customer experience. Whether it's introducing new services, expanding our product lines, or embracing emerging technologies, we are always exploring new horizons and pushing the boundaries of possibility to better serve our clients and drive sustainable growth.">
				<img src="images/about5.jpg" alt="About Image 5">
				<div class="overlay-text"><b>PRODUCT EXTENSION</b></div>
			</a>
			<a class="image-container" href="fullview.php?image=about6.jpg&text=Integrity is the cornerstone of our business philosophy at MSD GODSPEED EXHIBITS CORP. We conduct ourselves with honesty, transparency, and integrity in all our dealings, fostering trust and credibility with our clients, partners, and stakeholders. We believe in fair and ethical business practices, upholding the highest standards of professionalism and integrity in every interaction. By building relationships based on trust, respect, and mutual benefit, we create a positive and conducive environment for collaboration and success, ensuring that every transaction is conducted with integrity and honor.">
				<img src="images/about6.jpg" alt="About Image 6">
				<div class="overlay-text"><b>STRAIGHT & HONORABLE DEALINGS</b></div>
			</a>
		</div>
	</section>

	<section id="services" class="parallax">
		<div class="parallax-bg"></div> <!-- Blurred background with parallax effect -->

		<div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
			<h2>Our Services</h2>
			<div class="services-grid">
				
				<!-- First Service Row -->
				<div class="service-row" data-aos="fade-up-right" data-aos-delay="300">
					<div class="service-image">
						<img src="images/service1.jpg" alt="Service 1">
					</div>
					<div class="service-text">
						<div class="service-item">
							<div class="number-circle">1</div>
							<h3><b>Booth Contractor for Exhibitions & Events</b></h3>
						</div>
						<p>Expert booth construction for exhibitions and events, tailored to your brand's vision and requirements.</p>
	
						<div class="service-item">
							<div class="number-circle">2</div>
							<h3><b>Project Management</b></h3>
						</div>
						<p>Comprehensive project management solutions to streamline processes, ensure timely delivery, and exceed expectations.</p>
	
						<div class="service-item">
							<div class="number-circle">3</div>
							<h3><b>Branding + Creative Design</b></h3>
						</div>
						<p>Elevate your brand with our creative design services, crafting compelling visual identities and engaging brand experiences.</p>
					</div>
				</div>
	
				<!-- Second Service Row -->
				<div class="service-row" data-aos="fade-up-left" data-aos-delay="300">
					<div class="service-text">
						<div class="service-item">
							<div class="number-circle">4</div>
							<h3><b>Operations</b></h3>
						</div>
						<p>Efficient operations management to optimize resources, streamline workflows, and maximize productivity.</p>
	
						<div class="service-item">
							<div class="number-circle">5</div>
							<h3><b>Installation & Dismantling</b></h3>
						</div>
						<p>Professional installation and dismantling services for seamless setup and teardown of your exhibits and events.</p>
	
						<div class="service-item">
							<div class="number-circle">6</div>
							<h3><b>Logistics & Management</b></h3>
						</div>
						<p>End-to-end logistics management to coordinate transportation, shipping, and delivery for your exhibits and events.</p>
					</div>
					<div class="service-image">
						<img src="images/service2.jpg" alt="Service 2">
					</div>
				</div>
	
				<!-- Third Service Row -->
				<div class="service-row" data-aos="fade-up-right" data-aos-delay="300">
					<div class="service-image">
						<img src="images/service3.jpg" alt="Service 3">
					</div>
					<div class="service-text">
						<div class="service-item">
							<div class="number-circle">7</div>
							<h3><b>Signage & Visual Identity</b></h3>
						</div>
						<p>Eye-catching signage and visual identity solutions to enhance your brand presence and captivate your audience.</p>
	
						<div class="service-item">
							<div class="number-circle">8</div>
							<h3><b>Furniture & Fixtures Rental</b></h3>
						</div>
						<p>Flexible furniture and fixtures rental options to enhance the functionality and aesthetics of your space.</p>
	
						<div class="service-item">
							<div class="number-circle">9</div>
							<h3><b>Electrical & Audio Rental</b></h3>
						</div>
						<p>State-of-the-art electrical and audio-visual equipment rental for immersive and interactive experiences.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	


	<section id="gallery" class="parallax">
		<div class="parallax-bg"></div> <!-- Blurred background with parallax effect -->

		<h2>Gallery</h2>
		<p>Explore our portfolio of past projects.</p>
		<div class="gallery-wrapper">
			<div class="gallery-row row-1">
				<a class="gallery-container collateral" href="photo-gallery.php" target="_blank">
					<!-- Image will be inserted by JavaScript -->
					<div class="overlay-text">Collateral</div>
				</a>
				<a class="gallery-container special" href="photo-gallery.php" target="_blank">
					<!-- Image will be inserted by JavaScript -->
					<div class="overlay-text">Special</div>
				</a>
			</div>
			<div class="gallery-row row-2">
				<a class="gallery-container standard" href="photo-gallery.php" target="_blank">
					<!-- Image will be inserted by JavaScript -->
					<div class="overlay-text">Standard</div>
				</a>
				<a class="gallery-container upgraded" href="photo-gallery.php" target="_blank">
					<!-- Image will be inserted by JavaScript -->
					<div class="overlay-text">Upgraded</div>
				</a>
			</div>
		</div>
	</section>

	<section id="contact"> <!--class="parallax"-->
    <div class="contact-container">
        <div class="contact-image">
            <img src="images/contact.png" alt="Contact Image">
        </div>
        <div class="contact-bottom">    
            <div class="contact-locations">
                <div class="location">
                    <h4>Head Office</h4>
                    <a href="https://maps.app.goo.gl/GQJoP1aYDHUgPhux8" target="_blank">
    <img src="images/head-office-map.jpg" alt="Head Office Map" width="100%" height="300px" style="border-radius: 10px;"></a>
                </div>

                <div class="location">
                    <h4>Production/Warehouse Plant</h4>
                    <a href="https://maps.app.goo.gl/ntNrevxVrpNNQAy7A" target="_blank">
    <img src="images/warehouse-map.jpg" alt="Warehouse Map" width="100%" height="300px" style="border-radius: 10px;"></a>
                </div>
            </div>
            <!--<div class="contact-bottom">
            <h2>Contact</h2>

              Move .contact-details OUTSIDE .contact-locations 
            <div class="contact-details">
                <p>Get in touch with us for inquiries and partnerships.</p>
                <p>Email: contact@msdgodspeed.com</p>
                <p>Contact: #8-722-6940</p>
            </div>-->

            <!--  Move nav OUTSIDE .contact-locations -->
            <!-- <nav style="margin-top: 50px;">
                <a href="#home" style="margin-right: 15px; text-decoration: none; color: #f5f5f5;">Home</a>
                <a href="#about" style="margin-right: 15px; text-decoration: none; color: #f5f5f5;">About</a>
                <a href="#gallery" style="margin-right: 15px; text-decoration: none; color: #f5f5f5;">Gallery</a>
                <a href="#services" style="text-decoration: none; color: #f5f5f5;">Services</a>
            </nav> 
        </div>-->
    </div>
	</section>

		<!-- Footer -->
		<footer class="footer">
			<div class="footer-container">
				<!-- Footer Left - Logo -->
				<div class="footer-left">
					<a href="#home">
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
						<li><a href="photo-gallery.php" target="_blank">Galleries</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="docs/company-profile.pdf" download>Catalogue Download</a></li>
						<li><a href="docs/pricelist.pdf" download>Price Lists</a></li>
						<li><a href="#about">About Us</a></li>
						<li><a href="more-product.php" target="_blank">Products</a></li>
						<li><a href="#services">Services</a></li>
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

	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

	<script>

		window.addEventListener("load", () => {
			const loadingScreen = document.querySelector(".loading-screen");

			// Hide the loading screen after 1.5 seconds (adjust time if needed)
			setTimeout(() => {
				loadingScreen.classList.add("hide"); // Hide after 1.5 seconds
			}, 1500); // 1500ms = 1.5 seconds
		});



		/* JAVASCRIPT FOR HAMBURGER MENU*/
		document.addEventListener("DOMContentLoaded", function () {
			console.log(" DOM Loaded - Initializing Hamburger Menu");

			const hamburger = document.getElementById("hamburger");
			const navMenu = document.getElementById("nav-menu");

			if (hamburger && navMenu) {
				hamburger.addEventListener("click", function () {
					navMenu.classList.toggle("active");
				});
			} else {
				console.error("ERROR: Hamburger menu or nav-menu not found!");
			}
		});


		document.addEventListener("DOMContentLoaded", () => {
			const slide = document.querySelector(".carousel-slide");
			const prevBtn = document.querySelector("#prevBtn");
			const nextBtn = document.querySelector("#nextBtn");
			const dotsContainer = document.querySelector(".carousel-dots");

			const imageCount = 11; // Total images
			let index = 0; // Start from first actual image
			let autoSlideInterval;

			//  Load images dynamically
			slide.innerHTML = Array.from({ length: imageCount }, (_, i) => 
				`<img src="images/home${i + 1}.png" alt="Slide ${i + 1}">`
			).join('');

			let images = document.querySelectorAll(".carousel-slide img");

			//  Ensure correct positioning of slides
			const getImageWidth = () => window.innerWidth; // Dynamically get screen width

			const updateSlidePosition = () => {
				slide.style.transition = "none"; // Remove transition on resize
				slide.style.transform = `translateX(${-getImageWidth() * index}px)`;
			};

			slide.style.transform = `translateX(${-getImageWidth() * index}px)`;

			//  Create navigation dots
			images.forEach((_, i) => {
				const dot = document.createElement("div");
				dot.classList.add("dot");
				if (i === 0) dot.classList.add("active");
				dot.addEventListener("click", () => moveToSlide(i, true));
				dotsContainer.appendChild(dot);
			});

			const updateDots = () => {
				dotsContainer.querySelectorAll(".dot").forEach((dot, i) => {
					dot.classList.toggle("active", i === index);
				});
			};

			const updateButtons = () => {
				prevBtn.disabled = index === 0; // Disable "Prev" at first image
				nextBtn.disabled = index === imageCount - 1; // Disable "Next" at last image
			};

			const moveToSlide = (i, manual = false) => {
				if (manual) resetAutoSlide();
				index = i;
				slide.style.transition = "transform 0.8s ease-in-out";
				slide.style.transform = `translateX(${-getImageWidth() * index}px)`;
				updateDots();
				updateButtons();
			};

			const nextSlide = () => {
				index++;
				slide.style.transition = "transform 0.8s ease-in-out";
				slide.style.transform = `translateX(${-window.innerWidth * index}px)`;
				updateDots();
				updateButtons();

				//  Reset index after the last slide for smooth looping
				setTimeout(() => {
					if (index >= imageCount) {
						slide.style.transition = "none"; // Remove animation for instant reset
						index = 0; // Move back to the first image
						slide.style.transform = `translateX(0)`; // Keep moving right
					}
				}, 800); // Match transition duration
			};

			const prevSlide = () => {
				if (index > 0) { // Stop at first image
					index--;
					slide.style.transition = "transform 0.8s ease-in-out";
					slide.style.transform = `translateX(${-getImageWidth() * index}px)`;
					updateDots();
					updateButtons();
				}
			};

			const startAutoSlide = () => {
				autoSlideInterval = setInterval(nextSlide, 3000);
			};

			const resetAutoSlide = () => {
				clearInterval(autoSlideInterval);
				startAutoSlide();
			};

			window.addEventListener("resize", updateSlidePosition);
			nextBtn.addEventListener("click", () => {
				nextSlide();
				resetAutoSlide();
			});
			prevBtn.addEventListener("click", () => {
				prevSlide();
				resetAutoSlide();
			});

			startAutoSlide();
			updateButtons(); // Ensure correct button states on load
		});


		/* =============================================
   		6. JavaScript for Scroll-Triggered Animations
   		============================================= */
		   document.addEventListener("DOMContentLoaded", function () {
        		const fadeElements = document.querySelectorAll(".fade-in");

        		const observer = new IntersectionObserver(entries => {
            		entries.forEach(entry => {
                		if (entry.isIntersecting) {
                    		entry.target.classList.add("show");
                		}
            		});
        		}, { threshold: 0.1 });

        		fadeElements.forEach(element => observer.observe(element));
    		});


			function updateParallax() {
				const parallaxSections = document.querySelectorAll('.parallax');

				parallaxSections.forEach(section => {
					const parallaxBg = section.querySelector('.parallax-bg');
					if (!parallaxBg) return;

					const rect = section.getBoundingClientRect();
					
					// Adjust scroll speed (higher negative = moves up faster)
					let speedMultiplier = 0.2; 

					if (rect.top < window.innerHeight && rect.bottom > 0) {
						let parallaxAmount = rect.top * speedMultiplier;
						parallaxBg.style.transform = `translateY(${parallaxAmount}px)`; // Moves upward
					}
				});
			}

			//  Attach the function to events
			window.addEventListener("scroll", () => requestAnimationFrame(updateParallax));
			window.addEventListener("resize", updateParallax);
			window.addEventListener("load", updateParallax);



		// Set default section to 'home' on reload
		window.onload = () => {
			window.scrollTo(0, 0);
			document.querySelector('nav a[href="#home"]').classList.add('active');
		};
		// Highlight active section link on scroll
		window.addEventListener('scroll', () => {
			const sections = document.querySelectorAll('section');
			const navLinks = document.querySelectorAll('nav ul li a');

			sections.forEach((section, index)=> {
				const rect = section.getBoundingClientRect();
				if (rect.top <= 100 && rect.bottom >= 100 ){
					navLinks.forEach(link => link.classList.remove('active'));
					navLinks[index].classList.add('active');
				}
			});
		});

		// Smooth scrolling for older browsers
		document.querySelectorAll('nav a, .logo a').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				const href = this.getAttribute('href');

				// If the link starts with "http" or contains ".html", allow it to open normally
				if (href.startsWith('http') || href.includes('.php')) {
					return; // Do nothing, allow default behavior
				}

				// Prevent default behavior for internal section links
				e.preventDefault();
				const target = document.querySelector(href);
				if (target) {
					target.scrollIntoView({
						behavior: 'smooth'
					});
				} else {
					window.scrollTo({
						top: 0,
						behavior: 'smooth'
					});
				}
			}); 
		});


		document.querySelectorAll('.image-grid img').forEach((img) => {
			img.addEventListener('click', () => {
				window.open(img.src, '_blank');
			});
			img.addEventListener('keypress', (e) => {
				if (e.key == 'Enter') { 
					window.open(img.src, '_blank');
				}
			})
		});
		

		document.addEventListener("click", function (event) {
			if (event.target.closest(".gallery-row img")) { // Target images inside gallery rows
				console.log("Image clicked!"); // Debugging
				window.open('photo-gallery.php', '_blank'); // Open in a new tab
			}
		});

		// JavaScript to display random images in the gallery section on page load
		document.addEventListener("DOMContentLoaded", function() {
			// Define image counts for each category (adjust these numbers based on how many images you actually have)
			const imageCounts = {
				"collateral": 968, // Number of image you have in collateral, collateral (1) through collateral (968)
				"special": 165,    // Number of you have special, special (1) through special (165)
				"standard": 125,   // Number of you have standard, standard (1) through standard (125)
				"upgraded": 321    // Number of you have upgraded, upgraded (1) through upgraded (321)
			};
			
			// Function to get a random number between 1 and max
			function getRandomNumber(max) {
				return Math.floor(Math.random() * max) + 1;
			}
			
			// Function to set random image for a gallery container
			function setRandomImage(containerClass, category, maxCount) {
				// Get the container element
				const container = document.querySelector(containerClass);
				if (!container) return;
				
				// Get the image element inside the container
				let img = container.querySelector('img');
				
				// If no image exists, create one
				if (!img) {
					img = document.createElement('img');
					// Find the overlay text element
					const overlayText = container.querySelector('.overlay-text');
					if (overlayText) {
						// Insert before overlay text
						container.insertBefore(img, overlayText);
					} else {
						// Just append to container
						container.appendChild(img);
					}
				}
				
				// Generate random image number
				const randomNum = getRandomNumber(maxCount);
				
				// Set the image source
				img.src = `images/${category}/${category} (${randomNum}).jpg`;
				img.alt = category;
				
				// Add error handling
				img.onerror = function() {
					console.log(`Failed to load: ${img.src}, trying another...`);
					// Try another random image if this one fails to load
					if (maxCount > 1) {
						setRandomImage(containerClass, category, maxCount);
					} else {
						// Fallback to a default image
						this.src = `images/${category}/${category}.jpg`;
					}
				};
			}
			
			// Set random images for each category in the gallery section
			setRandomImage('.gallery-container.collateral', 'collateral', imageCounts.collateral);
			setRandomImage('.gallery-container.special', 'special', imageCounts.special);
			setRandomImage('.gallery-container.standard', 'standard', imageCounts.standard);
			setRandomImage('.gallery-container.upgraded', 'upgraded', imageCounts.upgraded);
		});

		// Initialize AOS properly
		document.addEventListener("DOMContentLoaded", function () {
			console.log("AOS is initializing...");
			AOS.init({
			once: false,  //Allow animation to trigger everytime
			duration: 2000,
			mirror: true, // Ensures animations work when scrolling up
			anchorPlacement: 'top-bottom'
			});
		});

		// Scroll event to force fade-in & fade-out when scrolling
		window.addEventListener("scroll", () => {
			document.querySelectorAll("[data-aos]").forEach((el) => {
				const rect = el.getBoundingClientRect();

				// Fade in when element enters the viewport
				if (rect.top < window.innerHeight && rect.bottom > 0) {
					el.classList.add("aos-animate");
					el.classList.remove("fade-out");
				}
				// Fade out when element leaves the viewport
				else {
					el.classList.remove("aos-animate");
					el.classList.add("fade-out");
				};
				});
			});	

	</script>
</body>
</html>