<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $id 表记录编号
 * @property string $nameone 第一作者
 * @property string $nametwo 第二作者
 * @property string $namethree 第三作者
 * @property string $namefour 第四作者
 * @property string $namefive 第五作者
 * @property string $namesix 第六作者
 * @property string $nameseven 第七作者
 * @property string $nameeight 第八作者
 *
 * @property Publication[] $publications
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
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
    public function getPublications()
    {
        return $this->hasMany(Publication::className(), ['authorid' => 'id']);
    }
}
