<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/Icones/20200719_214002.jpg" />
    <link rel="stylesheet" href="../assets/CSS/aos.css">
    <link rel="stylesheet" href="../assets/CSS/main.css">
    <link rel="stylesheet" href="../assets/CSS/admlogin.css">
    <title>BlogPam | ADM Connexion</title>
</head>

<body>


    <div class="vh" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="vh-1">
            <div class="v1">
                <div class="form-log">
                    <h5>Connexion</h5>
                    <form action="">
                        <div class="item-log">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="item-log">
                            <input type="password" placeholder="Mot de passe">
                        </div>

                        <div class="item-log">
                            <button type="submit" class="btn-sub4">Connecter</button>
                        </div>

                        <div class="item-log-r">
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Administrateur</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Invite</label><br>

                        </div>
                    </form>
                </div>
            </div>
            <div class="v2">
                <div class="v2-1">
                    <div>
                        <h4>Connexion</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. In assumenda pariatur voluptates
                            alias, officiis nisi!
                        </p>
                        <br>
                        <div>
                            <a href="" class="sub-h">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/JS/jquery.min.js"></script>
    <script src="../assets/JS/aos.js"></script>
    <script>
        AOS.init();
        $(document).ready(function () {
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