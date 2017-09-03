<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Juegos extends ActiveRecord
{
	public static function getDB()
	{
		return Yii::$app->db;
	}

	public static function tableName()
	{
		return 'JUEGOS';
	}
}