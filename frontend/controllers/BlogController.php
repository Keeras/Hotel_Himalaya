<?php

namespace frontend\controllers;

use common\models\Blog;
use yii\web\Controller;


/**
 * Site controller
 */
class BlogController extends Controller {
    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [ ];
    }
    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
                'error'   => [
                        'class' => 'yii\web\ErrorAction',
                ],
                'captcha' => [
                        'class'           => 'yii\captcha\CaptchaAction',
                        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $blog =Blog::find()->asArray()->all();
        return $this->render('blog', [
        'blog' => $blog ]);
    }
    public function actionUpdate() {
        $post = \Yii::$app->request->post();
        if (!empty($post)) {
            if(isset($post['id']) && $post['id'] > 0){
                $model = Blog::find()
                    ->where('id='.$post['id'])
                    ->one();
            }else{
                $model = new Blog();
            }
            $model->attributes = $post;
            $model->save();

            if(\Yii::$app->request->isAjax){
                return true;
            }
            $this->redirect(\Yii::$app->request->baseUrl . '/blog');
        }
    }

    public function actionDelete() {
        $post = \Yii::$app->request->post('id');
        $model = Blog::find()
            ->where('id = '.$post)
            ->one();
        $model->delete();
        $this->redirect(\Yii::$app->request->baseUrl.'/blog');;
    }





}
