<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <title>Homepagina</title>
        <link rel="shortcut icon" type="image" href="/images/TC logo.png">
        <link rel="stylesheet" href="../../css/homepage.css">
</head>
<body>
        <div class="wrapper">
        <!-- Navigation -->
        <nav class="main-nav">
        <ul>
                <li>
                <a class="but-style" href="<?php echo url('home') ?>">Home</a>
                </li>
                <li>
                <a class="but-style" href="#">Word transformer!</a>
                </li>
                <li>
                <a class="but-style" href="<?php echo url('corona.index') ?>">Corona Statistieken</a>
                </li>
                <li>
                <a class="but-style" href="#">Contact</a>
                </li>
        </ul>
        </nav>

        <!-- Top Container -->
        <section class="top-container">
        <header class="showcase">
                <h1>Life sucks sometimes.</h1>
                <p>Maar je staat er niet alleen voor. De Transformers Community is er voor jongeren die zelfverzekerd willen zijn en tegenslagen omzetten in kracht. We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.</p>
                <a href="#" class="btn">Lees meer</a>
        </header>
        <div class="top-box top-box-a">
                <h4>Log in</h4>
                <p class="price">Log hier in <br>op uw Transformers-account <br>om aan de slag te gaan</p>
                <a href="<?php echo url('login.form') ?>" class="btn">Inloggen</a>
        </div>
        <div class="top-box top-box-b">
                <h4>Aanmelden</h4>
                <p class="price">Registreer hier <br> om uw Transformers-account<br>te kunnen maken</p>
                <a href="<?php echo url('register.form') ?>" class="btn">Registreren</a>
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
                <h2>Praat over dingen die je eerder nergens kwijt kon.</h2>
                <p>In onze online community kan je binnen een veilige omgeving (anoniem) jouw ervaringen en gevoelens delen. Hier helpen en steunen we elkaar. Ook worden er wekelijks praktische tips gedeeld die jou helpen om zelfverzekerd te zijn en om te gaan met moeilijke situaties.</p>
                <br>    
                <a href="#" class="btn">Meld je gratis aan</a>
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




