<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property string $name
 * @property string $date
 * @property string $content
 * @property string $image
 * @property string $href
 */
class News extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['date'], 'safe'],
            [['content', 'image'], 'string'],
            [['name', 'href'], 'string', 'max' => 100],
            [['name'], 'unique'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'date' => 'Date',
            'content' => 'Content',
            'image' => 'Image',
            'href' => 'Href',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
