<?php $this->layout('layouts::website');?>

<?php $this->start('sidebar')?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->
<div class="top-10">
	<h3>Meer weten over...</h3>
	<ol>
        <li><a href="https://www.transformers.community/" target="_blank">Transformers Community</a></li>
        <li><a href="https://www.nji.nl/depressie" target="_blank">Depressie</a></li>
        <li><a href="http://www.kenniscentrum-kjp.nl/ouders-jongeren/angst/" target="_blank">Angststoornissen</a></li>
        <li><a href="http://www.kenniscentrum-kjp.nl/ouders-jongeren/gedragsstoornissen-odd-cd/" target="_blank">Gedragsstoornissen</a></li>
        <li><a href="http://www.trimbos.nl/" target="_blank">Verslaving</a></li>
	</ol>
</div>
<?php $this->stop()?>

<?php foreach($blogs as $post): ?>
        <div class="blog">
                <h2><?php echo $post['titel']?></h2>
                <h5><?php echo $post['datum']?></h5>
                <p>
                <?php echo $post['content']?>
                </p>
        </div>
<?php endforeach;?>




