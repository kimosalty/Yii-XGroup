<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paper".
 *
 * @property int $id 主键、自增
 * @property int $staff_id 人员id 外键
 * @property string $name 论文名
 * @property string $rank 论文中属于第几作者
 * @property string $time 论文发表时间
 * @property string $journal 期刊名
 * @property string $issue 期刊号
 * @property string $level 论文所属级别：如CCFA、B类
 * @property string $other 其他
 *
 * @property Staff $staff
 */
class Paper extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paper';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id'], 'required'],
            [['staff_id'], 'integer'],
            [['time'], 'safe'],
            [['name', 'rank', 'journal', 'issue', 'level', 'other'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'rank' => 'Rank',
            'time' => 'Time',
            'journal' => 'Journal',
            'issue' => 'Issue',
            'level' => 'Level',
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
