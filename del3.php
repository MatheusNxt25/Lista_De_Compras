<?php
    
    

    if(!empty($_GET['id']))
    {
        include_once("conexao.php");

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM lista3 WHERE  codigo= '$id'";

        $result = $mysqli->query($sqlSelect);
        
        if($result->num_rows >0)
        {
            $sqlDelete = "DELETE FROM lista3 WHERE codigo= '$id'";
            $resultDelete = $mysqli->query($sqlDelete);

        }

        
    }
    header('Location: sistema3.php');

?>