<?php

require 'dbcon.php';

if(isset($_POST['save_telefon']))
{
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $ecran = mysqli_real_escape_string($con, $_POST['ecran']);
    $mem_interna = mysqli_real_escape_string($con, $_POST['mem_interna']);
    $mem_ram = mysqli_real_escape_string($con, $_POST['mem_ram']);


    if($brand == NULL || $model == NULL || $ecran == NULL || $mem_interna == NULL || $mem_ram == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Toate campurile sunt obligatorii'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO telefoane (brand,model,ecran,mem_interna,mem_ram) VALUES ('$brand','$model','$ecran','$mem_interna','$mem_ram')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'telefon adaugat cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'telefonul nu a fost creat'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_telefon']))
{
    $telefon_id = mysqli_real_escape_string($con, $_POST['telefon_id']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $ecran = mysqli_real_escape_string($con, $_POST['ecran']);
    $mem_interna = mysqli_real_escape_string($con, $_POST['mem_interna']);
    $mem_ram = mysqli_real_escape_string($con, $_POST['mem_ram']);

    if($brand == NULL || $model == NULL || $ecran == NULL || $mem_interna == NULL || $mem_ram == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Toate campurile sunt obligatorii'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE telefoane SET brand='$brand', model='$model', ecran='$ecran', mem_interna='$mem_interna', mem_ram='$mem_ram'
                WHERE id='$telefon_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Telefon actualizat cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Telefon neactualizat'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['telefon_id']))
{
    $telefon_id = mysqli_real_escape_string($con, $_GET['telefon_id']);
    
    $query = "SELECT * FROM telefoane WHERE id='$telefon_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $telefon = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Telefon incarcat cu succes dupa id',
            'data' => $telefon
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Telefon id negasit'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_telefon']))
{
    $telefon_id = mysqli_real_escape_string($con, $_POST['telefon_id']);

    $query = "DELETE FROM telefoane WHERE id='$telefon_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Telefon sters cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Telefonul nu a putut fi sters'
        ];
        echo json_encode($res);
        return;
    }
}

?>