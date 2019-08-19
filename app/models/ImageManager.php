<?php


namespace App\models;


use Intervention\Image\ImageManagerStatic as Image;

class ImageManager
{
    private $folder;
    function __construct()
    {
        $this->folder = "uploads/";
    }

    function uploadImage($image)
    {
        //  Получаем расширение файла
        $extension = strtolower(substr(strrchr($image['name'], '.'), 1));
        // Генерируем уникальное имя файла с этим расширением
        $filename = uniqid() . '.' . $extension;

        $image = Image::make($image['tmp_name']);
        $image->save($this->folder . $filename);
        return $filename;
    }

}