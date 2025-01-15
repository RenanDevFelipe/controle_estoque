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
        const LoginP = document.querySelector('.loginP');
        const Loading = document.querySelector('.loading');

        Loading.style.display = 'block'
        LoginP.style.display = 'none'

        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    Toast.fire({
                        icon: "success",
                        title: response.success
                    });

                    window.location.href = '/controle_estoque/dashboard'


                } else {
                    Toast.fire({
                        icon: "error",
                        title: response.error
                    })

                    Loading.style.display = 'none'
                    LoginP.style.display = 'block'
                }
            },

            error: function (xhr, status, error) {
                Toast.fire({
                    icon: "error",
                    title: "Erro no Login " + status
                });

                Loading.style.display = 'none'
                LoginP.style.display = 'block'


            }
        });
    });
})