<?php
require "app/model/model.php";

class Controller extends Database{
    function __construct()
    {
        parent::__construct(); 
        
        if(isset($_SERVER['PATH_INFO'])){
            if($_SERVER['PATH_INFO'] == "/home"){
                include "app/view/home.php";
            }
            elseif($_SERVER['PATH_INFO'] == "/blogs"){
                include "app/view/blogs.php";
            }
            elseif($_SERVER['PATH_INFO'] == "/post"){
                include "app/view/post.php";
            }
            else{
                include "app/view/home.php";
            }
        }
        else{
            echo "PATH_INFO is not set!";
        }
    }
}

$connect = new Controller();
?>