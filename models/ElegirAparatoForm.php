<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ElegirAparatoForm es el model que está detrás del formulario para ayudar al cliente a elegir aparato
 */
class ElegirAparatoForm extends Model
{
    public $nombre;
    public $email;
	public $codigoPostal;
    public $asunto;
    public $pregunta1;
	public $pregunta2;
	public $pregunta3;
	public $pregunta4;
	public $pregunta5;
	public $pregunta6;
	public $cuerpoCorreo;
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['nombre', 'email', 'codigoPostal'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
			[['pregunta1', 'pregunta2', 'pregunta3', 'pregunta4', 'pregunta5', 'pregunta6'], 'string'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function enviar($email)
    {
        $this->asunto = 'Asesoramiento para Elegir Aparatología';
		$this->cuerpoCorreo = '<h2>Nombre: ' . $this->nombre . '</h2><br /><h2>Código Postal: ' . $this->codigoPostal . '</h2>' .
			'<br /><h3>Pregunta 1:</h3><br />' . $this->pregunta1 . '<br /><h3>Pregunta 2:</h3><br />' . $this->pregunta2 . 
			'<br /><h3>Pregunta 3:</h3><br />' . $this->pregunta3 . '<br /><h3>Pregunta 4:</h3><br />' . $this->pregunta4 . 
			'<br /><h3>Pregunta 5:</h3><br />' . $this->pregunta5 . '<br /><h3>Pregunta 6:</h3><br />' . $this->pregunta6 . '<br />';
		
		/*
		$email_to = "carlosadrian@nuevavision.es";
		$email_subject = "Test mail";
		$email_body = "Hello! This is a simple email message.";


		if(mail($email_to, $email_subject, $email_body)){
			echo "The email($email_subject) was successfully sent.";
		} else {
			throw new excepcion ("The email($email_subject) was NOT sent.");
		}
		*/
		
		
		if ($this->validate()) {
            Yii::$app->mailer->compose(['htmlLayout' => 'layouts/html'])
				->setTo($email)
				->setFrom([$this->email => $this->nombre])
                ->setSubject($this->asunto)
                ->setHtmlBody($this->cuerpoCorreo, 'text/html')
				
                ->send();

			return true;
        } else {
            return false;
        }
    }
}
