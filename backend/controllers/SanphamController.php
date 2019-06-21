<?php

namespace backend\controllers;

use Yii;
use app\models\Sanpham;
use app\models\SanphamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * SanphamController implements the CRUD actions for Sanpham model.
 */
class SanphamController extends Controller
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
     * Lists all Sanpham models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SanphamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sanpham model.
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
     * Creates a new Sanpham model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sanpham();

        if ($model->load(Yii::$app->request->post())) {
            //Upload file hướng dẫn
            $fileName = $model->ma_sanpham . '-' . date('Ymdhis', time()) . '-' . rand(111, 999);
            $file = UploadedFile::getInstance($model, 'file_huongdan');

            if (is_dir('uploads/sanpham-huongdan/') && isset($file->extension)) {
                $file->saveAs('uploads/sanpham-huongdan/' . $fileName . '.' . $file->extension);
                //save the path in the db column
                $model->file_huongdan = $fileName . '.' . $file->extension;
            }

            //Xử lý ảnh đại diện
            $imageName = $model->ma_sanpham . '-' . date('Ymdhis', time()) . '-' . rand(111, 999);
            $file2 = UploadedFile::getInstance($model, 'hinhanh');

            if (is_dir('uploads/images/sanpham/') && isset($file2->extension)) {
                $file2->saveAs('uploads/images/sanpham/' . $imageName . '.' . $file2->extension);
                //save the path in the db column
                $model->hinhanh = $imageName . '.' . $file2->extension;
            }
            
            //Xử lý tên trên URL
            if($model -> ten_url != ''){
                $model -> ten_url = Yii::$app->toandq->convertSpace2($model->ten_url);
            }else{
                $model -> ten_url = Yii::$app->toandq->convertSpace2($model->ten);
            }
            
            $model->nguoitao = 'toandq';//Yii::$app->user->identity->username;
            $model->nguoisua = 'toandq';//Yii::$app->user->identity->username;            
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
     * Updates an existing Sanpham model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $file_exist = $model->file_huongdan;
        $file_exist2 = $model->hinhanh;
        
        if ($model->load(Yii::$app->request->post())) {
            //Xử lý file hướng dẫn
            $file = UploadedFile::getInstance($model, 'file_huongdan');
            if (is_dir('uploads/sanpham-huongdan/') && isset($file->extension) && $file_exist != null) {             //Nếu có upload file mới và đã có file cũ
                $fileName = substr($file_exist, 0, strlen($file_exist) - 4);    //lấy tên file cũ
                $directory = 'uploads\sanpham-huongdan\\' . $file_exist;             //đường dẫn chứa file cũ
                @unlink($directory);                                             //Xóa file cũ
                $file->saveAs('uploads/sanpham-huongdan/' . $fileName . '.' . $file->extension);
                //save the path in the db column
                $model->file_huongdan = $fileName . '.' . $file->extension;
            } else if (is_dir('uploads/sanpham-huongdan/') && isset($file->extension) && $file_exist == null) {
                $fileName = $model->ma_sanpham . '-' . date('Ymdhis', time()) . '-' . rand(111, 999); //đặt tên cho file
                $file->saveAs('uploads/sanpham-huongdan/' . $fileName . '.' . $file->extension); //upload file mới
                $model->file_huongdan = $fileName . '.' . $file->extension;   //lấy tên file mới để lưu db
            } else {
                $model->file_huongdan = $file_exist;
            }

            //Xử lý ảnh đại diện
            $file2 = UploadedFile::getInstance($model, 'hinhanh');
            if (is_dir('uploads/images/sanpham/') && isset($file2->extension) && $file_exist2 != null) {     //Nếu có upload hình ảnh mới và đã có ảnh cũ
                $imageName = substr($file_exist2, 0, strlen($file_exist2) - 4);   //lấy tên file cũ
                $directory = 'uploads\images\sanpham\\' . $file_exist2;            //đường dẫn chứa file cũ
                @unlink($directory);                                             //Xóa file cũ
                $file2->saveAs('uploads/images/sanpham/' . $imageName . '.' . $file2->extension);     //upload file mới
                $model->hinhanh = $imageName . '.' . $file2->extension;   //lấy tên file mới để lưu db
            } else if (is_dir('uploads/images/sanpham/') && isset($file2->extension) && $file_exist2 == null) {    //Nếu có upload hình ảnh mới và không có ảnh cũ
                $imageName = $model->ma_sanpham . '-' . date('Ymdhis', time()); //đặt tên cho file
                $file2->saveAs('uploads/images/sanpham/' . $imageName . '.' . $file2->extension); //upload file mới
                $model->hinhanh = $imageName . '.' . $file2->extension;   //lấy tên file mới để lưu db
            } else {    //còn không làm gì thì giữ nguyên
                $model->hinhanh = $file_exist2;
            }
            
            //Xử lý tên trên URL
            if($model -> ten_url != ''){
                $model -> ten_url = Yii::$app->toandq->convertSpace2($model->ten_url);
            }else{
                $model -> ten_url = Yii::$app->toandq->convertSpace2($model->ten);
            }
            
            $model->nguoisua = 'toandq2';//Yii::$app->user->identity->username;
            $model->ngaysua = date('Y-m-d H:i:s', time());
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sanpham model.
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
     * Finds the Sanpham model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sanpham the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sanpham::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
