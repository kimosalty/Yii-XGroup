<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "member".
 *
 * @property int $memberid 表记录编号
 * @property string $leader 成员名
 * @property string $title 职称
 * @property string $mail 邮箱
 * @property string $img 照片
 * @property string $keywords 研究方向
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['leader', 'title', 'mail', 'img', 'keywords'], 'string', 'max' => 1000],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'memberid' => 'Memberid',
            'leader' => 'Leader',
            'title' => 'Title',
            'mail' => 'Mail',
            'img' => 'Img',
            'keywords' => 'Keywords',
        ];
    }


    public function upload($nowTime)
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/portrait/' . $nowTime . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

}
