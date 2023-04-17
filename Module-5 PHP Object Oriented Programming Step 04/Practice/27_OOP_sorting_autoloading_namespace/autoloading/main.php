<?php

//NameSpace & inclue file:
namespace CloudStorage;
include "autoloader.php";

//Using Package:
use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;

//Main Class:
class Main{
    function __construct(){
        //mail:
        $mailer = new Mailer();
        $mailer->sendMail();
        //scan:
        $scanner = new Scanner();
        $scanner->scan();
        //jpeg:
        $images = new Jpeg();
        echo $images->getDimension();        
    } 
}
//Initiate:
new Main();

?>