<?php
class class2{
private $font_size;
private $font_text;
function __construct($f,$s){
$this->font_size=$f;
$this->font_text=$s;
$this->print_msg();
}
function print_msg(){
echo "<p style=font-size:".$this->font_size.";>".$this->font_text."</p>";
}
}
?>