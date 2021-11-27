<?php

namespace backend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            $filename= time().rand(100,999) . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs('@frontend/web/images/uploads/' . $filename);
            $filePath='images/uploads/'.$filename;
            return $filePath;
        } else {
            return null;
        }
    }
}