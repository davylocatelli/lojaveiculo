<?php
   $server_name="localhost";
   $username='root';
   $password='';
   $database_name="lojaDeVeiculos";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
   die("Failed:" . mysqli_connect_error());
}
if(isset($_POST['save'])) 
{
  $cdaluno = $_POST['cdaluno'];     
  $nmaluno = $_POST['nmaluno'];

$sql_query = "INSERT INTO aluno (cdaluno,nmaluno) VALUES ('$cdaluno','$nmaluno')";
if(mysqli_query($conn,$sql_query))
{
    echo "aluno cadastrado com sucesso!";
}
else
{
    echo "error" . $sql . "". mysqli_error($conn);
}
mysqli_close($conn);
}
?>