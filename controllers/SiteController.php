<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\Juegos;

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
        $juego=$modelJuegos->findOne(['IDJUEGO'=>$id]);
        $params=array('juego'=>$juego);
        return $this->render('juego', $params);
    }
}
