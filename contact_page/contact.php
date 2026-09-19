<!DOCTYPE html>
<html lang="eng">
<head>
    <meta http-equiv="Content-Type"="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats of Circuit Makati</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link rel="icon" href="../header_component/cocm_logo-main.png" type="image/png" />

    <link rel="stylesheet" href="../header_component/header_style.css">
    <link rel="stylesheet" href="contactpage_style.css">

</head>
<header id="main-header">
    <div id="Title-div">
        <div id="header" >
            <a href="/CoCM/index.php">
                <img src="../header_component/cocm_logo-main3.png"  width="80" height="70" alt="logo">
            </a>
        </div>    
        <ul class="nav-links">
            <li>
                <a href="../about_page/about.php">About Us</a>
                <ul class="dropdown">
                    <li><a href="#team">Meet the Team</a></li>
                    <li><a href="../about_page/mission&work.php">Mission & Work</a></li>
                    
                </ul>
            </li>
            
            <li><a href="../cats_page/catspage.php">Cats</a></li>
            <li><a>Services</a>
                <ul class="dropdown">
                    <li><a href="../volunteer_page/volunteer_page.php">Be a Volunteer!</a></li>
                </ul>
            </li>
            <li><a href="../contact_page/contact.php">Contact Us</a></li>
            <li><a>Support Us</a>
                <ul class="dropdown">
                    <li><a href="../donation_page/donationpage.php">Want to donate?</a></li>
                </ul>
            </li>
        </ul>
        
    </div>
    <div id="login-div">
        <a href="../login_page/login.php">
            <img src="../header_component/login_icon.png" width="30" height="30" alt="Login">
        </a>
    </div>
</header>
<script>

let lastScrollTop = 0;
let scrollTimeout;

window.addEventListener('scroll', function() {
    const header = document.getElementById('main-header');
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scrolling down
        header.classList.remove('returned');
        header.classList.add('scrolled');
    } else {
        // Scrolling up
        header.classList.remove('scrolled');
        header.classList.add('returned');
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling

    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => {
        if (currentScroll > lastScrollTop) {
            header.classList.remove('returned');
            header.classList.add('scrolled');
        }
    }, 200); // Adjust the delay as needed
});

</script>
<body>
<section>
    <div id="main_title">
        <div>Inquiries</div>
    </div>
    <hr class="divider"> 
</section>
<main>
    <div class="form-container">
        <form method="post" action="send_email.php">
                <div class="name-input-group">
                    <label class="name-label">Name</label>
                    <input class="name-input" type="text" name="FName" placeholder="Full Name">
                </div>
				<div class="account-info-group">
					<label class="account-label">Email Address *</label>
					<input class="account-input" type="text" name="Email" placeholder="juandelacruz@gmail.com">
                    <label class="contact-label">Contacts</label>
					<input class="contact-input" type="text" name="ContactNumber" placeholder="Contact Number">
				<br>
                <label class="contact-label">Questions/Concerns</label>
                <textarea name="com" rows="10" cols="125"></textarea>
        <div class="socialicon-container">
            <h4>You can also contact us in:</h4>
            <a href="https://www.facebook.com/thecatsofcircuitmakati/" target="_blank">
                <img src="../images_component/facebook.png" width="30" height="30" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/thecatsofcircuitmakati/" target="_blank">
                <img src="../images_component/instagram.png" width="30" height="30" alt="Instagram">
            </a>
        </div>
            <br>
            <div class="button-container">
                <input class="button" type="submit" value="SUBMIT">
				<input class="button" type="reset" value="RESET">
                <br>
            </div>
        </form>
        </div>
    </main>
</body>    
<footer>
    <div id="Footer-div" align="center">
        THE CATS OF CIRCUIT MAKATI &copy 2023
    </div>
</footer>
</html>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
    
        var formData = new FormData(this);
    
        fetch('send_email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('message').innerText = data;
        })
        .catch(error => {
            document.getElementById('message').innerText = 'Email sending failed...';
            document.getElementById('message').style.color = 'red';
        });
    });
    </script>

