<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a Volunteer today! - Cats of Circuit Makati</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link rel="icon" href="header_component/cocm_logo-main.png" type="image/png" />

    <link rel="stylesheet" href="../header_component/header_style.css">

    <link rel="stylesheet" href="volunterpage_style.css">
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
                    <li><a href="volunteer_page.php">Be a Volunteer!</a></li>
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

<body>
    <section>
        <div id="main_title">
            <div>Welcome New Volunteers!</div>
        </div>
        <hr class="divider">
    </section>
<section>
<div class="container">
        <div class="brochure">
            <iframe src="https://drive.google.com/file/d/1e9crqf4oiIFpsEs9xNJ9tnVLmytl93I5/preview" width="640" height="480" allow="autoplay"></iframe>
            <p class="download-text">Go to this <a href="https://drive.google.com/file/d/1e9crqf4oiIFpsEs9xNJ9tnVLmytl93I5/view" class="link">link</a> to download this brochure!</p>
        </div>
      
        <div class="text-section">
            <h1>Welcome to the community!</h1>
            <p>Thank you for joining the <span class="highlight">Cats of Circuit Makati</span>! We are excited to work with you and we appreciate your support in caring for our beloved feline friends.</p>
            
            <p>As a member, you’ll have the opportunity to participate in feeding sessions, adoption initiatives, medical assistance, and TNR Programs. We also hold community meetups, events, and collaborations with other like-minded groups. Whether you’re here to volunteer, adopt, or simply spread awareness, your contributions make a big difference!</p>

            <p>Stay tuned for updates on upcoming events, important announcements, and ways to get involved. If you have any questions or ideas, feel free to message us on any of our social media accounts.</p>

            <p><span class="highlight">Once again, welcome to the team! Have a pawsome day!</span></p>

            <p class="important-note">🐾 <b>Please read through the Volunteer Starter Pack to know more about our community and how you can be involved.</b></p>
        </div>
    </div>
    <hr class="section-divider">

</section>
    
<section>
    <div class="orientation-container">
        <h1>Ready for orientation?</h1>
        <p class="highlight">
            Feeding sessions are the heart of our community, which is why new feeding volunteers are required to go through a feeding orientation on their first session!
        </p>

        <ul class="orientation-list">
            <li>Please give us your number, preferably on Viber, so we can contact you regarding orientation details. If you don’t have Viber, you may also reach out to us on our social media.</li>
            <li>Please make sure that you have accomplished the Volunteer Registration Form. If not, go to our Forms Page at the navigation menu.</li>
            <li>Feeding schedules are flexible depending on your schedule. Let us know what day of the week you prefer to feed, and we’ll set a date for your orientation!</li>
            <li>You may also bring a feeding buddy or two. The more the merrier!</li>
            <li>If you are a minor, please make sure that you have permission from your guardian to volunteer. The Cats of Circuit Makati will not be liable for any accident or injury that may happen during feeding. Children who want to feed must be supervised by their guardian.</li>
        </ul>
    </div>
    <hr class="section-divider">    
</section>

<section>
    <div class="orientation-container">
        <h1>A few tips and reminders for volunteers:</h1>
        <ul class="orientation-list">
            <li>Feeding sessions can take quite a long time, usually around 60 to 90 minutes. Feeding locations are divided into 2 zones (see brochure), so please make sure that you are divided into two groups to ensure that feeding is done right and efficiently.</li>
            <li>For feeding sessions, we generally use the following items all available in our stockroom: gloves, shakers for calling the cats, food bowls and plates, water for the cats, and food scoopers.</li>
            <li>For feeding volunteers in the AM sessions, we recommend you bring the following items especially during the summer to combat heat and relieve exhaustion: cap, water, extra t-shirt, sunblock, or umbrella.</li>
            <li>When feeding in general, we advise volunteers to wear comfy clothes and footwear. It is not advisable to wear slippers, as it can become quite uncomfortable to walk in overtime. Instead, please wear sneakers or rubber shoes. Treat this like an exercise!</li>
            <li>Lastly, don't forget to take pictures of our cats, and report any medical concerns you may observe whiel volunteering. Have fun and stay safe!</li>
        </ul>
    </div>
    
    <div class="button-container">
        <button class="volunteer-button">Volunteer Form</button>
    </div>
</section>

