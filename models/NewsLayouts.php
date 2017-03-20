<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 6/9/2016
 * Time: 10:22 AM
 */

namespace humhub\modules\news\models;


use Yii;

class NewsLayouts extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'news_news_layout';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imagepath', 'description'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 45],
            [['background'],'string','max'=>10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('NewsModule.models_NewsLayouts', 'ID',
            'imagepath' => Yii::t('NewsModule.models_NewsLayouts', 'Imagepath',
            'name' => Yii::t('NewsModule.models_NewsLayouts', 'Name',
            'description' => Yii::t('NewsModule.models_NewsLayouts', 'Description',
            'background'=> Yii::t('NewsModule.models_NewsLayouts', 'Background Color'
        ];
    }
}
