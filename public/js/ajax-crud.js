/**
 * Created by edgar on 01/06/16.
 */
$(document).ready(function(){

    //create new User
    $("#btn_add").click(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        e.preventDefault();

        var formData = $('#formulario').serialize();

       $.ajax({
           url: '/home',
           method: 'POST',
           data: formData,
           dataType: 'json',
           //headers: {'Content-Type': 'application/x-www-form-urlencoded'},
           contentType: "application/json",
            success: function (data) {
                alert('Success');
                $('#myModal').modal('hide');
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
});