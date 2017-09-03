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

	public function getQuery($idJuego, $cond, $sorteo)
	{
		$query="";
		$queryMax="";
		$querySorteo="";

		switch ($idJuego)
		{
			case '17':
			$query="SELECT DISTINCT SORTEO, TO_CHAR(FECHA_SORTEO,'dd/mm/yyyy') AS FECHA FROM KANBAN.T_TT_EXTRACTO ORDER BY SORTEO DESC";
			$queryMax="SELECT TO_CHAR(FECHA_SORTEO,'dd/mm/yyyy') AS FECHA, EXTRAC_ESTRELLA, SORTEO, EXTRAC_SIEMPRE_SALE, EXTRAC_POZO_MILL FROM KANBAN.T_TT_EXTRACTO WHERE SORTEO IN (SELECT MAX(SORTEO) FROM KANBAN.T_TT_EXTRACTO)";
			$querySorteo="SELECT TO_CHAR(FECHA_SORTEO,'dd/mm/yyyy') AS FECHA, EXTRAC_ESTRELLA, SORTEO, EXTRAC_SIEMPRE_SALE, EXTRAC_POZO_MILL FROM KANBAN.T_TT_EXTRACTO WHERE SORTEO='".$sorteo."'";
			break;

			case '18':
			break;

			case '19':
			break;

			case '20':
			break;

			case '21':
			break;

			case '22':
			break;

			case '23':
			break;

			case '24':
			break;

			case '25':
			break;

			case '46':
			break;
		}

		if ($cond=='max' && $sorteo==0)
		{
			return $queryMax;
		}
		else if ($cond!='max' && $sorteo==0)
		{
			return $query;
		}
		else if ($cond!='max' && $sorteo>0)
		{
			return $querySorteo;
		}
	}
}