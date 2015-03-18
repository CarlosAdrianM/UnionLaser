<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Unión Láser | Aparatología Estética';
?>
<div class="site-index">

	<div id="carousel-ul" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#carousel-ul" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-ul" data-slide-to="1"></li>
		<li data-target="#carousel-ul" data-slide-to="2"></li>
		<li data-target="#carousel-ul" data-slide-to="3"></li>
		<li data-target="#carousel-ul" data-slide-to="4"></li>
		<li data-target="#carousel-ul" data-slide-to="5"></li>
		<li data-target="#carousel-ul" data-slide-to="6"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
		<div class="item active">
		  <img src="./../images/argos-carousel.jpg" alt="Argos">
		</div>
		<div class="item">
			<?= Html::a('<img src="./../images/indra-carousel.jpg" alt="Indra">', ['site/indra']) ?>
		</div>
		<div class="item">
		  <?= Html::a('<img src="./../images/centauro-carousel.jpg" alt="Centauro">', ['site/centauro']) ?>
		</div>
		<div class="item">
		  <?= Html::a('<img src="./../images/hebe-carousel.jpg" alt="Hebe">', ['site/hebe']) ?>
		</div>
		<div class="item">
		  <?= Html::a('<img src="./../images/odin-carousel.jpg" alt="Odín">', ['site/odin']) ?>
		</div>
		<div class="item">
			<?= Html::a('<img src="./../images/fenix-carousel.jpg" alt="Fénix+">', ['site/fenix']) ?>
		</div>
		<div class="item">
		  <?= Html::a('<img src="./../images/zeus-carousel.jpg" alt="Zeus">', ['site/zeus']) ?>
		</div>
	</div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-ul" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-ul" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Seriedad</h2>

                <p><strong>Unión Láser</strong> lleva vinculada al mundo de la estética desde hace más de 30 años, lo que muestra la seriedad que
				hay tras nuestra marca. Uno de los grandes problemas a la hora de elegir la aparatología de nuestro centro es saber
				en qué marca podemos confiar, pues queremos que se respeten nuestras garantías y necesitamos saber que dicha empresa
				responderá igualmente con el paso del tiempo. <strong>Unión Láser</strong> se encuentra en condiciones de asegurar un
				servicio de calidad tanto en el corto como en el largo plazo.</p>

                <p><?= Html::a('Conozca nuestros aparatos &raquo;', ['site/aparatos'], ['class' => 'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Formación</h2>

                <p>Cuando un profesional hace una inversión en aparatología, lo que más le preocupa es rentabilizarla en el menor tiempo
				posible. <strong>Unión Láser</strong> forma a las esteticistas que adquieren sus equipos con jornadas
				monográficas del más alto nivel, consiguiendo de este modo que la profesional sea capaz de conseguir los mejores resultados
				desde la primera sesión. Consideramos que en la formación personalizada de la profesional radica un porcentaje altísimo de los
				resultados que se obtendrán, y por lo tanto estamos preparados para ofrecer la formación más completa en aparatología.</p>

                <p><a class="btn btn-default" href="http://www.unionlaser.es">Calendario de formaciones &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Servicio Técnico</h2>

                <p>El tercer punto que todo profesional debe valorar a la hora de elegir la aparatología estética que implantará en su centro
				es el servicio técnico que le ofrecen. Como profesionales no podemos permitirnos tener que cancelar citas porque la marca no 
				responde cuando se ha producido una avería. El profesional necesita el respaldo de la marca, la rapidez máxima o incluso la
				máquina de sustitución en caso de ser necesario. Nuestro compromiso es garantizar soluciones para que no tengas que cancelar 
				citas de manera innecesaria.</p>

                <p><a class="btn btn-default" href="http://www.unionlaser.es">Servicio técnico &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
