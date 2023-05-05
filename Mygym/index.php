<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----------------------------------ICONO PESTAÑA--------------------------------------------------------->
    <link rel="shortcut icon" href="tools/img/logo.png" type="image/x-icon">
    <!----------------------------------google fonts--------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Quicksand:wght@300;500;700&family=Red+Hat+Display:wght@400;700;900&display=swap" rel="stylesheet">
    <!----------------------------------REMIXICON LIBRARY------------------------------------------------------->

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!----------------------------------CSS------------------------------------------------------------->
    <link rel="stylesheet" href="tools/css/style.css">


    <!----------------------------------write here------------------------------------------------------->

    <title>Fitness Club</title>
</head>
<body>
    <!----------------------------------HEADER------------------------------------------------------->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="tools/img/logo.png" alt="logo">FITNESS CLUB
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Menu</a>
                    </li>
                    <li class="nav__item">
                        <a href="#program" class="nav__link ">Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="#choose" class="nav__link">Nosotros</a>
                    </li>
                    <li class="nav__item">
                        <a href="#pricing" class="nav__link">Pricing</a>
                    </li>

                    <div class="nav__link">
                        <a href="index_2.php" class="button nav__button">Registrate</a>
                    </div>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>

            </div>

            <!--toggle button-->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>

        </nav>
    </header>
    <!----------------------------------MAIN---------------------------------------------------------->
    <main class="main">
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home__data">
                    <h2 class="home__subtitle">MAKE YOUR</h2>
                    <h1 class="home__title">BODY SHAPE</h1>
                    <p class="home__description">
                        ¡Comienza a entrenar con nosotros! Aquí te ayudaremos a  construir tu cuerpo ideal y a vivir la vida al máximo.
                    </p>
                    <a href="index_2.php" class="button button__flex">Empieza Hoy <i class="ri-arrow-right-line"></i></a>
                </div>

                <div class="home__images">
                    <img src="tools/img/home3.png" alt="home image" class="home__img">
                    <div class="home__triangle home__triangle-3"></div>
                    <div class="home__triangle home__triangle-2"></div>
                    <div class="home__triangle home__triangle-1"></div>

                </div>

            </div>
        </section>
         <!----------------------------------LOGOS------------------------------------------->
        <section class="logos section">
            <div class="logos__container container grid">
                <img src="tools/img/marca1.png" alt="logo image" class="logos__img">
                <img src="tools/img/marca3.png" alt="logo image" class="logos__img">
                <img src="tools/img/marca4.png" alt="logo image" class="logos__img">
                <img src="tools/img/marca2.png" alt="logo image" class="logos__img">
            </div>
        </section>

         <!----------------------------------PROGRAMA---------------------------------------->
        <section class="program section" id="program">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Nuestro Programa</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">BUID YOUR</h1>
                        <h1 class="section__title">BEST BODY</h1>
                    </div>
                </div>
            </div>

            <div class="program__container grid">

                <article class="program__card">
                    <div class="program__shape">
                        <img src="tools/img/program1.png" alt="program image" class="program__img">
                    </div>
                    <h3 class="program__title">Flex Muscle</h3>
                    <p class="program_description">El entrenamiento de flexión muscular es importante para mantener una buena salud muscular y articular.</p>

                    <a href="#" class="program__button">
                       <i class="ri-arrow-right-circle-fill"></i>
                    </a>
                </article>

                <article class="program__card">
                    <div class="program__shape">
                        <img src="tools/img/program1.png" alt="program image" class="program__img">
                    </div>
                    <h3 class="program__title">Cardio</h3>
                    <p class="program_description">Es importante realizar al menos 30 minutos de ejercicio de cardio al día, cinco días a la semana, para mantener una buena salud cardiovascular.</p>

                    <a href="#" class="program__button">
                       <i class="ri-arrow-right-circle-fill"></i>
                    </a>
                </article>

                <article class="program__card">
                    <div class="program__shape">
                        <img src="tools/img/program1.png" alt="program image" class="program__img">
                    </div>
                    <h3 class="program__title">Yoga Básico</h3>
                    <p class="program_description">El yoga es una práctica física, mental y espiritual presenta beneficios para la salud física y mental.</p>

                    <a href="#" class="program__button">
                       <i class="ri-arrow-right-circle-fill"></i>
                    </a>
                </article>

                <article class="program__card">
                    <div class="program__shape">
                        <img src="tools/img/program1.png" alt="program image" class="program__img">
                    </div>
                    <h3 class="program__title">Levantamiento de Pesas</h3>
                    <p class="program_description">Entrenamiento de fuerza que se enfoca en levantar pesos con el objetivo de desarrollar la fuerza y aumentar la masa muscular.</p>

                    <a href="#" class="program__button">
                       <i class="ri-arrow-right-circle-fill"></i>
                    </a>
                </article>

            </div>
            

        </section>

         <!----------------------------------CHOOSE US--------------------------------------->
        <section class="choose section" id="choose">
            <div class="choose__overflow">
                <div class="choose__container container grid">
                    <div class="choose__content">
                        <div class="section__data">
                            <h2 class="section__subtitle">Best Reason</h2>
                            <div class="section__titles">
                                <h1 class="section__title-border">WHY</h1>
                                <h1 class="section__title">CHOOSE US ?</h1>
                            </div>
                        </div>

                        <p class="choose__description">Choose your favorite class and start now. Remenber the only bad workout is the one you didn´t do.</p>

                        <div class="choose__data">

                            <div class="choose__group">
                                <h3 class="choose__number">200+</h3>
                                <p class="choose__subtitle">Total Members</p>
                            </div>

                            <div class="choose__group">
                                <h3 class="choose__number">50+</h3>
                                <p class="choose__subtitle">Best trainers</p>
                            </div>

                            <div class="choose__group">
                                <h3 class="choose__number">25+</h3>
                                <p class="choose__subtitle">Programs</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">100+</h3>
                                <p class="choose__subtitle">Awards</p>
                            </div>

                        </div>
                    </div>
                   
                    <div class="choose__images">
                        <img src="tools/img/calcule3.png" alt="choose image" class="choose__img">
                        <div class="choose__triangle choose__triangle-1"></div>
                        <div class="choose__triangle choose__triangle-2"></div>
                        <div class="choose__triangle choose__triangle-3"></div>
                      
                    </div>
                </div>   
            </div>
        </section>
         <!----------------------------------PRICING----------------------------------------->
        <section class="pricing section" id="pricing">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">¡Comienza a entrenar con nosotros!</h2>
                    <div class="secction__titles">
                        <h1 class="section__title-border">ELIGE</h1>
                        <h1 class="section__title">TU PLAN</h1>
                    </div>
                </div>

                <div class="pricing__container grid">
                    <article class="pricing__card ">

                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="tools/img/pricing.png" alt="pricing image" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">PLAN BÁSICO</h1>
                            <h2 class="pricing__number">$200</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i>5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i>01 Sweatshirt
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line "></i>01 Bottle of Protein
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i>Access to Videos
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i>Muscle Stretching
                            </li>

                        </ul>
                        <a href="#" class="button button__flex pricing__button">Purchase Now
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="pricing__card pricing__card-active">

                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="tools/img/pricing.png" alt="pricing image" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">PLAN PREMIUM</h1>
                            <h2 class="pricing__number">$250</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i>5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i>01 Sweatshirt
                            </li>
                            <li class="pricing__item ">
                                <i class="ri-checkbox-circle-line"></i>01 Bottle of Protein
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i>Access to Videos
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i>Muscle Stretching
                            </li>

                        </ul>
                        <a href="#" class="button button__flex pricing__button">Purchase Now
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="pricing__card">

                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="tools/img/pricing.png" alt="pricing image" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">PLAN BLACK</h1>
                            <h2 class="pricing__number">$400</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i>5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i>01 Sweatshirt
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line "></i>01 Bottle of Protein
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i>Access to Videos
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i>Muscle Stretching
                            </li>

                        </ul>
                        <a href="#" class="button button__flex pricing__button">Purchase Now
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>
                </div>


            </div>
        </section>
        <!----------------------------------calcular----------------------------------------->
        <section class="calculate section">
            <div class="calculate__container container grid">
                <div class="calculate__content">
                    <div class="section__titles">
                        <h1 class="section__title-border">CALCULATE</h1>
                        <h1 class="section__title">YOUR BMI</h1>
                    </div>

                    <p class="calculate__description">
                        The body mass index(BMI) calculator calculates body mass index from your weight and height.
                    </p>
                    <form action="" class="calculate__form" id="calculate-form">
                        <div class="calculate__box">
                            <input type="number" placeholder="Altura" class="calculate__input" id="calculate-cm">
                            <label for="" class="calculate__label">cm</label>
                        </div>
                        <div class="calculate__box">
                            <input type="number" placeholder="Peso" class="calculate__input" id="calculate-kg">
                            <label for="" class="calculate__label">kg</label>
                        </div>

                        <button type="submit" class="button button__flex">
                            Calcular<i class="ri-arrow-right-line"></i>
                        </button>
                    </form>

                    <p class="calculate__message" id="calculate-message"></p>
                </div>

                <img src="tools/img/calcule1.png" alt="calculate image" class="calculate__img">
            </div>
        </section>
    </main>
   
    <!----------------------------------FOOTER------------------------------------------------------->
    <footer class="footer section" id="footer">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    <img src="tools/img/logo.png" alt="">FITNESS CLUB
                </a>

                <p class="footer__description">
                    Suscribete a nuestra compañia <br>updates below.
                </p>

                <form action="" class="footer__form" id="contact-form">
                    <input type="email" name="user_email" placeholder="Your Email" class="footer__input" id="contact-user">
                    <a href="index.php" class="button button__flex">Suscribete<i class="ri-arrow-right-line"></i></a>
                </form>


                <p class="footer__message" id="contact-message"></p>

            </div>

            <div class="footer__content">
                <div>
                    <h3 class="footer__title">SERVICIOS</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Flexión Muscular</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Cardio</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Yoga Básico</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Levantamiento de Pesas</a>
                        </li>
                    </ul>
                </div>


                <div>
                    <h3 class="footer__title">PRICING</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Básico</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Premium</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Diamond</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">COMPANY</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Careers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Customers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Partnes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="footer__group">
                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link"><i class="ri-facebook-circle-fill"></i></a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link"><i class="ri-twitter-fill"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"  class="footer__social-link"><i class="ri-instagram-fill"></i></a>
                </ul>

                <span class="footer__copy">
                    &#169; Copyright FITNESS CLUB. All rights reserved
                </span>

            </div>
        </div>
    </footer>
    <!----------------------------------SCROLL UP------------------------------------------------------>
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>
    <!----------------------------------SCROLLREVEAL--------------------------------------------------->
    <script src="tools/js/scrollreveal.min.js"></script>
    <!----------------------------------CORREO JS----------------------------------------------------->
    
    <!----------------------------------MAIN-------------------------------------------------------->
     <script src="tools/js/main.js"></script>
    

    
</body>
</html>