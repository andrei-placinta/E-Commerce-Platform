$(document).on('submit', '#savecalculator', function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    formData.append("save_calculator", true);

    $.ajax({
        type: "POST",
        url: "code2.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            
            var res = jQuery.parseJSON(response);
            if(res.status == 422) {
                $('#errorMessage2').removeClass('d-none');
                $('#errorMessage2').text(res.message);

            }else if(res.status == 200){

                $('#errorMessage2').addClass('d-none');
                $('#calculatorAddModal').modal('hide');
                $('#savecalculator')[0].reset();

                alertify.set('notifier','position', 'top-right');
                alertify.success(res.message);

                $('#myTable2').load(location.href + " #myTable2");

            }else if(res.status == 500) {
                alert(res.message);
            }
        }
    });

});

$(document).on('click', '.editcalculatorBtn', function () {

    var calculator_id = $(this).val();
    
    $.ajax({
        type: "GET",
        url: "code2.php?calculator_id=" + calculator_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
           
            if(res.status == 404) {

                alert(res.message);
            }else if(res.status == 200){
 
                $('#calculator_id').val(res.data.id);
                $('#brand2').val(res.data.brand);
                $('#placa_video2').val(res.data.placa_video);
                $('#tip_procesor2').val(res.data.tip_procesor);
                $('#tip_stocare2').val(res.data.tip_stocare);
                $('#mem_ram2').val(res.data.mem_ram);

                $('#calculatorEditModal').modal('show');
            }

        }
    });

});

$(document).on('submit', '#updatecalculator', function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    formData.append("update_calculator", true);

    $.ajax({
        type: "POST",
        url: "code2.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 422) {
                $('#errorMessage2Update').removeClass('d-none');
                $('#errorMessage2Update').text(res.message);

            }else if(res.status == 200){

                $('#errorMessage2Update').addClass('d-none');

                alertify.set('notifier','position', 'top-right');
                alertify.success(res.message);
                
                $('#calculatorEditModal').modal('hide');
                $('#updatecalculator')[0].reset();

                $('#myTable2').load(location.href + " #myTable2");

            }else if(res.status == 500) {
                alert(res.message);
            }
        }
    });

});

$(document).on('click', '.viewcalculatorBtn', function () {

    var calculator_id = $(this).val();
    $.ajax({
        type: "GET",
        url: "code2.php?calculator_id=" + calculator_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 404) {

                alert(res.message);
            }else if(res.status == 200){
                $('#view2_brand').text(res.data.brand);
                $('#view2_placa_video').text(res.data.placa_video);
                $('#view2_tip_procesor').text(res.data.tip_procesor);
                $('#view2_tip_stocare').text(res.data.tip_stocare);
                $('#view2_mem_ram').text(res.data.mem_ram);

                $('#calculatorViewModal').modal('show');
            }
        }
    });
});

$(document).on('click', '.deletecalculatorBtn', function (e) {
    e.preventDefault();

    if(confirm('Esti sigur ca vrei sa stergi?'))
    {
        var calculator_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "code2.php",
            data: {
                'delete_calculator': true,
                'calculator_id': calculator_id
            },
            success: function (response) {

                var res = jQuery.parseJSON(response);
                if(res.status == 500) {

                    alert(res.message);
                }else{
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);

                    $('#myTable2').load(location.href + " #myTable2");
                }
            }
        });
    }
});