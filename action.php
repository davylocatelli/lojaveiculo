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
if(isset($_POST['save1'])) 
{
  $cdveiculo = $_POST['cdveiculo'];     
  $vlveiculo = $_POST['vlveiculo'];
  $anoveiculo = $_POST['anoveiculo'];     
  $placaveiculo = $_POST['placaveiculo'];

$sql_query = "INSERT INTO veiculos (cdveiculo,vlveiculo,anoveiculo,placaveiculo) VALUES ('$cdveiculo','$vlveiculo','$anoveiculo','$placaveiculo')";
if(mysqli_query($conn,$sql_query))
{
    echo "Veículo cadastrado com sucesso!";
}
else
{
    echo "error" . $sql . "". mysqli_error($conn);
}
mysqli_close($conn);
}
?>