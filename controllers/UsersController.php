<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\UserModel;

class UsersController extends Controller{

  public function actionCreate()
    {
        $model = new UserModel();

        // new record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }

        return $this->render('create', ['model' => $model]);
    }

  public function actionIndex()
   {
       $users = UserModel::find()->all();

       return $this->render('index', ['model' => $users]);
   }


   public function actionEdit($id)
      {
          $model = UserModel::find()->where(['id' => $id])->one();

          // $id not found in database
          if($model === null)
              throw new NotFoundHttpException('The requested page does not exist.');

          // update record
          if($model->load(Yii::$app->request->post()) && $model->save()){
              return $this->redirect(['index']);
          }

          return $this->render('edit', ['model' => $model]);
      }

      public function actionDelete($id)
    {
        $model = UserModel::findOne($id);

       // $id not found in database
       if($model === null)
           throw new NotFoundHttpException('The requested page does not exist.');
            
       // delete record
       $model->delete();

       return $this->redirect(['index']);
    }
  }


/*



    public function actionIndex()
    {
        $query = UserModel::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $Userss = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'Userss' => $Userss,
            'pagination' => $pagination,
        ]);
    }*/
