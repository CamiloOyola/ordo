<?php

require_once 'connection.php';


$options = [
    'cost' => 12,
];


$val['success']=array('success'=>false, 'mess'=>"", 'username'=>"");


if($_POST){

    $consult_username=$_POST["username"];
    $consult_password=md5($_POST["password"]);


    $sqlConsult2="SELECT * FROM usuario WHERE usuario='$consult_username' AND contrasena='$consult_password'";

    $sqlResult2=$connection->query($sqlConsult2);

    $n=$sqlResult2->num_rows;

    if($n>0){
        $row=$sqlResult2->fetch_array();
        $val['success']=true;
        $val['mess']="Bienvenido".$row[3];
        $val['mess']=$row[3];

    }   else{
        $val['success']=false;
        $val['mess']="El Error al iniciar sesion";
    }

}else{
    $val['success']=false;
    $val['mess']="Error al iniciar sesion";
}

echo json_encode($val);

?>