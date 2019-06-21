<?php

namespace backend\controllers;

use Yii;
use app\models\SanphamDanhmuc;
use backend\models\SanphamDanhmucSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * SanphamDanhmucController implements the CRUD actions for SanphamDanhmuc model.
 */
class SanphamDanhmucController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'as access' => [
                'class' => AccessControl::className(), //AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index', 'update', 'view', 'delete', 'create'], // add all actions to take guest to login page
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SanphamDanhmuc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SanphamDanhmucSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SanphamDanhmuc model.
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
     * Creates a new SanphamDanhmuc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SanphamDanhmuc();

        if ($model->load(Yii::$app->request->post())) {
            //upload logo
            $imageName = date('Ymdhis', time()) . '-' . rand(111, 999);
            $file = UploadedFile::getInstance($model, 'hinhanh');
            if (is_dir('uploads/images/sanpham-danhmuc/') && isset($file->extension)) {
                $file->saveAs('uploads/images/sanpham-danhmuc/' . $imageName . '.' . $file->extension);
                //save the path in the db column
                $model->hinhanh = $imageName . '.' . $file->extension;
            }
            //Xử lý tên trên URL
            if($model -> ten_url != ''){
                $model -> ten_url = Yii::$app->toandq->convertSpace2($model->ten_url);
            }else{
                $model -> ten_url = Yii::$app->toandq->convertSpace2($model->ten);
            }
            
            $model->nguoitao = 'toandq';
            $model->nguoisua = 'toandq';
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SanphamDanhmuc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $file_exist2 = $model->hinhanh;
        
        if ($model->load(Yii::$app->request->post())) {
            $file2 = UploadedFile::getInstance($model, 'hinhanh');
            if (is_dir('uploads/images/sanpham-danhmuc/') && isset($file2->extension) && $file_exist2 != null) {     //Nếu có upload hình ảnh mới và đã có ảnh cũ
                $imageName = substr($file_exist2, 0, strlen($file_exist2) - 4);   //lấy tên file cũ
                $directory = 'uploads\images\sanpham-danhmuc\\' . $file_exist2;        //đường dẫn chứa file cũ
                @unlink($directory);                                             //Xóa file cũ
                $file2->saveAs('uploads/images/sanpham-danhmuc/' . $imageName . '.' . $file2->extension);     //upload file mới
                $model->hinhanh = $imageName . '.' . $file2->extension;         //lấy tên file mới để lưu db
            } else if (is_dir('uploads/images/sanpham-danhmuc/') && isset($file2->extension) && $file_exist2 == null) {    //Nếu có upload hình ảnh mới và không có ảnh cũ
                $imageName = date('Ymdhis', time());     //đặt tên cho file
                $file2->saveAs('uploads/images/sanpham-danhmuc/' . $imageName . '.' . $file2->extension); //upload file mới
                $model->hinhanh = $imageName . '.' . $file2->extension;         //lấy tên file mới để lưu db
            } else {    //còn không làm gì thì giữ nguyên
                $model->hinhanh = $file_exist2;
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
     * Deletes an existing SanphamDanhmuc model.
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
     * Finds the SanphamDanhmuc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SanphamDanhmuc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SanphamDanhmuc::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
