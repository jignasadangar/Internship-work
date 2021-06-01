<?php
    //method 1
    $a[0] = "Jignasha";
    $a[1] = 20;
    $a[2] = 4.3;
    $a[3] = "D";
   
    //index dynamic aray
    $a[] = "Jignasha";
    $a[] = 20;
    $a[] = 4.3;
    $a[] = "D";
    
    //alwways use this method
    $a = array("jignasha", 20,4.3,"D");
    echo "A[0]: ",$a[0];
    echo '<hr/>';
    
    //display whole array
    for($i=0; $i<count($a);$i++){
        echo"<br/>".$a[$i];
    }
     echo '<hr/>';
    
    //inbuild function to build array
    echo"<pre>";
    print_r($a);
    echo"<hr/>";
    echo"<pre>";
    echo"<pre>";
    var_dump($a);
    echo"<pre>";
?>