<?php

require 'dbcon.php';

if(isset($_POST['save_televizor']))
{
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $clar_imag = mysqli_real_escape_string($con, $_POST['clar_imag']);
    $clasa_energ = mysqli_real_escape_string($con, $_POST['clasa_energ']);
    $ecran = mysqli_real_escape_string($con, $_POST['ecran']);
    $dim_diagonala = mysqli_real_escape_string($con, $_POST['dim_diagonala']);


    if($brand == NULL || $clar_imag == NULL || $clasa_energ == NULL || $ecran == NULL || $dim_diagonala == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Toate campurile sunt obligatorii'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO televizoare (brand,clar_imag,clasa_energ,ecran,dim_diagonala) VALUES ('$brand','$clar_imag','$clasa_energ','$ecran','$dim_diagonala')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'televizor adaugat cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'televizorul nu a fost creat'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_televizor']))
{
    $televizor_id = mysqli_real_escape_string($con, $_POST['televizor_id']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $clar_imag = mysqli_real_escape_string($con, $_POST['clar_imag']);
    $clasa_energ = mysqli_real_escape_string($con, $_POST['clasa_energ']);
    $ecran = mysqli_real_escape_string($con, $_POST['ecran']);
    $dim_diagonala = mysqli_real_escape_string($con, $_POST['dim_diagonala']);

    if($brand == NULL || $clar_imag == NULL || $clasa_energ == NULL || $ecran == NULL || $dim_diagonala == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Toate campurile sunt obligatorii'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE televizoare SET brand='$brand', clar_imag='$clar_imag', clasa_energ='$clasa_energ', ecran='$ecran', dim_diagonala='$dim_diagonala'
                WHERE id='$televizor_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Televizor actualizat cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Televizor neactualizat'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['televizor_id']))
{
    $televizor_id = mysqli_real_escape_string($con, $_GET['televizor_id']);
    
    $query = "SELECT * FROM televizoare WHERE id='$televizor_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $televizor = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Televizor incarcat cu succes dupa id',
            'data' => $televizor
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Televizor id negasit'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_televizor']))
{
    $televizor_id = mysqli_real_escape_string($con, $_POST['televizor_id']);

    $query = "DELETE FROM televizoare WHERE id='$televizor_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Televizor sters cu succes'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Televizorul nu a putut fi sters'
        ];
        echo json_encode($res);
        return;
    }
}

?>