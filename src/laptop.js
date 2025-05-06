 $(document).on('submit', '#savelaptop', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_laptop", true);

            $.ajax({
                type: "POST",
                url: "code3.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage3').removeClass('d-none');
                        $('#errorMessage3').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage3').addClass('d-none');
                        $('#laptopAddModal').modal('hide');
                        $('#savelaptop')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable3').load(location.href + " #myTable3");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.editlaptopBtn', function () {

            var laptop_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code3.php?laptop_id=" + laptop_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                   
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#laptop_id').val(res.data.id);
                        $('#brand3').val(res.data.brand);
                        $('#placa_video3').val(res.data.placa_video);
                        $('#tip_procesor3').val(res.data.tip_procesor);
                        $('#ecran3').val(res.data.ecran);
                        $('#autonomie_baterie3').val(res.data.autonomie_baterie);

                        $('#laptopEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updatelaptop', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_laptop", true);

            $.ajax({
                type: "POST",
                url: "code3.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage3Update').removeClass('d-none');
                        $('#errorMessage3Update').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage3Update').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#laptopEditModal').modal('hide');
                        $('#updatelaptop')[0].reset();

                        $('#myTable3').load(location.href + " #myTable3");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewlaptopBtn', function () {

            var laptop_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code3.php?laptop_id=" + laptop_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){
                        $('#view3_brand').text(res.data.brand);
                        $('#view3_placa_video').text(res.data.placa_video);
                        $('#view3_tip_procesor').text(res.data.tip_procesor);
                        $('#view3_ecran').text(res.data.ecran);
                        $('#view3_autonomie_baterie').text(res.data.autonomie_baterie);

                        $('#laptopViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deletelaptopBtn', function (e) {
            e.preventDefault();

            if(confirm('Esti sigur ca vrei sa stergi?'))
            {
                var laptop_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code3.php",
                    data: {
                        'delete_laptop': true,
                        'laptop_id': laptop_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable3').load(location.href + " #myTable3");
                        }
                    }
                });
            }
        });