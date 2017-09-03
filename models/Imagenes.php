<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Imagenes extends ActiveRecord
{
	public static function getDB()
	{
		return Yii::$app->db;
	}

	public static function tableName()
	{
		return 'IMAGENES';
	}
}