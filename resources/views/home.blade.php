<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{mix('resources\css\homestyle.css')}}">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
    <header>
        <div class="nav container">
            <i class='bx bx-menu' id="menu-icon"></i>
            <a href="#" class="logo">Car<span>Rental</span></a>
            <ul class="navbar">
                <li><a href="#home" class="active">Home</a> </li>
                <li><a href="#cars">Cars</a> </li>
                <li><a href="#abouts">About</a> </li>
                <li><a href="#blog">Blog</a> </li>
            </ul>
            <i class='bx bx-search' id="search-icon"></i>
            <div class="search-box container">
                <input type="search" name="" id="" placeholder="Search here...">
            </div>
        </div>
    </header>
    <section class="home" id="home">
        <div class="home-text">
            <h1>We Have <span>Everything</span> You Need</h1>
            <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum <br> Lorem ipsumLorem ipsumLorem ipsum</p>
            <a href="#" class="btn">Discover Now!</a>
        </div>
    </section>
    <section class="cars" id="cars">
        <div class="heading">
            <span>All Cars</span>
            <h2>We have types of cars</h2>
            <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
        </div>
        <div class="cars-container container">
            <div class="box">
                <img src="Images\Honda Accord.jpg" alt="">
                <h2>Honda Accord</h2>
            </div>
            <div class="box">
                <img src="Images\Isuzu D-Max.jpg" alt="">
                <h2>Isuzu D-Max</h2>
            </div>
            <div class="box">
                <img src="Images\jimny XL.jpg" alt="">
                <h2>Jimny XL</h2>
            </div>
            <div class="box">
                <img src="Images\Mazda MX-5.jpg" alt="">
                <h2>Mazda MX-5</h2>
            </div>
            <div class="box">
                <img src="Images\Mitsubishi XForce.jpg" alt="">
                <h2>Mitsubishi XForce</h2>
            </div>
            <div class="box">
                <img src="Images\Nissan X-Trail e-Power.jpg" alt="">
                <h2>Nissan X-Trail</h2>
            </div>
            <div class="box">
                <img src="Images\Toyota Land Cruiser Prado 250.jpg" alt="">
                <h2>Toyota Land Cruiser Prado 250</h2>
            </div>
            <div class="box">
                <img src="Images\Toyota Vios.jpeg" alt="">
                <h2>Toyota Vios</h2>
            </div>
            <div class="box">
                <img src="Images\ford raptor.jpg" alt="">
                <h2>Ford Raptor</h2>
            </div>
        </div>

    </section>
    <section class="about container" id="abouts">
        <div class="about-img">
            <img src="Images\aboutus.png" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h2>Cheap Prices With <br>Quality Cars</h2>
            <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>
    <section class="blog" id="blog">
        <div class="heading">
            <span>Blog and News</span>
            <h2>Our Blog Content</h2>
            <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
        </div>
        <div class="blog-container container">
            <div class="box">
                <img src="Images\fortuner.jpg" alt="">
                <span>Feb 14 2021</span>
                <h3>How To Get </h3>
                <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
                <a href="#" class="blog-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
            </div>
            <div class="box">
                <img src="Images\blog.jpeg" alt="">
                <span>Feb 14 2021</span>
                <h3>How To Get </h3>
                <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
                <a href="#" class="blog-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
            </div>
            <div class="box">
                <img src="Images\citroen c4.jpg" alt="">
                <span>Feb 14 2021</span>
                <h3>How To Get </h3>
                <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
                <a href="#" class="blog-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="footer-container container">
            <div class="footer-box">
                <a href="#" class="logo">Car<span>Rental</span></a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
            <div class="footer-box">
                <h3>Page</h3>
                <a href="#">Home</a>
                <a href="#">Cars</a>
                <a href="#">Parts</a>
                <a href="#">Sales</a>
            </div>
            <div class="footer-box">
                <h3>Legal</h3>
                <a href="#">Privacy</a>
                <a href="#">Refund Policy</a>
                <a href="#">Cookie Policy</a>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <p>United States</p>
                <p>Japan</p>
                <p>Germany</p>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&#169; Security Project All Right Reserved</p>
    </div>

    <script src="{{mix('resources\js\home.js')}}"></script>

</body>
</html>
