<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meeting".
 *
 * @property int $id 主键id自增
 * @property string $speaker 组会发言人
 * @property string $title 组会题目
 * @property string $time 组会时间
 * @property string $url 下载链接
 * @property string $evaluations 评价、反响
 * @property string $other 选填字段
 */
class Meeting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meeting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['time'], 'safe'],
            [['speaker', 'title', 'url', 'evaluations', 'other'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'speaker' => 'Speaker',
            'title' => 'Title',
            'time' => 'Time',
            'url' => 'Url',
            'evaluations' => 'Evaluations',
            'other' => 'Other',
        ];
    }
}
