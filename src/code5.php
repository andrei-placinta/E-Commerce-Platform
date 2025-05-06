<?php

require 'dbcon.php';

if(isset($_POST['save_tableta']))
{
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $rezolutie = mysqli_real_escape_string($con, $_POST['rezolutie']);
    $dim_diagonala = mysqli_real_escape_string($con, $_POST['dim_diagonala']);
    $mem_interna = mysqli_real_escape_string($con, $_POST['mem_interna']);
    $mem_ram = mysqli_real_escape_string($con, $_POST['mem_ram']);


    if($brand == NULL || $rezolutie == NULL || $dim_diagonala == NULL || $mem_interna == NULL || $mem_ram == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Toate campurile sunt obligatorii'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO tablete (brand,rezolutie,dim_diagonala,mem_interna,mem_ram) VALUES ('$brand','$rezolutie','$dim_diagonala','$mem_interna','$mem_ram')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'tableta adaugata cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'tableta nu a fost creata'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_tableta']))
{
    $tableta_id = mysqli_real_escape_string($con, $_POST['tableta_id']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $rezolutie = mysqli_real_escape_string($con, $_POST['rezolutie']);
    $dim_diagonala = mysqli_real_escape_string($con, $_POST['dim_diagonala']);
    $mem_interna = mysqli_real_escape_string($con, $_POST['mem_interna']);
    $mem_ram = mysqli_real_escape_string($con, $_POST['mem_ram']);

    if($brand == NULL || $rezolutie == NULL || $dim_diagonala == NULL || $mem_interna == NULL || $mem_ram == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Toate campurile sunt obligatorii'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE tablete SET brand='$brand', rezolutie='$rezolutie', dim_diagonala='$dim_diagonala', mem_interna='$mem_interna', mem_ram='$mem_ram'
                WHERE id='$tableta_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Tableta actualizata cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Tableta neactualizata'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['tableta_id']))
{
    $tableta_id = mysqli_real_escape_string($con, $_GET['tableta_id']);
    
    $query = "SELECT * FROM tablete WHERE id='$tableta_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $tableta = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Tableta incarcata cu succes dupa id',
            'data' => $tableta
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Tableta id negasit'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_tableta']))
{
    $tableta_id = mysqli_real_escape_string($con, $_POST['tableta_id']);

    $query = "DELETE FROM tablete WHERE id='$tableta_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Tableta stearsa cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Tableta nu a putut fi stearsa'
        ];
        echo json_encode($res);
        return;
    }
}

?>