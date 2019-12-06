<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "group-index".
 *
 * @property int $id
 * @property string $imgs
 * @property string $highlights
 * @property string $events
 * @property string $news
 */
class GroupIndex extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_index';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imgs', 'highlights', 'events', 'news', 'publications'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imgs' => 'Imgs',
            'highlights' => 'Highlights',
            'events' => 'Events',
            'news' => 'News',
            'publications' => 'Publications',
        ];
    }
}
