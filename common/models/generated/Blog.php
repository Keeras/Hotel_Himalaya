<?php

namespace common\models\generated;
use Yii;

/**
 * This is the model class for table "{{%blog}}".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $content
 * @property string $status
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%blog}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'title', 'content', 'status'], 'required'],
            [['name', 'title', 'content', 'status'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'content' => 'Content',
            'status' => 'Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return BlogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BlogQuery(get_called_class());
    }
}
