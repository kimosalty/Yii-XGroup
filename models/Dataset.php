<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dataset".
 *
 * @property int $id 主键id自增
 * @property string $contributor 贡献者
 * @property string $dataset_name 数据集名称
 * @property string $size 数据集大小
 * @property string $url 数据集下载链接
 * @property string $describe 数据集描述
 * @property string $other 选填字段
 */
class Dataset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dataset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contributor', 'dataset_name', 'size', 'url', 'describe', 'other'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contributor' => 'Contributor',
            'dataset_name' => 'Dataset Name',
            'size' => 'Size',
            'url' => 'Url',
            'describe' => 'Describe',
            'other' => 'Other',
        ];
    }
}
