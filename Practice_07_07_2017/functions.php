<?php
    /**
    * Функция для получения путей к изображениям
    * 
    * @param string $directory  путь к папке с изображениями
    * 
    * @return array             массив путей
    */
    function getPictures($directory){
        $path = "pictures/".$directory.'/';
        $pictures = [];
        if(is_dir($path)){
            $d = opendir($path);
            while($file = readdir($d)){
                if($file == '.' or $file == '..' or !is_file($path.$file)){
                    continue;
                }

                $pictures[] = $path.$file;
            }
        }

        return $pictures;
    }
    /**
    * Функция для получения списка папок
    * 
    * @return array     массив имен директорий
    */
    function getDirectories(){
        $path = "pictures/";
        $directories = [];
        $d = opendir($path);
        while($dir = readdir($d)){
            if($dir == '.' or $dir == '..' or is_file($path.$dir)){
                continue;
            }

            $directories[] = $dir;
        }
        return $directories;
    }
