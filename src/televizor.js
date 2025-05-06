 $(document).on('submit', '#savetelevizor', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_televizor", true);

            $.ajax({
                type: "POST",
                url: "code4.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage4').removeClass('d-none');
                        $('#errorMessage4').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage4').addClass('d-none');
                        $('#televizorAddModal').modal('hide');
                        $('#savetelevizor')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable4').load(location.href + " #myTable4");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.edittelevizorBtn', function () {

            var televizor_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code4.php?televizor_id=" + televizor_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                   
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#televizor_id').val(res.data.id);
                        $('#brand4').val(res.data.brand);
                        $('#clar_imag4').val(res.data.clar_imag);
                        $('#clasa_energ4').val(res.data.clasa_energ);
                        $('#ecran4').val(res.data.ecran);
                        $('#dim_diagonala4').val(res.data.dim_diagonala);

                        $('#televizorEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updatetelevizor', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_televizor", true);

            $.ajax({
                type: "POST",
                url: "code4.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage4Update').removeClass('d-none');
                        $('#errorMessage4Update').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage4Update').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#televizorEditModal').modal('hide');
                        $('#updatetelevizor')[0].reset();

                        $('#myTable4').load(location.href + " #myTable4");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewtelevizorBtn', function () {

            var televizor_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code4.php?televizor_id=" + televizor_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){
                        $('#view4_brand').text(res.data.brand);
                        $('#view4_clar_imag').text(res.data.clar_imag);
                        $('#view4_clasa_energ').text(res.data.clasa_energ);
                        $('#view4_ecran').text(res.data.ecran);
                        $('#view4_dim_diagonala').text(res.data.dim_diagonala);

                        $('#televizorViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deletetelevizorBtn', function (e) {
            e.preventDefault();

            if(confirm('Esti sigur ca vrei sa stergi?'))
            {
                var televizor_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code4.php",
                    data: {
                        'delete_televizor': true,
                        'televizor_id': televizor_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable4').load(location.href + " #myTable4");
                        }
                    }
                });
            }
        });