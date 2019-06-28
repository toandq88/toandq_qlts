<?php

namespace backend\controllers;

use Yii;
use app\models\Tuyenduong;
use backend\models\TuyenduongSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * TuyenduongController implements the CRUD actions for Tuyenduong model.
 */
class TuyenduongController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'as access' => [
                'class' => AccessControl::className(), //AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['create', 'index', 'update', 'view', 'delete', 'export'], // add all actions to take guest to login page
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
     * Lists all Tuyenduong models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new TuyenduongSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tuyenduong model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tuyenduong model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Tuyenduong();

        if ($model->load(Yii::$app->request->post())) {
            $fileName = $model->matuyenduong . '-' . date('Ymdhis', time());
            $file = UploadedFile::getInstance($model, 'anh_daidien');

            if (is_dir('uploads/tuyenduong/') && isset($file->extension)) {
                $file->saveAs('uploads/tuyenduong/' . $fileName . '.' . $file->extension);
                //save the path in the db column
                $model->anh_daidien = $fileName . '.' . $file->extension;
            }

            $model->nguoitao = Yii::$app->user->identity->username;
            $model->ngaytao = date('Y-m-d H:i:s', time());
            $model->nguoisua = Yii::$app->user->identity->username;
            $model->ngaysua = date('Y-m-d H:i:s', time());

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                echo "Lưu thông tin không thành công!<br/>";
                //print_r($model->getAttributes());
                //print_r($model->getErrors());
                exit;
            }
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tuyenduong model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $file_exist2 = $model->anh_daidien;

        if ($model->load(Yii::$app->request->post())) {

            $file2 = UploadedFile::getInstance($model, 'anh_daidien');
            if (is_dir('uploads/images/tuyenduong/') && isset($file2->extension) && $file_exist2 != null) {     //Nếu có upload hình ảnh mới và đã có ảnh cũ
                $imageName = substr($file_exist2, 0, strlen($file_exist2) - 4);   //lấy tên file cũ
                $directory = 'uploads\images\tuyenduong\\' . $file_exist2;            //đường dẫn chứa file cũ
                @unlink($directory);                                             //Xóa file cũ
                $file2->saveAs('uploads/images/tuyenduong/' . $imageName . '.' . $file2->extension);     //upload file mới
                $model->anh_daidien = $imageName . '.' . $file2->extension;   //lấy tên file mới để lưu db
            } else if (is_dir('uploads/images/tuyenduong/') && isset($file2->extension) && $file_exist2 == null) {    //Nếu có upload hình ảnh mới và không có ảnh cũ
                $imageName = $model->id_cau . '-' . date('Ymdhis', time()); //đặt tên cho file
                $file2->saveAs('uploads/images/tuyenduong/' . $imageName . '.' . $file2->extension); //upload file mới
                $model->anh_daidien = $imageName . '.' . $file2->extension;   //lấy tên file mới để lưu db
            } else {    //còn không làm gì thì giữ nguyên
                $model->anh_daidien = $file_exist2;
            }

            $model->nguoisua = Yii::$app->user->identity->username;
            $model->ngaysua = date('Y-m-d H:i:s', time());
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tuyenduong model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tuyenduong model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tuyenduong the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Tuyenduong::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionExport() {
        $searchModel = new TuyenduongSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('export', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

}
