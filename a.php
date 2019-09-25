<?php
class Site1 {
    /* 成员变量 */
    var $url;
    var $title;
    //var $name;

    function __construct($a, $b){
        $this->url=$a;
        $this->title=$b;
        $this->name = "Site";
    }
    function __destruct(){
        echo "     destruct      " .$this->name."\n";

    }
    function getUrl (){
        echo $this->url . PHP_EOL ;
    }


    function getTitle (){
        echo $this->title . PHP_EOL ;
    }
}

$w3cschool = new Site('abcd', 'aagjjjg');



$w3cschool->getTitle();


?>