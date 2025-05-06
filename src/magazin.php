<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Magazin</title>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
</head>
<body style="padding-bottom: 100px;">

<!--Telefoane-->

<!-- Add telefon -->
<div class="modal fade" id="telefonAddModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adauga telefon</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="savetelefon">
            <div class="modal-body">

                <div id="errorMessage" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    Brand
                    <input type="text" name="brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Model
                    <input type="text" name="model" class="form-control" />
                </div>
                <div class="mb-3">
                    Tip ecran
                    <input type="text" name="ecran" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie interna (GB)
                    <input type="text" name="mem_interna" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie RAM (GB)
                    <input type="text" name="mem_ram" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                <button type="submit" class="btn btn-primary">Salveaza telefon</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit telefon Modal -->
<div class="modal fade" id="telefonEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editeaza telefon</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updatetelefon">
            <div class="modal-body">

                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                <input type="hidden" name="telefon_id" id="telefon_id" >

<div class="mb-3">
                    Brand
                    <input type="text" name="brand" id="brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Model
                    <input type="text" name="model" id="model" class="form-control" />
                </div>
                <div class="mb-3">
                    Tip ecran
                    <input type="text" name="ecran" id="ecran" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie interna (GB)
                    <input type="text" name="mem_interna" id="mem_interna" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie RAM (GB)
                    <input type="text" name="mem_ram" id="mem_ram" class="form-control" />
                </div>            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                <button type="submit" class="btn btn-primary">Actualizeaza telefon</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- View telefon Modal -->
<div class="modal fade" id="telefonViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Vezi telefon</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                
            <div class="mb-3">
                    Brand
                    <p id="view_brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Model
                    <p id="view_model" class="form-control" />
                </div>
                <div class="mb-3">
                    Tip ecran
                    <p id="view_ecran" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie interna (GB)
                    <p id="view_mem_interna" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie RAM (GB)
                    <p id="view_mem_ram" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
            </div>
        </div>
    </div>
</div>



<!--Calculatoare-->

<!-- Add calculator -->
<div class="modal fade" id="calculatorAddModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adauga calculator</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="savecalculator">
            <div class="modal-body">

                <div id="errorMessage2" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    Brand
                    <input type="text" name="brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Placa video
                    <input type="text" name="placa_video" class="form-control" />
                </div>
                <div class="mb-3">
                    Procesor
                    <input type="text" name="tip_procesor" class="form-control" />
                </div>
                <div class="mb-3">
                    Stocare
                    <input type="text" name="tip_stocare" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie RAM (GB)
                    <input type="text" name="mem_ram" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                <button type="submit" class="btn btn-primary">Salveaza calculator</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit calculator Modal -->
<div class="modal fade" id="calculatorEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editeaza calculator</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updatecalculator">
            <div class="modal-body">

                <div id="errorMessage2Update" class="alert alert-warning d-none"></div>

                <input type="hidden" name="calculator_id" id="calculator_id" >

<div class="mb-3">
                    Brand
                    <input type="text" name="brand" id="brand2" class="form-control" />
                </div>
                <div class="mb-3">
                    Placa video
                    <input type="text" name="placa_video" id="placa_video2" class="form-control" />
                </div>
                <div class="mb-3">
                    Procesor
                    <input type="text" name="tip_procesor" id="tip_procesor2" class="form-control" />
                </div>
                <div class="mb-3">
                    Stocare
                    <input type="text" name="tip_stocare" id="tip_stocare2" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie RAM (GB)
                    <input type="text" name="mem_ram" id="mem_ram2" class="form-control" />
                </div>            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                <button type="submit" class="btn btn-primary">Actualizeaza calculator</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- View calculator Modal -->
<div class="modal fade" id="calculatorViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Vezi calculator</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                
            <div class="mb-3">
                    Brand
                    <p id="view2_brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Placa video
                    <p id="view2_placa_video" class="form-control" />
                </div>
                <div class="mb-3">
                    Procesor
                    <p id="view2_tip_procesor" class="form-control" />
                </div>
                <div class="mb-3">
                    Stocare
                    <p id="view2_tip_stocare" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie RAM (GB)
                    <p id="view2_mem_ram" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
            </div>
        </div>
    </div>
</div>

<!--Laptopuri-->

