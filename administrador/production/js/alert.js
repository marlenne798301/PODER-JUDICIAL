function logout() {
        Swal.fire({
            title: '¿Desea cerrar la sesion?',
            text: "Para volver a acceder necesitará iniciar sesión nuevamente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Cerrar sesión',
            customClass: {
                confirmButton: 'swal-button swal-button--confirm',
                cancelButton: 'swal-button swal-button--cancel',
            },
            buttonsStyling: false,
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Sesión terminada',
                    html: 'Para poder acceder a este contenido necesitarás permisos de administrador!',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                    },
                    willClose: () => {
                        window.open('logout.php', '_self');
                    }
                });
            }
        })
    }
    function indexphp(){
        Swal.fire({
            title: 'Esta llendo a la página de inicio del Poder Judicial',
            html: 'La sesion de administrador no ha sido terminada aún!',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
            },
            willClose: () => {
                window.open('../../index.php', '_self');
            }
        });
    }