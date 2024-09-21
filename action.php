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
if(isset($_POST['save2'])) 
{
  $cdcliente = $_POST['cdcliente'];     
  $nmcliente = $_POST['nmcliente'];
  $emailcliente = $_POST['emailcliente'];     
  $endcliente = $_POST['endcliente'];

$sql_query = "INSERT INTO cliente (cdcliente,nmcliente,emailcliente,endcliente) VALUES ('$cdcliente','$nmcliente',' $emailcliente','$endcliente')";
if(mysqli_query($conn,$sql_query))
{
    echo "Cliente cadastrado com sucesso!";
}
else
{
    echo "error" . $sql . "". mysqli_error($conn);
}
mysqli_close($conn);
}
if(isset($_POST['save3'])) 
{
  $cdfabricante = $_POST['cdfabricante'];     
  $nmfabricante = $_POST['nmfabricante'];
  $emailfabricante = $_POST['emailfabricante'];     
  $endfabricante = $_POST['endfabricante'];

$sql_query = "INSERT INTO fabricante (cdfabricante,nmfabricante,emailfabricante,endfabricante) VALUES ('$cdfabricante','$nmfabricante',' $emailfabricante','$endfabricante')";
if(mysqli_query($conn,$sql_query))
{
    echo "Fabricante cadastrado com sucesso!";
}
else
{
    echo "error" . $sql . "". mysqli_error($conn);
}
mysqli_close($conn);
}
?>