<!-- Add laptop -->
<div class="modal fade" id="laptopAddModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adauga laptop</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="savelaptop">
            <div class="modal-body">

                <div id="errorMessage3" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    Brand
                    <input type="text" name="brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Placa video
                    <input type="text" name="placa_video" class="form-control" />
                </div>
                <div class="mb-3">
                    Procesor
                    <input type="text" name="tip_procesor" class="form-control" />
                </div>
                <div class="mb-3">
                    Tip ecran
                    <input type="text" name="ecran" class="form-control" />
                </div>
                <div class="mb-3">
                    Autonomie baterie (h)
                    <input type="text" name="autonomie_baterie" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                <button type="submit" class="btn btn-primary">Salveaza laptop</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit laptop Modal -->
<div class="modal fade" id="laptopEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editeaza laptop</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updatelaptop">
            <div class="modal-body">

                <div id="errorMessage3Update" class="alert alert-warning d-none"></div>

                <input type="hidden" name="laptop_id" id="laptop_id" >

<div class="mb-3">
                    Brand
                    <input type="text" name="brand" id="brand3" class="form-control" />
                </div>
                <div class="mb-3">
                    Placa video
                    <input type="text" name="placa_video" id="placa_video3" class="form-control" />
                </div>
                <div class="mb-3">
                    Procesor
                    <input type="text" name="tip_procesor" id="tip_procesor3" class="form-control" />
                </div>
                <div class="mb-3">
                    Tip ecran
                    <input type="text" name="ecran" id=ecran3" class="form-control" />
                </div>
                <div class="mb-3">
                    Autonomie baterie (h)
                    <input type="text" name="autonomie_baterie" id="autonomie_baterie3" class="form-control" />
                </div>            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                <button type="submit" class="btn btn-primary">Actualizeaza laptop</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- View laptop Modal -->
<div class="modal fade" id="laptopViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Vezi laptop</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                
            <div class="mb-3">
                    Brand
                    <p id="view3_brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Placa video
                    <p id="view3_placa_video" class="form-control" />
                </div>
                <div class="mb-3">
                    Procesor
                    <p id="view3_tip_procesor" class="form-control" />
                </div>
                <div class="mb-3">
                    Tip ecran
                    <p id="view3_ecran" class="form-control" />
                </div>
                <div class="mb-3">
                    Autonomie baterie (h)
                    <p id="view3_autonomie_baterie" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
            </div>
        </div>
    </div>
</div>

<!--Televizoare-->

<!-- Add televizor -->
<div class="modal fade" id="televizorAddModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adauga televizor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="savetelevizor">
            <div class="modal-body">

                <div id="errorMessage4" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    Brand
                    <input type="text" name="brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Claritate imagine
                    <input type="text" name="clar_imag" class="form-control" />
                </div>
                <div class="mb-3">
                    Clasa energetica
                    <input type="text" name="clasa_energ" class="form-control" />
                </div>
                <div class="mb-3">
                    Tip ecran
                    <input type="text" name="ecran" class="form-control" />
                </div>
                <div class="mb-3">
                    Dimensiune diagonala (cm)
                    <input type="text" name="dim_diagonala" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                <button type="submit" class="btn btn-primary">Salveaza televizor</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit televizor Modal -->
<div class="modal fade" id="televizorEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editeaza televizor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updatetelevizor">
            <div class="modal-body">

                <div id="errorMessage4Update" class="alert alert-warning d-none"></div>

                <input type="hidden" name="televizor_id" id="televizor_id" >

<div class="mb-3">
                    Brand
                    <input type="text" name="brand" id="brand4" class="form-control" />
                </div>
                <div class="mb-3">
                    Claritate imagine
                    <input type="text" name="clar_imag" id="clar_imag4" class="form-control" />
                </div>
                <div class="mb-3">
                    Clasa energetica
                    <input type="text" name="clasa_energ" id="clasa_energ4" class="form-control" />
                </div>
                <div class="mb-3">
                    Tip ecran
                    <input type="text" name="ecran" id="ecran4" class="form-control" />
                </div>
                <div class="mb-3">
                    Dimensiune diagonala (cm)
                    <input type="text" name="dim_diagonala" id="dim_diagonala4" class="form-control" />
                </div>            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                <button type="submit" class="btn btn-primary">Actualizeaza televizor</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- View televizor Modal -->
