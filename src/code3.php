<?php

require 'dbcon.php';

if(isset($_POST['save_laptop']))
{
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $placa_video = mysqli_real_escape_string($con, $_POST['placa_video']);
    $tip_procesor = mysqli_real_escape_string($con, $_POST['tip_procesor']);
    $ecran = mysqli_real_escape_string($con, $_POST['ecran']);
    $autonomie_baterie = mysqli_real_escape_string($con, $_POST['autonomie_baterie']);


    if($brand == NULL || $placa_video == NULL || $tip_procesor == NULL || $ecran == NULL || $autonomie_baterie == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Toate campurile sunt obligatorii'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO laptopuri (brand,placa_video,tip_procesor,ecran,autonomie_baterie) VALUES ('$brand','$placa_video','$tip_procesor','$ecran','$autonomie_baterie')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'laptop adaugat cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'laptopul nu a fost creat'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_laptop']))
{
    $laptop_id = mysqli_real_escape_string($con, $_POST['laptop_id']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $placa_video = mysqli_real_escape_string($con, $_POST['placa_video']);
    $tip_procesor = mysqli_real_escape_string($con, $_POST['tip_procesor']);
    $ecran = mysqli_real_escape_string($con, $_POST['ecran']);
    $autonomie_baterie = mysqli_real_escape_string($con, $_POST['autonomie_baterie']);

    if($brand == NULL || $placa_video == NULL || $tip_procesor == NULL || $ecran == NULL || $autonomie_baterie == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Toate campurile sunt obligatorii'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE laptopuri SET brand='$brand', placa_video='$placa_video', tip_procesor='$tip_procesor', ecran='$ecran', autonomie_baterie='$autonomie_baterie'
                WHERE id='$laptop_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Laptop actualizat cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Laptop neactualizat'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['laptop_id']))
{
    $laptop_id = mysqli_real_escape_string($con, $_GET['laptop_id']);
    
    $query = "SELECT * FROM laptopuri WHERE id='$laptop_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $laptop = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Laptop incarcat cu succes dupa id',
            'data' => $laptop
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Laptop id negasit'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_laptop']))
{
    $laptop_id = mysqli_real_escape_string($con, $_POST['laptop_id']);

    $query = "DELETE FROM laptopuri WHERE id='$laptop_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Laptop sters cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Laptopul nu a putut fi sters'
        ];
        echo json_encode($res);
        return;
    }
}

?>