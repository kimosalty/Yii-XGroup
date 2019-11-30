<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id 表记录编号
 * @property string $name 项目名
 * @property string $objective 项目目标
 * @property string $introduction 项目介绍
 * @property int $participants 参与人表编号
 * @property string $cooperator 合作单位
 *
 * @property Participant $participants0
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['name', 'objective', 'introduction', 'participants', 'cooperator'], 'required'],
            [['introduction'], 'string'],
            [['participants'], 'integer'],
            [['name', 'objective', 'cooperator'], 'string', 'max' => 1000],
            [['participants'], 'exist', 'skipOnError' => true, 'targetClass' => Participant::className(), 'targetAttribute' => ['participants' => 'id']],
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
            'objective' => 'Objective',
            'introduction' => 'Introduction',
            'participants' => 'Participants',
            'cooperator' => 'Cooperator',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParticipants0()
    {
        return $this->hasOne(Participant::className(), ['id' => 'participants']);
    }
}
