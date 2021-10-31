<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wachtwoord resetten</title>
    <link rel="shortcut icon" type="image" href="../../images/TC logo.png">
    <link rel="stylesheet" href="../../css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>
            <form action="<?php echo url("<?php echo url('password.reset', ['reset_code' => $reset_code])")?>" method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="password" name="password" placeholder="Wachtwoord" value="<?php echo input('wachtwoord') ?>">
                        <div class="fout">
                            <?php if (isset($errors['email'])) : ?>
                                <?php echo $errors['email'] ?>
                            <?php endif; ?>
                        </div>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="wachtwoord" placeholder="Herhaal wachtwoord">
                        <div class="fout">
                            <?php if (isset($errors['wachtwoord'])) : ?>
                                <?php echo $errors['wachtwoord'] ?>
                            <?php endif; ?> 
                        </div>
                </div>
                <div class="row button">
                    <input type="submit" value="Wachtwoord resetten">
                </div>
            </form>
        </div>
    </div>
</body>

</html>