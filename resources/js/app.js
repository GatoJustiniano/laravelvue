require('./bootstrap');

Echo.private('notifications')
    .listen('UserSessionChanged', (e) => {
        const notificationElement = document.getElementById('notification');

        notificationElement.innerText = e.message;

        notificationElement.classList.remove('invisible');
        notificationElement.classList.remove('alert-success');
        notificationElement.classList.remove('alert-danger');

        notificationElement.classList.add('alert-' + e.type);

        Swal.fire({
            position: 'bottom-end',
            icon: e.type,
            title: e.message,
            showConfirmButton: false,
            timer: 5000
        });
    });


