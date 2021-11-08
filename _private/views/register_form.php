<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link rel="shortcut icon" type="image" href="../../images/TC logo.png">
    <link rel="stylesheet" href="../../css/registratie.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Registratie Form</span></div>
            <form action="<?php echo url("register.handle")?>" method="POST">
                <div class="row">
                    <i class="fas fa-address-card"></i>
                    <input type="name" name="naam" placeholder="Volledige naam" required>
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" placeholder="E-mail" value="<?php echo input('email') ?>">
                        <div class="fout">
                            <?php if (isset($errors['email'])) : ?>
                                <?php echo $errors['email'] ?>
                            <?php endif; ?>
                        </div>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="wachtwoord" placeholder="Wachtwoord">
                        <div class="fout">
                            <?php if (isset($errors['wachtwoord'])) : ?>
                                <?php echo $errors['wachtwoord'] ?>
                            <?php endif; ?> 
                        </div>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="wachtwoord" placeholder="Herhaal Wachtwoord" required>
                </div>
                <div class="pass">Wij delen uw gegevens nooit voor commerciële doelstellingen</div>
                <div class="row button">
                    <input type="submit" value="Registreer">
                </div>
                <div class="signup-link">Al een account? <a href="<?php echo url('login.form') ?>">Log nu in</a></div>
            </form>
        </div>
    </div>
</body>

</html>