<?php


namespace app\models;


use yii\base\Model;

class BannerUploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $img_url = 'uploads/' . time() . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs($img_url);
            return $img_url;
        } else {
            return null;
        }
    }
}