document.addEventListener('DOMContentLoaded', function () {
    if (typeof sweetAlertMessage !== 'undefined' && sweetAlertMessage) {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: sweetAlertMessage,
            confirmButtonText: 'OK'
        });
    }
});
