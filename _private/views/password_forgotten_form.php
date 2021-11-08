<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wachtwoord vergeten</title>
    <link rel="shortcut icon" type="image" href="../../images/TC logo.png">
    <link rel="stylesheet" href="../../css/password_forgotten.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>


<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Wachtwoord vergeten</span></div>
            <form action="<?php echo url("password.form")?>" method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" placeholder="E-mail" value="<?php echo input('email') ?>">
                        <div class="fout">
                            <?php if (isset($errors['email'])) : ?>
                                <?php echo $errors['email'] ?>
                            <?php endif; ?>
                        </div>
                        <div class="pass">Vul hier je e-mail adres in en we sturen je een wachtwoord reset link. </div>
                        <br>
                        <div class="pass2">Tip: Probeer in een wachtwoord ook altijd één of meerdere leestekens te gebruiken, zoals: komma's, puntkomma's of een uitroepteken. </div>

                        <div class="row button">
                            <input type="submit" value="Stuur">
                        </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>