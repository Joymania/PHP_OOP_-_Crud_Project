<?php

class user{
    public function __construct()
    {
        $host='localhost';
        $username='root';
        $password='';
        $database_name='oop';
        $this->link=mysqli_connect($host,$username,$password,$database_name);
    }
    public function user($data){
         $name =$data['name'];
         $email=$data['email'];
         $password=$data['password'];

         $querry="INSERT INTO `user`( `name`, `email`, `password`) VALUES ('$name','$email',$password)";
         mysqli_query($this->link,$querry);

    }
    public function alluser(){
        return  mysqli_query($this->link,"SELECT * FROM `user`");
    }

    public function delete($id){
        mysqli_query($this->link,"DELETE FROM `user` WHERE `id`='$id'");
        header('location:index.php');

    }

    public function edit($id){
        return  mysqli_query($this->link,"SELECT * FROM `user` WHERE `id`='$id'");
        
    }
    public function update($data,$id){
         $name =$data['name'];
         $email=$data['email'];
         $password=$data['password'];
         $querry="UPDATE `user` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id`='$id'";
         mysqli_query($this->link,$querry);
         header('location:index.php');

    }
}