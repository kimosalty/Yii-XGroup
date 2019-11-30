<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff-project".
 *
 * @property int $id 研究项目id、主键、自增
 * @property int $staff_id 项目所属人员id
 * @property string $time_begin 研究项目申请时间
 * @property string $time_end 研究项目截至时间
 * @property string $name 研究项目名
 * @property string $category 研究项目所属类别
 * @property double $funds 研究经费
 * @property string $meaning 研究意义
 * @property string $other 其他描述
 *
 * @property Staff $staff
 */
class StaffProject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id'], 'integer'],
            [['time_begin', 'time_end'], 'safe'],
            [['funds'], 'number'],
            [['name', 'category', 'meaning', 'other'], 'string', 'max' => 255],
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
            'time_begin' => 'Time Begin',
            'time_end' => 'Time End',
            'name' => 'Name',
            'category' => 'Category',
            'funds' => 'Funds',
            'meaning' => 'Meaning',
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
