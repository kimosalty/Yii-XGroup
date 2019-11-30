<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "participant".
 *
 * @property int $id 表记录编号
 * @property string $nameone
 * @property string $nametwo
 * @property string $namethree
 * @property string $namefour
 * @property string $namefive
 * @property string $namesix
 * @property string $nameseven
 * @property string $nameeight
 *
 * @property StaffProject[] $projects
 */
class Participant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'participant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['nameone', 'nametwo', 'namethree', 'namefour', 'namefive', 'namesix', 'nameseven', 'nameeight'], 'required'],
            [['nameone', 'nametwo', 'namethree', 'namefour', 'namefive', 'namesix', 'nameseven', 'nameeight'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nameone' => 'Nameone',
            'nametwo' => 'Nametwo',
            'namethree' => 'Namethree',
            'namefour' => 'Namefour',
            'namefive' => 'Namefive',
            'namesix' => 'Namesix',
            'nameseven' => 'Nameseven',
            'nameeight' => 'Nameeight',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(StaffProject::className(), ['participants' => 'id']);
    }
}
