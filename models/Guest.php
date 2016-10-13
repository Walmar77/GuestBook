<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "guest".
 *
 * @property integer $id
 * @property string $url
 * @property string $name
 * @property string $text
 * @property string $email
 * @property string $ip
 * @property string $created_at
 * @property string $updated_at
 */
class Guest extends ActiveRecord
{

    public $captcha;

    /**
     * @inheritdoc
     */
    public function behaviors()
{
    return [
        [
            'class' => TimestampBehavior::className(),
            'createdAtAttribute' => 'created_at',
            'updatedAtAttribute' => 'updated_at',
            'value' => new Expression('NOW()'),
        ],
    ];
}

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->setAttribute('ip', Yii::$app->request->userIP);
            return true;
        } else {
            return false;
        }
    }

    /**
     * @inheritdoc
     */
    public function rules() {

        return [
            [['name', 'email', 'text'], 'required'],
            ['email', 'email'],
            ['url', 'url'],
            ['!ip', 'safe'],
            ['captcha', 'captcha'],
            ['captcha', 'required'],
            [['name','text'],'filter','filter'=>'\yii\helpers\HtmlPurifier::process']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guest';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'name' => 'Name',
            'text' => 'Text',
            'email' => 'Email',
            'ip' => 'Ip',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}