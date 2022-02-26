<?php 
 
  class connection{
   
    var $local = 'localhost';
    var $user = 'root';
    var $password = '';
    var $dbname = 'oop';
    var $con = null;

     function __construct(){
            $this->con = mysqli_connect($this->local , $this->user , $this->password , $this->dbname);

            if(!$this->con){

                die ('Error : '. mysqli_connect_error()); 
            } 
     }
           
  }
?>

