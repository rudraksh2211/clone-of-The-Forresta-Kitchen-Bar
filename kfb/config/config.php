<?php
       session_start();
       $siteurl='http://'.$_SERVER['HTTP_HOST'].'/skit/kfb';
       $sitetitle="The Forresta Kitchen Bar";
       
       $dbhost='localhost';
       $dbuser='root';
       $dbpass='';
       $dbname='food_db';

       $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

       if(!$conn){
       	die('Data base connection error');
       }
?>