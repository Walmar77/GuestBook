<?php

namespace app\models;

use yii\base\Model;

class GuestForm extends Model {
	
	public $userName;
	public $email;
	public $url;
	public $text;
	
	public function rules() {
		
		return [
			[['userName', 'email', 'text'], 'required'],
			['email', 'email']
		];
	}
}