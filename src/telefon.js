 $(document).on('submit', '#savetelefon', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_telefon", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#telefonAddModal').modal('hide');
                        $('#savetelefon')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.edittelefonBtn', function () {

            var telefon_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code.php?telefon_id=" + telefon_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                   
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#telefon_id').val(res.data.id);
                        $('#brand').val(res.data.brand);
                        $('#model').val(res.data.model);
                        $('#ecran').val(res.data.ecran);
                        $('#mem_interna').val(res.data.mem_interna);
                        $('#mem_ram').val(res.data.mem_ram);

                        $('#telefonEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updatetelefon', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_telefon", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#telefonEditModal').modal('hide');
                        $('#updatetelefon')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewtelefonBtn', function () {

            var telefon_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code.php?telefon_id=" + telefon_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){
                        $('#view_brand').text(res.data.brand);
                        $('#view_model').text(res.data.model);
                        $('#view_ecran').text(res.data.ecran);
                        $('#view_mem_interna').text(res.data.mem_interna);
                        $('#view_mem_ram').text(res.data.mem_ram);

                        $('#telefonViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deletetelefonBtn', function (e) {
            e.preventDefault();

            if(confirm('Esti sigur ca vrei sa stergi?'))
            {
                var telefon_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_telefon': true,
                        'telefon_id': telefon_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });