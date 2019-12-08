<?php

namespace app\tools;
use yii\web\UploadedFile;
use yii\base\BaseObject;

class HcUploadFile
{
    public static function uploadFiles($name){
        $uploadFile = UploadedFile::getInstanceByName($name);
        if($uploadFile == null || $uploadFile->hasError){
            return ['path'=>'', 'url'=>'', 'name'=>'', 'new_name'=>'', 'ext'=>''];
        }

        //创建时间
        $ymd = date('Ymd');

        //存储到本地路径
        $save_path = \Yii::getAlias('@uploads').'/'.$ymd.'/';

        //存储到数据库的地址
        $save_url = 'uploads'.'/'.$ymd.'/';

        if(!file_exists($save_path)){
            mkdir($save_path);
        }

        //图片名称
        $file_name = $uploadFile->getBaseName();

        //图片格式
        $file_ext = $uploadFile->getExtension();

        //新文件名
        $new_file_name = date("YmdHis").'_'.rand(10000, 99999).'.'.$file_ext;

        //图片信息
        $uploadFile->saveAs($save_path.$new_file_name);

        return ['path'=>$save_path, 'url'=>$save_url, 'name'=>$file_name, 'new_name'=>$new_file_name, 'ext'=>$file_ext];
    }
}