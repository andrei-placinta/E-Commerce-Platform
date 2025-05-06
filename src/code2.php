<?php

require 'dbcon.php';

if(isset($_POST['save_calculator']))
{
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $placa_video = mysqli_real_escape_string($con, $_POST['placa_video']);
    $tip_procesor = mysqli_real_escape_string($con, $_POST['tip_procesor']);
    $tip_stocare = mysqli_real_escape_string($con, $_POST['tip_stocare']);
    $mem_ram = mysqli_real_escape_string($con, $_POST['mem_ram']);


    if($brand == NULL || $placa_video == NULL || $tip_procesor == NULL || $tip_stocare == NULL || $mem_ram == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Toate campurile sunt obligatorii'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO calculatoare (brand,placa_video,tip_procesor,tip_stocare,mem_ram) VALUES ('$brand','$placa_video','$tip_procesor','$tip_stocare','$mem_ram')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'calculator adaugat cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'calculatorul nu a fost creat'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_calculator']))
{
    $calculator_id = mysqli_real_escape_string($con, $_POST['calculator_id']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $placa_video = mysqli_real_escape_string($con, $_POST['placa_video']);
    $tip_procesor = mysqli_real_escape_string($con, $_POST['tip_procesor']);
    $tip_stocare = mysqli_real_escape_string($con, $_POST['tip_stocare']);
    $mem_ram = mysqli_real_escape_string($con, $_POST['mem_ram']);

    if($brand == NULL || $placa_video == NULL || $tip_procesor == NULL || $tip_stocare == NULL || $mem_ram == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Toate campurile sunt obligatorii'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE calculatoare SET brand='$brand', placa_video='$placa_video', tip_procesor='$tip_procesor', tip_stocare='$tip_stocare', mem_ram='$mem_ram'
                WHERE id='$calculator_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Calculator actualizat cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Calculator neactualizat'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['calculator_id']))
{
    $calculator_id = mysqli_real_escape_string($con, $_GET['calculator_id']);
    
    $query = "SELECT * FROM calculatoare WHERE id='$calculator_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $calculator = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Calculator incarcat cu succes dupa id',
            'data' => $calculator
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Calculator id negasit'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_calculator']))
{
    $calculator_id = mysqli_real_escape_string($con, $_POST['calculator_id']);

    $query = "DELETE FROM calculatoare WHERE id='$calculator_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Calculator sters cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Calculatorul nu a putut fi sters'
        ];
        echo json_encode($res);
        return;
    }
}

?>