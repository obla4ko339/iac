<?php
/**
 * Created by PhpStorm.
 * User: obla4ko
 * Date: 18.12.16
 * Time: 20:37
 */





class FormText
{
    private $size;
    private $maxlength;
    private $value;
    private $name;
    private $type;
    private $placeholder;

    function __construct($size, $maxlength){
        $this->size = $size;
        $this->maxlength = $maxlength;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function inputText(){
        $textInput = "<input type='".$this->getType()."' name='".$this->getName()."' size=".$this->size." maxlength='".$this->maxlength."' value = '".$this->getValue()."' placeholder='".$this->getPlaceholder()."'>";
        return $textInput;
    }



}