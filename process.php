<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email address");
        }

        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $message = htmlspecialchars($message);

        session_start();
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["message"] = $message;

    }
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Product Landing Page</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <h1 class="logo">ProductX</h1>
                <div class="menu-toggle">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Welcome to ProductX</h1>
            <p>Our solution for all your problems.</p>
            <a href="#" class="cta-button">Contact Us</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2>Features</h2>
            <div class="feature">
                <img src="./public/img1.jpg" alt="Feature 1">
                <h4>Feature 1</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="feature">
                <img src="./public/img2.jpg" alt="Feature 2">
                <h4>Feature 2</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <h2>Pricing</h2>
            <div class="price-card">
                <h3>Basic Plan</h3>
                <p>Rs 1,000/month</p>
                <ul>
                    <li>Feature 1</li>
                    <li>Feature 2</li>
                </ul>
                <a href="#" class="cta-button">Get Started</a>
            </div>
            <div class="price-card">
                <h3>Premium Plan</h3>
                <p>Rs 3,000/month</p>
                <ul>
                    <li>Feature 1</li>
                    <li>Feature 2</li>
                </ul>
                <a href="#" class="cta-button">Get Started</a>
            </div>
        </div>
    </section>



    <section class="contact" id="contactForm">
        <div class="container">
            <h2>Contact Us</h2>
            <form action="process.php" id="contactForm" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" id="submitBtn" class="cta-button">Send Message</button>
            </form>
            <div id="thankYouMessage" >
                    <p>Thank  you <?php echo" {$name} " ?> for contacting us! We will get back to you shortly.</p>
            
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 ProductX</p>
        </div>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>








