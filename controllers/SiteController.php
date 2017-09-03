<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\Juegos;
use app\models\Imagenes;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $modelJuegos=new Juegos;
        $juegos=$modelJuegos->find()->all();
        return $this->render('index', array('juegos'=>$juegos));
    }

    public function actionJuego($id)
    {
    	$conn=Yii::$app->db;
        $modelJuegos=new Juegos;
        $modelImagenes=new Imagenes;
        $juego=$modelJuegos->findOne(['IDJUEGO'=>$id]);
        $imagen=$modelImagenes->findOne(['IDSECCION'=>$juego["IDSECCION"]]);

		$querySorteos=$modelJuegos->getQuery($id, 'all', 0);
        $queryUltimoSorteo=$modelJuegos->getQuery($id, 'max', 0);
        $sorteos=$conn->createCommand($querySorteos)->queryAll();
        $ultimoSorteo=$conn->createCommand($queryUltimoSorteo)->queryAll();

        $params=array('juego'=>$juego, 'imagen'=>$imagen, 'sorteos'=>$sorteos, 'ultimoSorteo'=>$ultimoSorteo);
        return $this->render('juego', $params);
    }
}
