<?php

/**
 * Created by PhpStorm.
 * User: obla4ko
 * Date: 19.12.16
 * Time: 21:31
 */
class FormFile
{
    private $type;
    private $name;

    public function __construct($type){
        $this->type=$type;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function inputFile(){
        $fileInput = "<input type='".$this->type."' name='".$this->getName()."'>";
        return $fileInput;
    }

    public function onLoadFile(){
            echo $_FILES[$this->getName()]['name'];
    }


}