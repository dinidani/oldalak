<?php

namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use app\models\Oldalak;
use app\models\OldalakSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

//engedelyezi az alapban tiltott kcfindert (meg nem jo, javitani kell !!!)
$_SESSION['KCFINDER'] = array(
    'disabled' => false,
    'uploadURL' => "upload",
    'uploadDir' => ""
);




/**
 * OldalakController implements the CRUD actions for Oldalak model.
 */
class OldalakController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
	    'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index','create','update','view'],
                        'rules' => [
                            // allow authenticated users
                            [
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                            // everything else is denied
                        ],
                    ],
        ];
    }

    /**
     * Lists all Oldalak models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OldalakSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Oldalak model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Oldalak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Oldalak();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	    $this->savetofile($model->id);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    public function removedir($id)
    {
    $model = $this->findModel($id);
    $abs_path = Yii::getAlias('@webroot')."/oldalak";
    $dir = $abs_path."/".$model->cim;

       if (is_dir($dir)) {
         $objects = scandir($dir);
         foreach ($objects as $object) {
           if ($object != "." && $object != "..") {
             if (is_dir($dir."/".$object))
               rrmdir($dir."/".$object);
             else
               unlink($dir."/".$object);
	   }
         }
	 rmdir($dir);
       }
    }

    /**
     * Letrehozza az index html fileokat a megfelelo tartalommal
     */

    public function savetofile($id)
    {
    $model = $this->findModel($id);

    $abs_path = Yii::getAlias('@webroot')."/oldalak";
    $dir_path = $abs_path."/".$model->cim;

    if (!file_exists($dir_path)) {
	mkdir($dir_path, 0777, true);
	}

    $file =  $dir_path.'/index.html';

    $current = "<HTML>\n";
    $current .= "<HEAD>\n";
    $current .= "<meta name=\"description\" content=\"".$model->meta_leiras."\">\n";
    $current .= "<meta name=\"keywords\" content=\"".$model->meta_kulcsszavak."\" />\n";
    $current .= "</HEAD>\n";
    $current .= "<BODY>\n";
    $current .= $model->torzs;
    $current .= "</BODY>\n";
    $current .= "</HTML>\n";

    // Write the contents back to the file
    file_put_contents($file, $current);
    }

    /**
     * Updates an existing Oldalak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

	    $this->savetofile($id);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Oldalak model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
	$this->removedir($id);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Oldalak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Oldalak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Oldalak::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
