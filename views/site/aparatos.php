<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Aparatos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-maquinas">
    <div class="row">
		<div class="col-lg-4">
			<img src="./../images/argos-aparatos.jpg" alt="Argos">
		</div>
		<div class="col-lg-8 jumbotron">
			<h1>¿Sabes qué aparato necesitas?</h1>
			<p>Si no sabes cuál es el aparato que más te interesa, nosotros te ayudamos</p>
			<p><?= Html::a('Elegir aparato &raquo;', ['site/elegiraparato'], ['class' => 'btn btn-primary btn-lg', 'role'=>'button']) ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<img src="./../images/indra-aparatos.jpg" alt="Indra">
		</div>
		<div class="col-lg-4">
			<?= Html::a('<img src="./../images/fenix-aparatos.jpg" alt="Fénix+">', ['site/fenix']) ?>
		</div>
		<div class="col-lg-4">
			<?= Html::a('<img src="./../images/zeus-aparatos.jpg" alt="Zeus">', ['site/zeus']) ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<?= Html::a('<img src="./../images/centauro-aparatos.jpg" alt="Centauro">', ['site/centauro']) ?>
		</div>
		<div class="col-lg-4">
			<?= Html::a('<img src="./../images/hebe-aparatos.jpg" alt="Hebe">', ['site/hebe']) ?>
		</div>
		<div class="col-lg-4">
			<?= Html::a('<img src="./../images/odin-aparatos.jpg" alt="Odín">', ['site/odin']) ?>
		</div>
	</div>

</div>
