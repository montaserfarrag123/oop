<?php
session_start();
include "./config/dbconfig.php";
include "./config/validator.php";


class operation{

    private $title ; 
    private $content; 
    private $result;

    public function insert($data){

        $validator = new validator;

        $this->title = $validator->Clean($data['title']);
        $this->content = $validator->clean($data['content']);
        //validate
        $error = [];

        //validate itle
        if(empty($this->title)){
            $error['title'] = "this field Required" ;
        }

        //validate content
        if(empty($this->content)){
            $error['content'] = "this field Required" ;
        }elseif(strlen($this->content<=50)){
            $error['content'] = "Must be at least 50 characters" ;

        }

        // foreach($error as $key=>$value){
        //     echo $key . $value ;
        // }

        //check errors
        if(count($error)>0){

            foreach($error as $key=>$value){
                echo $key . $value ;
            }

           
        }else{

            $connection = new connection;
            
                $sql = "insert into thing (title , content) values ('$this->title' , '$this->content')";
                 mysqli_query($connection->con , $sql);
        }

    } 

    public function datashow(){
      
         $con = new connection;
         $sql = "SELECT * from thing";
         mysqli_query($con->con , $sql) ; 
         
    }

    public function delete($id){

        $con = new connection;
        $sql = "delete form thing where id = $id";
        mysqli_query($con->con , $sql);
    }

    public function edit($id){
        $con = new connection;
        $sql = "SELECT * from thing";
        mysqli_query($con->con , $sql) ; 
    }

    public function update($data){
        $con = new connection;
        $sql = "UPDATE thing set `title`= $this->title , `content`= $this->content ";
        mysqli_query($con->con , $sql);
         
    }
    

}

?>