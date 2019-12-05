<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "project".
 *
 * @property int $id 表记录编号
 * @property string $name 项目名
 * @property string $objective 项目目标
 * @property string $introduction 项目介绍
 * @property int $participants 参与人表编号
 * @property string $cooperator 合作单位
 * @property string $img
 * @property string $github
 *
 * @property Participant $participants0
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imgFile;


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
            [['imgFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, png'],
            [['name', 'objective', 'cooperator','img','github'], 'string', 'max' => 1000],
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
            'img' => 'Img',
            'github' => 'Github',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParticipants0()
    {
        return $this->hasOne(Participant::className(), ['id' => 'participants']);
    }

    public function upload()
    {
        if ($this->validate()) {
            if($this->imgFile != null) {
                $this->imgFile->saveAs('uploads/projectimg/' . $this->imgFile->baseName . '.' . $this->imgFile->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}