<div class="modal fade" id="televizorViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Vezi televizor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                
            <div class="mb-3">
                    Brand
                    <p id="view4_brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Claritate imagine
                    <p id="view4_clar_imag" class="form-control" />
                </div>
                <div class="mb-3">
                    Clasa energetica
                    <p id="view4_clasa_energ" class="form-control" />
                </div>
                <div class="mb-3">
                    Tip ecran
                    <p id="view4_ecran" class="form-control" />
                </div>
                <div class="mb-3">
                    Dimensiune diagonala (cm)
                    <p id="view4_dim_diagonala" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
            </div>
        </div>
    </div>
</div>

<!--Tablete-->

<!-- Add tableta -->
<div class="modal fade" id="tabletaAddModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adauga tableta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="savetableta">
            <div class="modal-body">

                <div id="errorMessage5" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    Brand
                    <input type="text" name="brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Rezolutie
                    <input type="text" name="rezolutie" class="form-control" />
                </div>
                <div class="mb-3">
                    Dimensiune diagonala (inch)
                    <input type="text" name="dim_diagonala" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie interna (GB)
                    <input type="text" name="mem_interna" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie RAM (GB)
                    <input type="text" name="mem_ram" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                <button type="submit" class="btn btn-primary">Salveaza tableta</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit tableta Modal -->
<div class="modal fade" id="tabletaEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editeaza tableta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updatetableta">
            <div class="modal-body">

                <div id="errorMessage5Update" class="alert alert-warning d-none"></div>

                <input type="hidden" name="tableta_id" id="tableta_id" >

<div class="mb-3">
                    Brand
                    <input type="text" name="brand" id="brand5" class="form-control" />
                </div>
                <div class="mb-3">
                    Rezolutie
                    <input type="text" name="rezolutie" id="rezolutie5" class="form-control" />
                </div>
                <div class="mb-3">
                    Dimensiune diagonala (inch)
                    <input type="text" name="dim_diagonala" id="dim_diagonala5" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie interna (GB)
                    <input type="text" name="mem_interna" id="mem_interna5" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie RAM (GB)
                    <input type="text" name="mem_ram" id="mem_ram5" class="form-control" />
                </div>            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                <button type="submit" class="btn btn-primary">Actualizeaza tableta</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- View tableta Modal -->
<div class="modal fade" id="tabletaViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Vezi tableta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                
            <div class="mb-3">
                    Brand
                    <p id="view5_brand" class="form-control" />
                </div>
                <div class="mb-3">
                    Rezolutie
                    <p id="view5_rezolutie" class="form-control" />
                </div>
                <div class="mb-3">
                    Dimensiune diagonala (inch)
                    <p id="view5_dim_diagonala" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie interna (GB)
                    <p id="view5_mem_interna" class="form-control" />
                </div>
                <div class="mb-3">
                    Memorie RAM (GB)
                    <p id="view5_mem_ram" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
            </div>
        </div>
    </div>
</div>

<!--afisare telefoane-->
<!--style="table-layout: fixed; -->
 <div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
    <h1 style="padding-bottom: 20px; text-align:center; font-size: 80px";>Magazin</h1>
            <div class="card">
                <div class="card-header">
                    <h4>Telefoane
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#telefonAddModal">
                            Adauga telefon
                        </button>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Tip ecran</th>
                                <th>Memorie interna (GB)</th>
                                <th>Memorie RAM (GB)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'dbcon.php';

                            $query = "SELECT * FROM telefoane";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $telefon)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $telefon['brand'] ?></td>
                                        <td><?= $telefon['model'] ?></td>
                                        <td><?= $telefon['ecran'] ?></td>
                                        <td><?= $telefon['mem_interna'] ?></td>
                                        <td><?= $telefon['mem_ram'] ?></td>
                                        <td align="right">
                                            <button type="button" value="<?=$telefon['id'];?>" class="viewtelefonBtn btn btn-info btn-sm">Vezi</button>
                                            <button type="button" value="<?=$telefon['id'];?>" class="edittelefonBtn btn btn-success btn-sm">Editeaza</button>
                                            <button type="button" value="<?=$telefon['id'];?>" class="deletetelefonBtn btn btn-danger btn-sm">Sterge</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

