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
}
