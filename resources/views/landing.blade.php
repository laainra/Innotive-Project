<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innotive</title>
    <link rel="icon" type="image/png" href="{{asset('images/innotive.png')}}"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
</head>

<body>

    <!--header -->
    <header class="header">
        <a href="#" class="logo">Innotive.</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</span></a>
            <a href="#features">Features</a>
            <a href="#categories">Categories</a>
            <!-- <a href="#blog">Blog</a> -->
            <a href="#contact">Contact</a>
        </nav>
        <div class="bx bx-moon" id="darkMode-icon"></div>
    </header>

    <!--Section-->
    <section class="home" id="home">
        <div class="home-content">
            <h1>Unleash Your Creativity<br> and Connect with Like-minded Innovators</h1>
            <p>Join Innotive, the Social Media Platform for Creative Industries and Technology Enthusiasts</p>

            <div class="social-media">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-instagram-alt"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
            </div>
            <div class="button-hero">
                <a href="/join" class="btn1">Register or Sign In</a>
                <!-- <a href="#" class="btn2">Sing Up</a> -->
            </div>
        </div>

        <div class="fitur-container">
            <div class="fitur-box">
                <div class="fitur" style="--i:0;">
                    <i class='bx bx-cog'></i>
                    <h3>Crafft and DIY</h3>
                </div>

                <div class="fitur" style="--i:1;">
                    <i class='bx bx-brush-alt'></i>
                    <h3>Design and Graphics</h3>
                </div>

                <div class="fitur" style="--i:2;">
                    <i class='bx bx-brush-alt'></i>
                    <h3>ART</h3>
                </div>

                <div class="fitur" style="--i:3;">
                    <i class='bx bx-expand-horizontal'></i>
                    <h3>Web Development</h3>
                </div>

                <div class="fitur" style="--i:4;">
                    <i class='bx bx-joystick-alt'></i>
                    <h3>Technology Project</h3>
                </div>

                <div class="circle"></div>
            </div>

            <div class="overlay"></div>
        </div>

        <div class="home-img">
            <img src="{{asset('images/20230617_142320.png')}}" alt="">
        </div>
    </section>


    <section class="features" id="features">
        <h2 class="heading">Why Choose <span>Innotive?</span></h2>

        <div class="features-container">
            <div class="features-box">
                <i class='bx bxs-paint'></i>
                <h3>Inspire and Be Inspired</h3>
                <p>Discover a vibrant community of creators, share your projects, and get inspired by the creativity of others.</p>
                <!-- <a href="" class="btn">Read More</a> -->
            </div>

            <div class="features-box">
                <i class='bx bx-chalkboard'></i>
                <h3>Embrace the Power of Technology</h3>
                <p>Explore cutting-edge technologies, connect with tech enthusiasts, and stay up-to-date with the latest trends.</p>
                <!-- <a href="" class="btn">Read More</a> -->
            </div>

            <div class="features-box">
                <i class='bx bx-store-alt'></i>
                <h3>Monetize Your Passion</h3>
                <p>Sell your products directly on the pl atform, reach a wide audience, and turn your passion into profit.</p>
                <!-- <a href="" class="btn">Read More</a> -->
            </div>
        </div </section>

        <section class="categories" id="categories">
            <h2 class="heading">Discover the<span> Possibilities</span></h2>

            <div class="categories-container">
                <div class="categories-box">
                    <img src="{{asset('images/fitur1.jpg')}}" alt="">

                    <div class="categories-layer">
                        <h4>Crafts and DIY</h4>

                        {{-- <a href="#"><i class='bx bx-link-external'></i></a> --}}
                    </div>
                </div>

                <div class="categories-box">
                    <img src="{{asset('images/fitur2.jpg')}}" alt="">

                    <div class="categories-layer">
                        <h4>Design and Graphics</h4>

                        {{-- <a href="#"><i class='bx bx-link-external'></i></a> --}}
                    </div>
                </div>

                <div class="categories-box">
                    <img src="{{asset('images/fitur6.jpg')}}" alt="">

                    <div class="categories-layer">
                        <h4>Art</h4>

                        {{-- <a href="#"><i class='bx bx-link-external'></i></a> --}}
                    </div>
                </div>

                <div class="categories-box">
                    <img src="{{asset('images/fitur3.jpg')}}" alt="">

                    <div class="categories-layer">
                        <h4>Web and Mobile Development</h4>

                        {{-- <a href="#"><i class='bx bx-link-external'></i></a> --}}
                    </div>
                </div>

                <div class="categories-box">
                    <img src="{{asset('images/fitur4.jpg')}}" alt="">

                    <div class="categories-layer">
                        <h4>Game Development</h4>

                        {{-- <a href="#"><i class='bx bx-link-external'></i></a> --}}
                    </div>
                </div>

                <div class="categories-box">
                    <img src="{{asset('images/fitur5.jpg')}}" alt="">

                    <div class="categories-layer">
                        <h4>Technology Projects</h4>

                        {{-- <a href="#"><i class='bx bx-link-external'></i></a> --}}
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="blog" id="blog">
            <div class="blog-img">
                <img src="https://www.nicepng.com/png/full/67-670432_download-integrated-vector-clipart-clip-art-technology-icone.png" alt="">
            </div>
            <div class="blog-content">
                <h2 class="heading">Ready to <span><br>Join the Community?</span></h2>
                <p>Sign up today and become a part of the Innotive community. Unleash your creativity, connect with innovators, and share your passion with the world.</p>
                <div class="button-hero">
                    <a href="#" class="btn1">Join Us</a>

                </div>
            </div>
        </section> -->

        <section class="contact" id="contact">
            <h2 class="heading">Contact <span>Us</span></h2>

            <form action="/contact-form" method="POST">
                <div class="input-box">
                    <input type="text" placeholder="Full Name">
                    <input type="email" placeholder="Email Address">
                </div>

                <div class="input-box">
                    <input type="number" placeholder="Mobile Number">
                    <input type="text" placeholder="Email Subject">
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>About Us</h4>
                        <ul>
                            <li><a>Innotive is a social media platform dedicated to fostering creativity and innovation. Our mission is to connect creative individuals and technology enthusiasts, providing a platform to showcase their ideas, products, and projects.</a></li>

                        </ul>
                    </div>

                    <!-- <div class="footer-col"></div>
                        <h4>Contact Us</h4>
                        <ul>
                            <li><a href="#">Have any questions or feedback? Contact us at:</a></li>
                            <li><a href="#">Email   : contact.innotive@gmail.com</a></li>
                            <li><a href="#">Phone   : +6281239640530</a></li>
                            <li><a href="#">Address : Madiun, East Java, Indonesia</a></li>
                        </ul>
                    </div> -->

                    <div class="footer-col">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><a href="#">Have any questions or feedback? Contact us at:</a></li>
                            <li><a href="#">Email   : contact.innotive@gmail.com</a></li>
                            <li><a href="#">Phone   : +6281239640530</a></li>
                            <li><a href="#">Address : Madiun, East Java, Indonesia</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Overview</h4>
                        <ul>
                            <li><a href="#home">Innotive</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#categories">Categories</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>









        <script src="https://unpkg.com/scrollreveal"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

        <script src="{{asset('js/landing.js')}}"></script>

</body>

</html>