<!--afisare calculatoare -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Calculatoare
                        
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#calculatorAddModal">
                            Adauga calculator
                        </button>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="myTable2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>Brand</th>
                            <th>Placa video</th>
                            <th>Procesor</th>
                            <th>Stocare</th>
                            <th>Memorie RAM (GB)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'dbcon.php';

                            $query = "SELECT * FROM calculatoare";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $calculator)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $calculator['brand'] ?></td>
                                        <td><?= $calculator['placa_video'] ?></td>
                                        <td><?= $calculator['tip_procesor'] ?></td>
                                        <td><?= $calculator['tip_stocare'] ?></td>
                                        <td><?= $calculator['mem_ram'] ?></td>
                                        <td align="right">
                                            <button type="button" value="<?=$calculator['id'];?>" class="viewcalculatorBtn btn btn-info btn-sm">Vezi</button>
                                            <button type="button" value="<?=$calculator['id'];?>" class="editcalculatorBtn btn btn-success btn-sm">Editeaza</button>
                                            <button type="button" value="<?=$calculator['id'];?>" class="deletecalculatorBtn btn btn-danger btn-sm">Sterge</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
                        </div>


<!--afisare laptopuri-->
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laptopuri
                        
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#laptopAddModal">
                            Adauga laptop
                        </button>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="myTable3" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Placa video</th>
                                <th>Procesor</th>
                                <th>Tip ecran</th>
                                <th>Autonomie baterie (h)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'dbcon.php';

                            $query = "SELECT * FROM laptopuri";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $laptop)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $laptop['brand'] ?></td>
                                        <td><?= $laptop['placa_video'] ?></td>
                                        <td><?= $laptop['tip_procesor'] ?></td>
                                        <td><?= $laptop['ecran'] ?></td>
                                        <td><?= $laptop['autonomie_baterie'] ?></td>
                                        <td align="right">
                                            <button type="button" value="<?=$laptop['id'];?>" class="viewlaptopBtn btn btn-info btn-sm">Vezi</button>
                                            <button type="button" value="<?=$laptop['id'];?>" class="editlaptopBtn btn btn-success btn-sm">Editeaza</button>
                                            <button type="button" value="<?=$laptop['id'];?>" class="deletelaptopBtn btn btn-danger btn-sm">Sterge</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
  
<!--afisare televizoare-->
  <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Televizoare
                        
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#televizorAddModal">
                            Adauga televizor
                        </button>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="myTable4" class="table table-bordered table-striped" >
                        <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Claritate imagine</th>
                                <th>Clasa energie</th>
                                <th>Tip ecran</th>
                                <th>Diagonala (cm)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'dbcon.php';

                            $query = "SELECT * FROM televizoare";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $televizor)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $televizor['brand'] ?></td>
                                        <td><?= $televizor['clar_imag'] ?></td>
                                        <td><?= $televizor['clasa_energ'] ?></td>
                                        <td><?= $televizor['ecran'] ?></td>
                                        <td><?= $televizor['dim_diagonala'] ?></td>
                                        <td align="right">
                                            <button type="button" value="<?=$televizor['id'];?>" class="viewtelevizorBtn btn btn-info btn-sm">Vezi</button>
                                            <button type="button" value="<?=$televizor['id'];?>" class="edittelevizorBtn btn btn-success btn-sm">Editeaza</button>
                                            <button type="button" value="<?=$televizor['id'];?>" class="deletetelevizorBtn btn btn-danger btn-sm">Sterge</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>  

<!--afisare tablete-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tablete
                        
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#tabletaAddModal">
                            Adauga tableta
                        </button>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="myTable5" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Rezolutie</th>
                                <th>Diagonala (inch)</th>
                                <th>Stocare (GB)</th>
                                <th>RAM (GB)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'dbcon.php';

                            $query = "SELECT * FROM tablete";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $tableta)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $tableta['brand'] ?></td>
                                        <td><?= $tableta['rezolutie'] ?></td>
                                        <td><?= $tableta['dim_diagonala'] ?></td>
                                        <td><?= $tableta['mem_interna'] ?></td>
                                        <td><?= $tableta['mem_ram'] ?></td>
                                        <td align="right">
                                            <button type="button" value="<?=$tableta['id'];?>" class="viewtabletaBtn btn btn-info btn-sm">Vezi</button>
                                            <button type="button" value="<?=$tableta['id'];?>" class="edittabletaBtn btn btn-success btn-sm">Editeaza</button>
                                            <button type="button" value="<?=$tableta['id'];?>" class="deletetabletaBtn btn btn-danger btn-sm">Sterge</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>  



 </div>
<!--javascripts-->
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


    <script src="telefon.js"></script>
    <script src="calculator.js"></script>	
    <script src="laptop.js"></script>	
    <script src="televizor.js"></script>	
    <script src="tableta.js"></script>	
</body>
</html>