<!-- 
        //////////////////////////////////////////
        Made by Jamie Vos, Mediacollege Amsterdam. 
        //////////////////////////////////////////
-->

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>Homepagina</title>
        <link rel="shortcut icon" type="image" href="/images/TC logo.png">
        <link rel="stylesheet" href="../../css/homepage.css">
        <link rel="stylesheet" href="../../css/nav.css">
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

                <!-- Top Container -->
                <section class="top-container">
                <header class="showcase">
                        <h1>Life sucks sometimes.</h1>
                        <p>Maar je staat er niet alleen voor. De Transformers Community is er voor jongeren die zelfverzekerd willen zijn en tegenslagen omzetten in kracht. We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.</p>
                        <a href="<?php echo url('about.form') ?>" class="btn">Lees meer</a>
                </header>
                <div class="top-box top-box-a">
                        <i class="far fa-address-card fa-3x"></i>
                        <p class="price">Wil je meer weten?<br>Klik hier voor meer<br>informatie.</p>
                        <a href="<?php echo url('about.form') ?>" class="btn">About</a>
                </div>
                <div class="top-box top-box-b">
                        <i class="fas fa-hashtag fa-3x"></i>
                        <p class="price">Vind hier contact gegevens of <br> stuur een bericht naar<br>Transformers-community.</p>
                        <a href="<?php echo url('contact.form') ?>" class="btn">Contact</a>
                </div>
                </section>

                <!-- Boxes Section -->
                <section class="boxes">
                <div class="box">
                        <i class="fas fa-users fa-4x"></i>
                        <h3>Lisa</h3>
                        <p>"Ik kan mij zo gemakkelijk aanpassen aan anderen, dat ik mijzelf op een gegeven moment kwijt was geraakt. Nu probeer ik mijzelf minder snel weg te cijferen voor anderen en juist meer rekening te houden met mijzelf. </p>
                </div>
                <div class="box">
                        <i class="fas fa-users fa-4x"></i>
                        <h3>Tasnim</h3>
                        <p>"Ik heb altijd het gevoel gehad dat ik niet goed genoeg ben. Nu probeer ik dingen los te laten en me te herinneren dat het ook goed is als iets 75% is." </p>
                </div>
                <div class="box">
                        <i class="fas fa-users fa-4x"></i>
                        <h3>Elwin       </h3>
                        <p>"Ik ben opgegroeid met de overtuiging dat wat ik voelde niet gehoord hoefde te worden. Ik weet nu, dat als ik alles in mijn eigen hoofd laat zitten het opstapelt, tót ik het gedeeld heb met iemand die het begrijp óf er begrip voor kan tonen." </p>
                </div>
                <div class="box">
                        <i class="fas fa-users fa-4x"></i>
                        <h3>1111111</h3>
                        <p>11111 11111 11111 111 1111, 11111111111 11111111111 11111. 11111, 11111111?</p>
                </div>
                </section>

                <!-- Info Section -->
                <section class="info">
                <img src="../../Transformers community/Transformers/Afbeeldingen/Luca.png" alt="">
                <div>
                        <h2>Weet jij wat je moet doen om mentaal gezond te zijn? Nee? Dan ben je niet de enige.</h2>
                        <p>Terwijl de meesten van ons wel weten wat je moet doen om fysiek gezond te zijn, leert niemand ons wat ervoor nodig om mentaal gezond te zijn. Op school niet, thuis niet, op het werk niet. Terwijl je mentale gezondheid essentieel is!<br><br>
                                Tegelijkertijd vormen jongeren de meest kwetsbare doelgroep voor de ontwikkeling van mentale problemen. Maar liefst 80 (!) procent van de mentale aandoeningen zoals depressie of angst start tussen de 15 en 25 jaar.<br><br>
                                Bij de Transformers Community creëren wij samen met jongeren meer kennis, bewustzijn en openheid rondom mentale gezondheid. Door te focussen op herkenning, erkenning en verbinding willen wij mentale problemen voorkomen in plaats van genezen. <br><br>
                                We werken er naar toe om uit te groeien tot een sociale beweging van jongeren die elkaar helpt om mentaal weerbaar en veerkrachtig te zijn.</p>
                        <br>    
                        <a href="<?php echo url('register.form') ?>" class="btn">Meld je gratis aan</a>
                </div>
                </section>

                <!-- Portfolio -->
                <section class="portfolio">
                <img src="https://source.unsplash.com/random/200x200" alt="">
                <img src="https://source.unsplash.com/random/201x200" alt="">
                <img src="https://source.unsplash.com/random/202x200" alt="">
                <img src="https://source.unsplash.com/random/203x200" alt="">
                <img src="https://source.unsplash.com/random/204x200" alt="">
                <img src="https://source.unsplash.com/random/205x200" alt="">
                <img src="https://source.unsplash.com/random/206x200" alt="">
                <img src="https://source.unsplash.com/random/207x200" alt="">
                <img src="https://source.unsplash.com/random/208x200" alt="">
                </section>

                <!-- Footer -->
                <footer>
                <p>© by Mediacollege Amsterdam (Transformers community)</p>
                </footer>
        </div>
        <!-- Wrapper Ends -->
</body>
</html>








<!-- <?php foreach($blogs as $post): ?>
        <div class="blog">
                <h2><?php echo $post['titel']?></h2>
                <h5><?php echo $post['datum']?></h5>
                <p>
                <?php echo $post['content']?>
                </p>
        </div>
<?php endforeach;?> -->




