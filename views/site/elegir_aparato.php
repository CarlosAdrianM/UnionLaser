<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Elegir Aparato';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-elegir-aparato">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('elegirAparatoFormSubmitted')): ?>

    <div class="alert alert-success">
        Muchas gracias por facilitarnos la información para ayudarle a elegir aparato. En breve recibirá asesoramiento sobre qué aparato le interesa más.
    </div>

    <p>
        En estos momentos asesores de Unión Láser están buscando la mejor solución
		para su salón. Nos pondremos en contacto con usted para comentarle cuáles son 
		nuestras recomendaciones personalizadas para su salón.
    </p>
	<p><?= Html::a('&laquo; Volver', ['site/aparatos'], ['class' => 'btn btn-primary btn-lg', 'role'=>'button']) ?></p>

    <?php else: ?>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'elegiraparato-form']); ?>
                <?= $form->field($model, 'nombre') ?>
                <?= $form->field($model, 'email') ?>
				<?= $form->field($model, 'codigoPostal') ?>
				<p>
					A fin de poder ofrecerle el mejor asesoramiento necesitamos que nos conteste a 
					las siguientes cuestiones (puede dar todas las explicaciones y detalles que desee en las respuestas):
				<ol>
					<li>¿Tiene algún tipo de aparatología en su centro?¿Cuál? Indique incluso aparatos 
					que considere viejos u obsoletos y que ya tenga en desuso.</li>
					<?= $form->field($model, 'pregunta1')->textArea(['rows' => 6]) ?>
					<li>¿Tiene estudios realizados sobre alguna terapia que actualmente no trabaja en su centro?</li>
					<?= $form->field($model, 'pregunta2')->textArea(['rows' => 6]) ?>
					<li>¿A qué tipo de clienta se dirige principalmente? Nos interesa sobre todo si busca acceder
					a ellos por precio o por imagen y calidad.</li>
					<?= $form->field($model, 'pregunta3')->textArea(['rows' => 6]) ?>
					<li>Indique aproximadamente el número de clientes que acuden regularmente a su centro (es un dato muy aproximado,
					no tiene que ser nada exacto o estadístico, ni mucho menos).</li>
					<?= $form->field($model, 'pregunta4')->textArea(['rows' => 6]) ?>
					<li>¿Cuántas cabinas tiene en su centro?</li>
					<?= $form->field($model, 'pregunta5')->textArea(['rows' => 6]) ?>
					<li>Indique el tamaño aproximado de las cabinas (basta con saber si son grandes o pequeñas, si 
					hay problema de espacio o todo lo contrario).</li>
					<?= $form->field($model, 'pregunta6')->textArea(['rows' => 6]) ?>
				</ol>
				</p>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'enviar-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <?php endif; ?>
</div>
