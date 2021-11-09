<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/contact.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="shortcut icon" type="image" href="../../images/TC logo.png">
    <title>Contact</title>
</head>
<body>
<div class="wrapper">
    <header>
            <a href="" class="logo">Logo</a>
            <div class="menu-toggle"></div>
                <nav>
                    <ul>
                        <li><a href="<?php echo url('home') ?>" class="active">Home</a></li>
                        <li><a href="<?php echo url('corona.index') ?>">Corona</a></li>
                        <li><a href="<?php echo url('contact.form') ?>">Contact</a></li>
                        <li><a href="<?php echo url('register.form') ?>">Aanmelden</a></li>
                        <li><a href="<?php echo url('login.form') ?>">Inloggen</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
        </header>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script type="text/javascript">
            $(document).ready(function(){
                $(document).ready(function(){
                    $('.menu-toggle').click(function(){
                        $('.menu-toggle').toggleClass('active')
                        $('nav').toggleClass('active')
                    })
                })
            })
        </script>
</div>
    
    <div class="contactUs">

        <div class="box">
            <div class="contact form">
                <h3>Stuur een bericht</h3>
                <form>
                    <div class="formBox">

                        <div class="row50">
                            <div class="inputBox">
                                <span>Voornaam</span>
                                <input type="text" placeholder="Jamie">
                            </div>
                            <div class="inputBox">
                                <span>Achternaam</span>
                                <input type="text" placeholder="Vos">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" placeholder="Jamievos100@gmail.com">
                            </div>
                            <div class="inputBox">
                                <span>Telefoon</span>
                                <input type="text" placeholder="+31 06 69696969">
                            </div>        
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Bericht</span>
                                <textarea placeholder="Typ hier je bericht.."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Stuur">  
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <!-- info Box -->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>Amsterdam, Noord-Holland, <br>NEDERLAND</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="#">info@transformers.community</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="#">+31 06 69696969</a>
                    </div>

                    <!-- Social Media Links -->
                    <ul class="sci">
                        <li><a href="https://instagram.com/transformer.community?utm_medium=copy_link"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="https://www.linkedin.com/company/transformerscommunity"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                        <li><a href="https://www.facebook.com/transformers.community/"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    </ul>
                </div>
            </div>

            <!-- Map -->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155959.89243151897!2d4.763877696862799!3d52.35458283382874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c63fb5949a7755%3A0x6600fd4cb7c0af8d!2sAmsterdam!5e0!3m2!1snl!2snl!4v1636482134849!5m2!1snl!2snl" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</body>
</html>