<?php

namespace backend\controllers;

use Yii;
use app\models\SanphamThuonghieu;
use backend\models\SanphamThuonghieuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SanphamThuonghieuController implements the CRUD actions for SanphamThuonghieu model.
 */
class SanphamThuonghieuController extends Controller
{
    /**
     * {@inheritdoc}
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
        ];
    }

    /**
     * Lists all SanphamThuonghieu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SanphamThuonghieuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SanphamThuonghieu model.
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
     * Creates a new SanphamThuonghieu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SanphamThuonghieu();

        if ($model->load(Yii::$app->request->post())) {
            //upload logo
            $imageName = date('Ymdhis', time()) . '-' . rand(111, 999);
            $file = UploadedFile::getInstance($model, 'logo');
            if (is_dir('uploads/images/thuonghieu/') && isset($file->extension)) {
                $file->saveAs('uploads/images/thuonghieu/' . $imageName . '.' . $file->extension);
                //save the path in the db column
                $model->logo = $imageName . '.' . $file->extension;
            }
            //Xử lý tên trên URL
            if($model -> ten_url != ''){
                $model -> ten_url = Yii::$app->toandq->convertSpace2($model->ten_url);
            }else{
                $model -> ten_url = Yii::$app->toandq->convertSpace2($model->ten);
            }
            
            $model->nguoitao = 'toandq';
            $model->nguoisua = 'toandq';
            $model->ngaytao = date('Y-m-d H:i:s', time());
            $model->ngaysua = date('Y-m-d H:i:s', time());
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SanphamThuonghieu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $file_exist2 = $model->logo;
        
        if ($model->load(Yii::$app->request->post())) {
            $file2 = UploadedFile::getInstance($model, 'logo');
            if (is_dir('uploads/images/thuonghieu/') && isset($file2->extension) && $file_exist2 != null) {     //Nếu có upload hình ảnh mới và đã có ảnh cũ
                $imageName = substr($file_exist2, 0, strlen($file_exist2) - 4);   //lấy tên file cũ
                $directory = 'uploads\images\thuonghieu\\' . $file_exist2;        //đường dẫn chứa file cũ
                @unlink($directory);                                             //Xóa file cũ
                $file2->saveAs('uploads/images/thuonghieu/' . $imageName . '.' . $file2->extension);     //upload file mới
                $model->logo = $imageName . '.' . $file2->extension;         //lấy tên file mới để lưu db
            } else if (is_dir('uploads/images/thuonghieu/') && isset($file2->extension) && $file_exist2 == null) {    //Nếu có upload hình ảnh mới và không có ảnh cũ
                $imageName = date('Ymdhis', time());     //đặt tên cho file
                $file2->saveAs('uploads/images/thuonghieu/' . $imageName . '.' . $file2->extension); //upload file mới
                $model->logo = $imageName . '.' . $file2->extension;         //lấy tên file mới để lưu db
            } else {    //còn không làm gì thì giữ nguyên
                $model->logo = $file_exist2;
            }
            
            //Xử lý tên trên URL
            if($model -> ten_url != ''){
                $model -> ten_url = Yii::$app->toandq->convertSpace2($model->ten_url);
            }else{
                $model -> ten_url = Yii::$app->toandq->convertSpace2($model->ten);
            }
            $model->nguoisua = 'toandq2';
            $model->ngaysua = date('Y-m-d H:i:s', time());
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SanphamThuonghieu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SanphamThuonghieu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SanphamThuonghieu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SanphamThuonghieu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
