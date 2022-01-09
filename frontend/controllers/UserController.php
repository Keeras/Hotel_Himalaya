<?php
/**
 * Created by PhpStorm.
 * User: Chetan
 * Date: 11/6/2019
 * Time: 1:21 PM
 */

namespace frontend\controllers;


use common\models\User;
use yii\rest\ActiveController;

class UserController extends ActiveController {
    public $modelClass = User::class;
}