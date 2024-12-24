<?php
session_start(); // Start the session to access the message
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contact.css">
    <style>
        /* Popup Notification Styles */
        #popup-message {
            display: none; /* Initially hidden */
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #28a745;
            color: white;
            padding: 15px;
            border-radius: 5px;
            font-size: 16px;
            z-index: 9999;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header class="contact-header">
        <h1>Contact Us</h1>
        <p>We're here to help. Reach out to us anytime!</p>
    </header>

    <main class="contact-container">
        <section class="contact-info">
            <h2>Get in Touch</h2>
            <p><strong>Email:</strong> info@dlr-artigianato-e-pelle.shop</p>
            <p><strong>Phone:</strong> +2761 625 9949</p>
            <p><strong>Address:</strong> Ramsgate KZN</p>
        </section>

        <section class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="submit_form.php" method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <!-- Popup message -->
    <div id="popup-message" class="popup-message">
        <?php
        if (isset($_SESSION['popup_message'])) {
            echo $_SESSION['popup_message'];
        }
        ?>
    </div>

    <!-- JavaScript to show the popup -->
    <script>
        <?php if (isset($_SESSION['popup_message'])): ?>
            // Show the popup message
            document.getElementById("popup-message").style.display = "block";

            // Hide the popup after 3 seconds
            setTimeout(function() {
                document.getElementById("popup-message").style.display = "none";
            }, 3000);

            // Clear the session message after it is shown (this prevents it from showing again)
            <?php unset($_SESSION['popup_message']); ?>
        <?php endif; ?>
    </script>

</body>
</html>
