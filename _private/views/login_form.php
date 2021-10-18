<?php $this->layout('layouts::website');?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Inloggen</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo site_url( '/css/login.css' ) ?>" media="all">

<?php if ( $this->section( 'css' ) ): ?>
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
		<?php echo $this->section( 'css' ) ?>
        </style>
	<?php endif; ?>

<h3>Inloggen</h3>

<p>Log in voor uw Transformers community account.</p>


<form action="<?php echo url('login.handle')?>" method="POST">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo input('email')?>" class="form-control" id="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We delen uw e-mail adres met niemand, uw gegevens zijn veilig!</small>
        <?php if (isset ($errors['email'])): ?>
            <?php echo $errors['email'] ?>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" class="form-control" id="wachtwoord">
        <?php if (isset ( $errors['wachtwoord'] ) ): ?>
            <?php echo $errors['wachtwoord'] ?>
        <?php endif;?>
    </div>
    <button type="submit" class="btn btn-primary">Inloggen</button>
</form>

