<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexy Gregory's Website</title>

    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/intro-page.css">
    <link rel="stylesheet" href="../styles/contacts.css">
    <link rel="stylesheet" href="../styles/footer.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="#" class="nav-branding">LEXY GREGORY</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="../lexy_gregory.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="../lexy_gregory_about.html" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="../lexy_gregory_projects.html" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main> 
        <div class="contacts-page">
            <div class="snow-image-box"></div>
            <img class="snow-image" src="../images/whistler.png">
            <div class="thank-you-box">
                <div class="thanks-contact-me">CONTACT ME</div>
                <div class="thank-you">
                    <div class="thank-you-text">
                        Thank you for your message, <br>I look forward to contacting you.
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-section">
            <div class="connect-title">
                LET'S CONNECT
            </div>
            <div class="contacts-grid">
                <div class="contact-phone">
                    <img src="../icons/phone.png" class="icon">
                    <div class="contact-text">(778) 882-1503</div>
                </div>
                <div class="contact-mail">
                    <img class="icon" src="../icons/mail.png">
                    <div class="contact-text">alexysgregory@gmail.com</div>
                </div>
                <button class="contact-linkedin" onclick="goToLinkedIn()">
                    <img class="icon" src="../icons/linkedin.png" alt="LinkedIn Icon">
                    <div class="contact-text">LinkedIn</div>
                </button>
                
                <script>
                    function goToLinkedIn() {
                        window.open("https://www.linkedin.com/in/lexy-gregory", "_blank");
                    }
                </script>
            </div>
        </div>
    </main>
    <script src="../nav.js"></script>
</body>
</html>
