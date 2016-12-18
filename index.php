<?php
include "FormText.php";
$formText = new FormText\FormText(15, 100);
$formText->setName("myFirstText");
$formText->setType("text");
//$formText->setValue("Значение");
$formText->setPlaceholder("Имя");
echo $formText->inputText();
