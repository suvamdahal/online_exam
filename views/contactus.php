<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exam System - Contact</title>
    <link rel="stylesheet" href="contactus.css">
    
</head>
<body>
    <header>
        <nav>
            <div class="logo">Online Exam System</div>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="contactus.php">Contact us</a></li>
                <li><a href="../registerfrontend.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="contact-info">
                <p><strong>Email:</strong> onlineexam@124.com</p>
                <p><strong>Phone:</strong> 01-567890</p>
                <p><strong>Address:</strong> putalisadak, kathmandu</p>
            </div>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <footer>
        <p>© 2025 Online Exam System. </p>
    </footer>
</body>
</html>