<div id="volunteerFormPopup" class="popup-overlay">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <h2 align="center">Volunteer Registration Form</h2>
        <form id="volunteerForm" method="POST" action="process_volunteer.php">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Contact Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="viber">Viber Number</label>
                <input type="tel" id="viber" name="viber">
            </div>

            <div class="form-group">
                <label>Would you be interested in helping out the community as volunteer feeder? *</label>
                <div class="radio-group">
                    <input type="radio" id="feeder_yes" name="volunteer_feeder" value="yes" required>
                    <label for="feeder_yes">Yes</label>
                    <input type="radio" id="feeder_no" name="volunteer_feeder" value="no">
                    <label for="feeder_no">No</label>
                </div>
            </div>

            <div class="form-group">
                <label>Preferred Schedule as Volunteer Feeder *</label>
                <div class="schedule-grid">
                    <div class="schedule-header">Time</div>
                    <div class="schedule-header">Mon</div>
                    <div class="schedule-header">Tue</div>
                    <div class="schedule-header">Wed</div>
                    <div class="schedule-header">Thu</div>
                    <div class="schedule-header">Fri</div>
                    <div class="schedule-header">Sat</div>
                    <div class="schedule-header">Sun</div>
                    
                    <div>Morning</div>
                    <input type="checkbox" name="schedule[]" value="mon_morning">
                    <input type="checkbox" name="schedule[]" value="tue_morning">
                    <input type="checkbox" name="schedule[]" value="wed_morning">
                    <input type="checkbox" name="schedule[]" value="thu_morning">
                    <input type="checkbox" name="schedule[]" value="fri_morning">
                    <input type="checkbox" name="schedule[]" value="sat_morning">
                    <input type="checkbox" name="schedule[]" value="sun_morning">
                    
                    <div>Evening</div>
                    <input type="checkbox" name="schedule[]" value="mon_evening">
                    <input type="checkbox" name="schedule[]" value="tue_evening">
                    <input type="checkbox" name="schedule[]" value="wed_evening">
                    <input type="checkbox" name="schedule[]" value="thu_evening">
                    <input type="checkbox" name="schedule[]" value="fri_evening">
                    <input type="checkbox" name="schedule[]" value="sat_evening">
                    <input type="checkbox" name="schedule[]" value="sun_evening">
                </div>
            </div>

            <div class="form-group">
                <label>Availability as Backup Feeder</label>
                <div class="schedule-grid">
                    <div class="schedule-header">Time</div>
                    <div class="schedule-header">Mon</div>
                    <div class="schedule-header">Tue</div>
                    <div class="schedule-header">Wed</div>
                    <div class="schedule-header">Thu</div>
                    <div class="schedule-header">Fri</div>
                    <div class="schedule-header">Sat</div>
                    <div class="schedule-header">Sun</div>
                    
                    <div>Morning</div>
                    <input type="checkbox" name="backup_schedule[]" value="mon_morning">
                    <input type="checkbox" name="backup_schedule[]" value="tue_morning">
                    <input type="checkbox" name="backup_schedule[]" value="wed_morning">
                    <input type="checkbox" name="backup_schedule[]" value="thu_morning">
                    <input type="checkbox" name="backup_schedule[]" value="fri_morning">
                    <input type="checkbox" name="backup_schedule[]" value="sat_morning">
                    <input type="checkbox" name="backup_schedule[]" value="sun_morning">
                    
                    <div>Evening</div>
                    <input type="checkbox" name="backup_schedule[]" value="mon_evening">
                    <input type="checkbox" name="backup_schedule[]" value="tue_evening">
                    <input type="checkbox" name="backup_schedule[]" value="wed_evening">
                    <input type="checkbox" name="backup_schedule[]" value="thu_evening">
                    <input type="checkbox" name="backup_schedule[]" value="fri_evening">
                    <input type="checkbox" name="backup_schedule[]" value="sat_evening">
                    <input type="checkbox" name="backup_schedule[]" value="sun_evening">
                </div>
            </div>

            <div class="form-group">
                <label for="location">Do you reside near Circuit Makati? If yes, how long does it usually take you to reach the area? *</label>
                <textarea id="location" name="location" rows="2" required></textarea>
            </div>

            <div class="form-group">
                <label for="vaccine">Have you received an anti-rabies vaccine? If yes, please type in the date of your last dose.</label>
                <input type="date" id="vaccine" name="vaccine">
            </div>

            <div class="form-group">
                <label for="instagram">If you have an Instagram account, could you please share it with us?</label>
                <input type="text" id="instagram" name="instagram" placeholder="@username">
            </div>

            <div class="form-group">
                <label>What other volunteer team would you like to join? (Select 2) *</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="social" name="teams[]" value="social">
                    <label for="social">Social Media Team</label>

                    <input type="checkbox" id="medical" name="teams[]" value="medical">
                    <label for="medical">Medical Care Team</label>

                    <input type="checkbox" id="cnvr" name="teams[]" value="cnvr">
                    <label for="cnvr">CNVR Team</label>

                    <input type="checkbox" id="adoption" name="teams[]" value="adoption">
                    <label for="adoption">Adoption Team</label>
                </div>
            </div>

            <div class="form-group submit-group">
                <button type="submit" class="submit-btn">Submit Application</button>
            </div>
        </form>
    </div>
</div>
    
</body>
<footer>
    <div id="Footer-div" align="center">
    <!-- Social Media Icons -->
        <a href="https://www.facebook.com/thecatsofcircuitmakati/" target="_blank" class="social-icon">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/thecatsofcircuitmakati/" target="_blank" class="social-icon">
            <i class="fa-brands fa-instagram"></i>
        </a>
       <a href="https://www.tiktok.com/@catscircuitmakati_" target="_blank" class="social-icon">
            <i class="fa-brands fa-tiktok"></i>
        </a>
    THE CATS OF CIRCUIT MAKATI &copy 2023
    </div>
</footer>
</html>

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

    //Javascript for Popup Form

        const volunteerBtn = document.querySelector('.volunteer-button');
        const popup = document.getElementById('volunteerFormPopup');
        const closeBtn = document.querySelector('.close-btn');
        const volunteerForm = document.getElementById('volunteerForm');

        volunteerBtn.onclick = function() {
            popup.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        closeBtn.onclick = function() {
            popup.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        volunteerForm.onsubmit = function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch('process_volunteer.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
                popup.style.display = 'none';
                document.body.style.overflow = 'auto';
                volunteerForm.reset();
            } else {
                alert('Error submitting form. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error submitting form. Please try again.');
        });
    };
    
</script>
