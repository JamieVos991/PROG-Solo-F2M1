<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="../../css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>
            <form action="<?php echo url("login.handle")?>" method="POST">
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
                <div class="pass"><a href="#">Wachtwoord vergeten?</a></div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">Niet een member? <a href="<?php echo url('register.form') ?>">Registreer nu</a></div>
            </form>
        </div>
    </div>
</body>

</html>