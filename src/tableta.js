 $(document).on('submit', '#savetableta', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_tableta", true);

            $.ajax({
                type: "POST",
                url: "code5.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage5').removeClass('d-none');
                        $('#errorMessage5').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage5').addClass('d-none');
                        $('#tabletaAddModal').modal('hide');
                        $('#savetableta')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable5').load(location.href + " #myTable5");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.edittabletaBtn', function () {

            var tableta_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code5.php?tableta_id=" + tableta_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                   
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#tableta_id').val(res.data.id);
                        $('#brand5').val(res.data.brand);
                        $('#rezolutie5').val(res.data.rezolutie);
                        $('#dim_diagonala5').val(res.data.dim_diagonala);
                        $('#mem_interna5').val(res.data.mem_interna);
                        $('#mem_ram5').val(res.data.mem_ram);

                        $('#tabletaEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updatetableta', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_tableta", true);

            $.ajax({
                type: "POST",
                url: "code5.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage5Update').removeClass('d-none');
                        $('#errorMessage5Update').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage5Update').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#tabletaEditModal').modal('hide');
                        $('#updatetableta')[0].reset();

                        $('#myTable5').load(location.href + " #myTable5");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewtabletaBtn', function () {

            var tableta_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code5.php?tableta_id=" + tableta_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){
                        $('#view5_brand').text(res.data.brand);
                        $('#view5_rezolutie').text(res.data.rezolutie);
                        $('#view5_dim_diagonala').text(res.data.dim_diagonala);
                        $('#view5_mem_interna').text(res.data.mem_interna);
                        $('#view5_mem_ram').text(res.data.mem_ram);

                        $('#tabletaViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deletetabletaBtn', function (e) {
            e.preventDefault();

            if(confirm('Esti sigur ca vrei sa stergi?'))
            {
                var tableta_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code5.php",
                    data: {
                        'delete_tableta': true,
                        'tableta_id': tableta_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable5').load(location.href + " #myTable5");
                        }
                    }
                });
            }
        });