<?php
/**
 * Created by PhpStorm.
 * User: babin
 * Date: 7/14/18
 * Time: 3:12 PM
 */

function isBitten(){
    $list{5}=rand(0,0.5);
    for ( $i=0; $i<10; $i ) {
        if ($list[$i] == 0)
            return True;
        else
            return False;
    }
}

$bool = isBitten();

if( $bool == "True") {

    Print "Bob bit your finger ";

}
else{
    Print "Bob did not bite your finger";

 }



?>



