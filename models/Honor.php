<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "honor".
 *
 * @property int $id 荣誉表id、主键、自增
 * @property int $staff_id 荣誉所属人员的id
 * @property string $time 荣誉获得时间
 * @property string $name 荣誉名称
 * @property string $rank 荣誉级别
 * @property string $describe 额外描述
 * @property string $other 其他
 *
 * @property Staff $staff
 */
class Honor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'honor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id'], 'integer'],
            [['time'], 'safe'],
            [['name', 'rank', 'describe', 'other'], 'string', 'max' => 255],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'staff_id' => 'Staff ID',
            'time' => 'Time',
            'name' => 'Name',
            'rank' => 'Rank',
            'describe' => 'Describe',
            'other' => 'Other',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(Staff::className(), ['id' => 'staff_id']);
    }
}
