<!-- Achmad Faiz - 5026221100 (https://github.com/bedimcode/portfolio-responsive-complete)  -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio website - Achmad Faiz</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Achmad Faiz</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Experiences</a></li>
                        <li class="nav__item"><a href="#progress" class="nav__link">Progress</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Faiz</span><br> Information Systems <br> Student</h1>

                    <a href="#contact" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/achmadfaiz/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://github.com/acpaiz" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="50" y="60" href="assets/img/fotofaiz1rez.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/fotofaiz1rez.png" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">I'am Faiz</h2>
                        <p class="about__text">Currently studying at Institut Teknologi Sepuluh Nopember (ITS) as an undergraduate student majoring in Information Systems. A hard working person with a profound passion for technology, management, and a strong commitment to the humanitarian sector. Dreaming to become an IT Project Manager where he can blend his technical skills with effective management to drive successful projects. Right now he is on a journey to make a positive impact.</p>
                    </div>
                </div>
            </section>

            <!--===== EDUCATION =====-->
          <section class="education section" id="education">
            <h2 class="section-title">Education</h2>

            <div class="education__container bd-grid">
                <!-- First School -->
                <div class="education__content">
                    <img src="assets/img/smpia23.jpg" alt="SMPI Al Azhar 23 Semarang" class="education__img">
                    <h3 class="education__name">SMPI Al Azhar 23 Semarang</h3>
                    <a href="https://www.alazhar23smg.sch.id/" class="button education__button">Visit Website</a>
                </div>

                <!-- Second School -->
                <div class="education__content">
                    <img src="assets/img/sman5.jpg" alt="SMAN 5 Semarang" class="education__img">
                    <h3 class="education__name">SMAN 5 Semarang</h3>
                    <a href="https://sman5-semarang.sch.id/" class="button education__button">Visit Website</a>
                </div>

                <!-- Third School -->
                <div class="education__content">
                    <img src="assets/img/its.png" alt="Institut Teknologi Sepuluh Nopember" class="education__img">
                    <h3 class="education__name">Institut Teknologi Sepuluh Nopember</h3>
                    <a href="https://www.its.ac.id" class="button education__button">Visit Website</a>
                </div>
            </div>
          </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">Some of my profesional and technical skills are as follows.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">

                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">

                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">UX/UI</span>
                            </div>
                            <div class="skills__bar skills__ux">

                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <img src="assets/img/technicalskilss.jpg" alt="" class="skills__img">
                    </div>
                </div>

                <div class="skills__container bd-grid" style="margin-top: 50px;">
                    <div>
                        <img src="assets/img/softskills.jpg" alt="" class="skills__img">
                    </div>
                    <div>
                        <h2 class="skills__subtitle">Soft Skills</h2>
                        <p class="skills__text">Some of my soft skills are as follows.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-microphone-alt skills__icon'></i>
                                <span class="skills__name">Public Speaking</span>
                            </div>
                            <div class="skills__bar skills__ps">

                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-group skills__icon'></i>
                                <span class="skills__name">Team Working</span>
                            </div>
                            <div class="skills__bar skills__tw">

                            </div>
                            <div>
                                <span class="skills__percentage">90%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-brain skills__icon' ></i>
                                <span class="skills__name">Critical Thinking</span>
                            </div>
                            <div class="skills__bar skills__ct">

                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-analyse skills__icon'></i>
                                <span class="skills__name">Adaptability</span>
                            </div>
                            <div class="skills__bar skills__ad">

                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Experiences</h2>

                <div class="work__container bd-grid">
                    <a href="#" class="work__img">
                        <img src="assets/img/icon2.jpg" alt="">
                        <div class="work__overlay">
                            <p class="work__subtitle">ISE! 2024 <br> Director ICON</p>
                        </div>
                    </a>
                    <a href="#" class="work__img">
                        <img src="assets/img/socdev.jpg" alt="">
                        <div class="work__overlay">
                            <p class="work__subtitle">HMSI ITS <br> Staff Social Development</p>
                        </div>
                    </a>
                    <a href="#" class="work__img">
                        <img src="assets/img/angpur.jpg" alt="">
                        <div class="work__overlay">
                            <p class="work__subtitle">Angkasa Pura <br> Airport Technology Intern</p>
                        </div>
                    </a>
                    <a href="#" class="work__img">
                        <img src="assets/img/mabacup.jpg" alt="">
                        <div class="work__overlay">
                            <p class="work__subtitle">MabaCup 2023 <br> Event Expert Staff</p>
                        </div>
                    </a>
                    <a href="#" class="work__img">
                        <img src="assets/img/icon1.jpg" alt="">
                        <div class="work__overlay">
                            <p class="work__subtitle">ISE! 2023 <br> Staff ICON</p>
                        </div>
                    </a>
                    <a href="#" class="work__img">
                        <img src="assets/img/ilits.jpg" alt="">
                        <div class="work__overlay">
                            <p class="work__subtitle">ILITS 2023 <br> Head of Forda Semarang</p>
                        </div>
                    </a>
                </div>
            </section>

             <!--===== PROGRESS =====-->
          <section class="education section" id="progress">
            <h2 class="section-title">Progress</h2>

            <div class="education__container bd-grid">

                <div class="education__content">
                    <a href="intro" target="#" class="button education__button">Week 1</a>
                </div>

                <div class="education__content">
                    <a href="style" target="#" class="button education__button">Week 2</a>
                </div>

                <div class="education__content">
                    <a href="pegawai" target="#" class="button education__button">Laravel Content</a>
                </div>

            </div>
          </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="" class="contact__form" id="contactForm">
                        <input type="text" placeholder="Name" class="contact__input" id="name">
                        <span id="nameError" class="error-message"></span>

                        <input type="email" placeholder="Email" class="contact__input" id="email">
                        <span id="emailError" class="error-message"></span>

                        <textarea placeholder="Message" class="contact__input" id="message" rows="10"></textarea>
                        <span id="messageError" class="error-message"></span>

                        <input type="submit" value="Send" class="contact__button button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Achmad Faiz</p>
            <div class="footer__social">
                <a href="https://wa.me/+6283104752459" target="_blank" class="footer__icon"><i class='bx bxl-whatsapp' ></i></a>
                <a href="https://instagram.com/acpaiz" target="_blank" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://x.com/ziafdamhca" target="_blank" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p class="footer__copy">&#169; AF. All rights reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
