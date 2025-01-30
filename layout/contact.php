<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Pet Adoption Shop</title>
    <link rel="stylesheet" href="./css/contact.css">
</head>
<body>
    <header>
        <h1>Pet Adoption Shop</h1>
        <nav>
            <ul>
                <li><a href="../layout/home.php">Home</a></li>
                <li><a href="../layout/about.php">About Us</a></li>
                
            </ul>
        </nav>
    </header>

    <main>
        <section class="contact-info">
            <h2>Contact Information</h2>
            <p>We'd love to hear from you! Reach out to us for any inquiries or to schedule a visit.</p>
            
            <div class="contact-details">
                <div class="contact-item">
                    <h3>Address</h3>
                    <p>123 Pet Adoption Lane<br>Cityville, CA 12345<br>USA</p>
                </div>
                <div class="contact-item">
                    <h3>Phone</h3>
                    <p>(123) 456-7890</p>
                </div>
                <div class="contact-item">
                    <h3>Email</h3>
                    <p>info@petadoptionshop.com</p>
                </div>
                <div class="contact-item">
                    <h3>Opening Hours</h3>
                    <p>Mon-Fri: 9:00 AM - 6:00 PM<br>Sat-Sun: 10:00 AM - 4:00 PM</p>
                </div>
            </div>
        </section>

        <section class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Pet Adoption Shop. All rights reserved.</p>
    </footer>
</body>
</html>