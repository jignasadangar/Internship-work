<?php
//key= value
//associative array = no restriction .
    $a[0] = "Technology";
    $a['Js'] = "JavaScript";
    $a[10] = "HTMl";
    $a[50] = "Fifty";
    
    //always use this method
    $a = array(
        0 => "Technology",
        "Js"=> "Javascript",
        10 => "HTML",
        50=>"FIFTY"
    );
    //print value
    echo"JS stands for ". $a['Js'];
    echo"<hr>";
   
     //inbuild function to build array
    echo"<pre>";
    print_r($a);
    echo"<hr/>";
    echo"<pre>";
    echo"<pre>";
    var_dump($a);
    echo"<pre>";
    
   foreach ($a as $key => $value) {
    echo"<br/>Key is <b>$key</b> and value is <b>$value</b>" ;
    echo"</hr>";
}