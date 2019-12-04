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
 * @property string $abstract 论文摘要
 * @property string $img 论文图片
 * @property string $acknowledgement 致谢
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
     * @var UploadedFile
     */
    public $imgFile;

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
            [['name', 'place', 'pdf', 'img'], 'string', 'max' => 1000],
            [['abstract', 'acknowledgement'], 'string'],
            [['authorid'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['authorid' => 'id']],
            [['pdfFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf, doc, docx'],
            [['imgFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, png'],
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
            'abstract' => 'Abstract',
            'img' => 'Img',
            'acknowledgement' => 'Acknowledgement',
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
            if($this->pdfFile != null) {
                $this->pdfFile->saveAs('uploads/pdf/' . $this->pdfFile->baseName . '.' . $this->pdfFile->extension);
            }
            if($this->imgFile != null) {
                $this->imgFile->saveAs('uploads/publicationimg/' . $this->imgFile->baseName . '.' . $this->imgFile->extension);
            }
            return true;
        } else {
            return false;
        }
    }


}
