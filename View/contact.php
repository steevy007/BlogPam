<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Icones/20200719_214002.jpg" />
    <link rel="stylesheet" href="../assets/CSS/main.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 760px)" href="../assets/CSS/mobile.css" />
    <link rel="stylesheet" href="../assets/CSS/aos.css">
    <link rel="stylesheet" href="../assets/CSS/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/CSS/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/CSS/contact.css">
    <title>BlogPam | Contact</title>
</head>

<body>
    <?php require_once 'partials/Header.php' ?>

    <div class="cont1">
        <div class="wrapper1">
            <div class="cont11">
                <h1>Contact</h1>

                <p>
                    <img src="../assets/Icones/icons8_Quote_Left_18px.png" alt="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <img src="../assets/Icones/icons8_Get_Quote_18px.png" alt="">
                </p>
            </div>
        </div>
    </div>


    <div class="wrapper1">
        <div class="content">
            <div class="contentF" data-aos="flip-up">
                <span class="cont-ic"><img src="../assets/Icones/icons8_Marker_24px.png" alt=""></span> <span class="cont-adr">Adresse</span>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio possimus quo maxime, ipsam magni eius maiores quae labore aut nulla totam repr.
                </p>

                <span class="cont-ic"><img src="../assets/Icones/icons8_iPhone_X_24px.png" alt=""></span> <span class="cont-adr">Contact Telephonique</span>
                <p class="phoe">
                    +509 44111987
                </p>

                <span class="cont-ic"><img src="../assets/Icones/icons8_Important_Mail_24px.png" alt=""></span> <span class="cont-adr">Adresse Mail</span>
                <p class="mail1">
                    <a href="mailto:blogpam@contact.com">Blogpam@gmail.com</a>
                </p>
            </div>
            <div class="contentForm" data-aos="flip-down">
                <form action="">
                    <label for="" class="lab">Nom Complet</label>
                    <div class="item0">
                        <input type="text" placeholder="*** Sanon Steeve">
                    </div>
                    <label for="" class="lab">Email</label>
                    <div class="item0">
                        <input type="email" placeholder="*** ingsanonsteeve@gmail.com">
                    </div>
                    <label for="" class="lab">Message</label>
                    <div class="item0">
                        <textarea name="" id="" placeholder="*** Votre Message"></textarea>
                    </div>
                    <div class="item0">
                        <button class="btn-sub2">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <?php require_once'partials/Footer.php' ?>

    
    <script src="../assets/JS/jquery.min.js"></script>
    <script src="../assets/JS/owl.carousel.min.js"></script>
    <script src="../assets/JS/aos.js"></script>
    <script src="../assets/JS/main.js"></script>
    <script src="../assets/JS/scrolls.js"></script>
    <script>
        AOS.init();
        $(document).ready(function() {
            scroller.init();
            $(".owl-carousel").owlCarousel({
                margin: 5,
                loop: true,
                autoWidth: true,
                items: 2
            });
        });
    </script>
</body>

</html>