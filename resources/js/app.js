require('./bootstrap');

Echo.private('notifications')
    .listen('UserSessionChanged', (e) => {
        Swal.fire({
            position: 'bottom-end',
            icon: e.type,
            title: e.message,
            showConfirmButton: false,
            timer: 5000
        });        
    }
);


