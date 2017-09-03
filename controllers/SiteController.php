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
        $modelJuegos=new Juegos;
        $modelImagenes=new Imagenes;
        $juego=$modelJuegos->findOne(['IDJUEGO'=>$id]);
        $imagen=$modelImagenes->findOne(['IDSECCION'=>$juego["IDSECCION"]]);
        $params=array('juego'=>$juego, 'imagen'=>$imagen);
        return $this->render('juego', $params);
    }
}
