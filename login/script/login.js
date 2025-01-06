const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});

$(document).ready(function () {
    $('#formLogin').submit(function (e) {
        e.preventDefault();


        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.success){
                    Toast.fire({
                        icon: "success",
                        title: response.success
                    });


                }else{
                    Toast.fire({
                        icon: "error",
                        title: response.error
                    })
                }
            },

            error: function (xhr, status, error) {
                Toast.fire({
                    icon: "error",
                    title: "Erro no Login " + status
                });


            }
        });
    });
})