<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "publication".
 *
 * @property int $id 表记录编号
 * @property string $name 论文名
 * @property string $time 发表日期
 * @property string $place 发表地点
 * @property string $pdf pdf
 * @property int $authorid 作者表编号
 *
 * @property Author $author
 */
class Publication extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $pdfFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publication';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['name', 'time', 'place', 'pdf', 'authorid'], 'required'],
            [['time'], 'safe'],
            [['authorid'], 'integer'],
            [['name', 'place', 'pdf'], 'string', 'max' => 1000],
            [['authorid'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['authorid' => 'id']],
            [['pdfFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf, doc, docx'],
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
            'time' => 'Time',
            'place' => 'Place',
            'pdf' => 'Pdf',
            'authorid' => 'Authorid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'authorid']);
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->pdfFile->saveAs('uploads/pdf/' . $this->pdfFile->baseName . '.' . $this->pdfFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
