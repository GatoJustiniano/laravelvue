/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// import MyUploadAdapter from './assets/ckeditor/MyUploadAdapter.js' ;
// import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import Echo from 'laravel-echo';

window.Echo.private('notifications')
    .listen('UserSessionChanged', (e) => {
        const newLocal = document.getElementById('notification');
        const notificationElement = newLocal;

        notificationElement.innerText = e.message;
        notificationElement.classList.remove('invisible');
        notificationElement.classList.remove('alert-success');
        notificationElement.classList.remove('alert-danger');

        notificationElement.classList.add('alert-'+e.type);
        console.log('Hola mundo, funciona por debajo');
});


// function MyCustomUploadAdapterPlugin( editor ) {
//     editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
//         // Configure the URL to the upload script in your back-end here!
//         return new MyUploadAdapter( loader );
//     };
// }

// ...

// ClassicEditor
//     .create( document.querySelector( '#content' ), {
//         extraPlugins: [ MyCustomUploadAdapterPlugin ],

//         // ...
//     } )
//     .catch( error => {
//         console.log( error );
//     } );

//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////

