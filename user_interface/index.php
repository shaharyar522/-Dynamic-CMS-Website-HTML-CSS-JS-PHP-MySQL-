<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website change the </title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>


    <!-- uay hamray pass Navbar hian-->
    <nav class="navbar">
        <div class="navbar-brand">
            <img src="image/php_logo-removebg-preview.png" alt="Logo" class="navbar-logo">
            <span class="navbar-title">Webtech Fusion</span>
        </div>
        <ul class="navbar-nav">
            <li><a href="#home" class="nav-link">Home</a></li>
            <li><a href="#about" class="nav-link">About</a></li>
            <li><a href="#services" class="nav-link">Services</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
    </nav>
    <!-- uay navbar main slider hian -->
    <script src="./js/slider.js"></script>
    <!-- Container 1: Image Slider -->
    <div class="slider-container">
        <div class="slider">
            <div class="slider-track">
                <img src="image/sliderimage/one.jpg" alt="Slider Image 1">
                <img src="image/sliderimage/two .jpg" alt="Slider Image 2">
                <img src="image/sliderimage/thre.jpg" alt="Slider Image 3">
                <!-- Duplicate images for seamless scrolling -->
                <img src="image/sliderimage/one.jpg" alt="Slider Image 1">
                <img src="image/sliderimage/two .jpg" alt="Slider Image 2">
                <img src="image/sliderimage/thre.jpg" alt="Slider Image 3">
            </div>
        </div>
    </div>



    <!-- uay hamray pass second contianer start hngyahian -->
    <!-- news wala section -->
    <script src="js/timer.js"></script>
    <div id="second">
        <div class="container">
            <div class="news-section">
                <button class="news-button">Latest News Click And Read The News</button>
                </section>
                <div id="timer">
                    <span id="time"></span>
                </div>
                <div class="news-scroll">
                    <ul>
                        <li><a href="https://www.dawn.com/news/1891044/jcp-names-6-high-court-judges-for-supreme-court-as-pti-boycotts-meeting" target="_blank">JCP names 6 high court judges for Supreme Court as PTI boycotts meeting</a></li>
                        <li><a href="https://www.dawn.com/news/1890900" target="_blank">Situationer: Ali Amin Gandapur’s foibles on the political tightrope</a></li>
                        <li><a href="https://www.geo.tv/latest/589945-another-vessel-carrying-pakistanis-other-migrants-sinks-off-libya-coast" target="_blank">Another vessel carrying Pakistanis, other migrants sinks off Libya coast</a></li>
                        <li><a href="https://www.geo.tv/latest/589918-turkiye-president-tayyip-erdogan-to-visit-pakistan-this-week" target="_blank">Turkiye President Tayyip Erdogan to visit Pakistan this week</a></li>
                        <li><a href="https://www.geo.tv/latest/589901-jcp-to-meet-today-for-appointment-of-eight-supreme-court-judges" target="_blank">PTI, two justices 'boycott' JCP moot called to appoint judges</a></li>
                    </ul>
                </div>
            </div>
            <!-- Title Image Section -->
            <div class="title-image">
                <div class="card">
                    <img src="image/cardimage/image card 1.webp" alt="Tech Image">
                    <h1>Modern Technology</h1>
                    <p>Modern technology enhances life through AI, IoT, blockchain, and 5G, driving automation, connectivity, efficiency, and sustainability across industries worldwide.</p>
                </div>
                <div class="card">
                    <img src="image/cardimage/cardone.jpg" alt="Tech Image">
                    <h1>Business Growth</h1>
                    <p>Modern technology enhances life through AI, IoT, blockchain, and 5G, driving automation, connectivity, efficiency, and sustainability across industries worldwide.</p>
                </div>
                <div class="card">
                    <img src="image/cardimage/card thre.jpg" alt="Tech Image">
                    <h1>Luxury Car</h1>
                    <p>Modern technology enhances life through AI, IoT, blockchain, and 5G, driving automation, connectivity, efficiency, and sustainability across industries worldwide.</p>
                </div>
            </div>
        </div>
    </div>




    
    <!-- Container 3: Scrolling Text -->
    <div id="third">
        <div class="third_container">
            <marquee behavior="scroll" direction="left">
                🚀 Web Development is the art of crafting digital experiences! | 🌐 From HTML & CSS to JavaScript & AI-powered websites, the web is evolving fast! | 📱 Responsive, Secure, & Lightning Fast Websites are the future! | 💡 Innovation + Code = The Digital Revolution! | 🔥 Build, Deploy, and Scale with Modern Web Technologies! | 🎯 Your website is your brand's first impression—Make it unforgettable!
            </marquee>
        </div>
    </div>

    <!-- Container 4: jis main hamray pass My team  hian
     or us main hamray pass team hian jis 3 pictures hian -->
    <div class="team-container">
        <h1>My Team</h1>
        <div class="container">
            <div class="team-members">
                <div class="member">
                    <div class="member-image">
                        <img src="image/afabsb 22.jpeg" alt="Team Member 1">
                    </div>
                    <h3>Sir Aftab Shb</h3>
                    <p>Team Leader</p>
                </div>
                <div class="member">
                    <div class="member-image">
                        <img src="image/asad db.jpeg" alt="Team Member 1">
                    </div>
                    <h3>Sir Asad sb</h3>
                    <p>Generative AI Specialist CEO AT Ai Fusion Tech Software</p>
                </div>
                <div class="member">
                    <div class="member-image">
                        <img src="image/zahid.jpeg" alt="Team Member 1">
                    </div>
                    <h3>zahid khan</h3>
                    <p>Php Developer</p>
                </div>

            </div>
        </div>
    </div>
    <!-- uay contact walla button  hian  us ka sectiona hian  -->

    <!-- Include SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="contact-form">
        <h1>If you want to contact my team, then click the below button Fill The Form</h1>
        <button id="openModalBtn" class="btn">Contact Us</button>
        <!-- Modal Form -->
        <div id="formModal" class="modal">
            <div class="modal-content">
                <h2>Contact Our Team</h2>
                <p style="color:white">Thank you for reaching out! Our team will be in touch soon after you submit the form.</p>
                <form id="contactForm">
                    <input type="text" id="name" class="form-input" placeholder="Enter your Name" required>
                    <input type="email" id="email" class="form-input" placeholder="Enter your Email" required>
                    <input type="tel" id="phone" class="form-input" placeholder="Enter your Phone Number" required>
                    <textarea id="message" class="form-input textarea" placeholder="Enter your Message" required></textarea>
                    <button type="submit" class="submit-btn">Submit</button>
                    <button id="closeModalBtn" class="close-btn">Close</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/form.js"></script>
    <div>


    
        <!-- uay hamraypass footer hian  -->
        <footer>
            <div class="footer-container">
                <div class="footer-section">
                    <h3>COLORLIB</h3>
                    <p>&copy; 2025 Your WebTech Fusion.All Rights Reserved.</p>
                </div>
                <div class="footer-section">
                    <h3>Customers</h3>
                    <ul>
                        <li><a href="#">Buyer</a></li>
                        <li><a href="#">Supplier</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Further Information</h3>
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section social-icons">
                    <h3>Follow us</h3>
                    <div class="icons">
                        <a href="https://www.facebook.com/" target="_blank">
                            <div class="icon-circle"><img src="image/footericon/facbook_icon.png" alt="Facebook"></div>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank">
                            <div class="icon-circle"><img src="image/footericon/linkedin_icon.png" alt="linkedin"></div>
                        </a>
                        <a href="https://telegram.org/" target="_blank">
                            <div class="icon-circle"><img src="image/footericon/telegram_icon.png" alt="telegram"></div>
                        </a>
                        <a href="">
                            <div class="icon-circle"><img src="image/footericon/twiiter_icon.png" alt="twiiter"></div>
                        </a>
                        <a href="">
                            <div class="icon-circle"><img src="image/footericon/wattsup_icon.png" alt="watssup"></div>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>