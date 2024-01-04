<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Anisah Salma Rafida</title>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- custom css saya-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header -->
    <header class="header">
        <a href="#" class="logo">ANSARA.</a>

        <div class='bx bx-menu' id="menu-icon"></div>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About </a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
            <a href="{{route('users')}}" class="nav-link"><span data-hover="Data User"> Data User</span></a>
            <a href="{{route('create')}}" class="nav-link"><span data-hover="Gallery"> Gallery</span></a>
            <a href="{{route('logout')}}" class="nav-link"><span data-hover="Log Out">Log Out</span></a>
            
        </nav>
    </header>

    <!-- home -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Anisah Salma Rafida</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore aliquam, modi aspernatur placeat
                architecto amet laudantium id.</p>
            <div class="social-media">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>

        <div class="home-img">
            <img src="img/salma4.png" alt="">
        </div>
    </section>

    <!-- about -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/salma3.jpeg" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Frontend Developer!</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore officia asperiores labore officiis
                suscipit ex at non impedit nostrum animi illum mollitia itaque reprehenderit laudantium molestiae eum
                porro molestias repudiandae, amet ea eos alias corporis laborum nobis. Tempore deserunt repellendus quos
                nihil voluptas aut est suscipit.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section>

    <!-- services  -->
    <section class="services" id="services">
        <h2 class="heading">Our <span>Services</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dignissimos vitae magni aut commodi
                    non laborum nisi alias iusto voluptatibus.</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class='bx bxs-paint'></i>
                <h3>Graphic Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dignissimos vitae magni aut commodi
                    non laborum nisi alias iusto voluptatibus.</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class='bx bx-bar-chart-alt'></i>
                <h3>Digital Marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dignissimos vitae magni aut commodi
                    non laborum nisi alias iusto voluptatibus.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <!--  portof -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="img/awal cine go.png" alt="">
                <div class="portfolio-layer">
                    <h4>Mobile Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, ratione.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/awal cine go.png" alt="">
                <div class="portfolio-layer">
                    <h4>Mobile Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, ratione.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/awal cine go.png"" alt="">
                <div class="portfolio-layer">
                    <h4>Mobile Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, ratione.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/awal cine go.png" alt="">
                <div class="portfolio-layer">
                    <h4>Mobile Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, ratione.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/awal cine go.png" alt="">
                <div class="portfolio-layer">
                    <h4>Mobile Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, ratione.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/awal cine go.png" alt="">
                <div class="portfolio-layer">
                    <h4>Mobile Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, ratione.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="#">
            <div class="input-box">
                <div class="input-filed field">
                    <input type="text" placeholder="Full Name" id="name" class="item" autocomplete="off">
                    <div class="error-txt">Full Name can't be blank</div>
                </div>
                <div class="input-field field">
                    <input type="text" placeholder="Email Address" id="email" class="item" autocomplete="off">
                    <div class="error-txt email">Email Address can't be blank</div>
                </div>
            </div>
            <div class="input-box">
                <div class="input-filed field">
                    <input type="text" placeholder="Phone Number" id="phone" class="item" autocomplete="off">
                    <div class="error-txt">Phone Number can't be blank</div>
                </div>
                <div class="input-field field">
                    <input type="text" placeholder="Subject" id="subject" class="item" autocomplete="off">
                    <div class="error-txt">Subject can't be blank</div>
                </div>
            </div>

            <div class="textarea-field field">
                <textarea name="" id="message" cols="30" rows="10" placeholder="Your Message" class="item" autocomplete="off"></textarea>
                <div class="error-txt">Message can't be blank</div>
            </div>

           <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- footer-->
    <footer class="footer">
        <div class="footer-text">
            <!-- <p>Copyright &copy; 2023 by ANSARA | All Rights Reserved.</p> -->
            <p class="m-0">Created with <i class='bx bxs-heart' style='color:#ffffff'  ></i> by <a href="https://www.instagram.com/anisahslmrrr/" class="text-white fw-bold">Anisah Salma Rafida</a></p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>


    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>

    <!-- send email -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>