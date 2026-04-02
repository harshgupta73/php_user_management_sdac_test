<?php
    include 'db.php';
    $result=$conn->query('select * from user_emp');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql=$conn->prepare('delete from user_emp where id=?');
        $sql->bind_param('i',$id);
        if($sql->execute()){
            header('Location:home.php');
        }
        

    }

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name=$_POST['name'];
        $salary=$_POST['salary'];
        $designation=$_POST['designation'];
        $email=$_POST['email'];
        $yearsofexp=$_POST['exp'];

        $sql=$conn->prepare('update user_emp set name=?,salary=?,designation=?,email=?,yearsofexp=? where id=?');
        $sql->bind_param('sdssii',$name,$salary,$designation,$email,$yearsofexp,$id);
        
        if($sql->execute()){
            header('Location:home.php');
        }
    }
    
?>