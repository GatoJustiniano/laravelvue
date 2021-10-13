/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import router from './assets/router.js' ;

import MyUploadAdapter from './assets/ckeditor/MyUploadAdapter.js' ;
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';




function MyCustomUploadAdapterPlugin( editor ) {
    editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
        // Configure the URL to the upload script in your back-end here!
        return new MyUploadAdapter( loader );
    };
}

// ...

ClassicEditor
    .create( document.querySelector( '#content' ), {
        extraPlugins: [ MyCustomUploadAdapterPlugin ],

        // ...
    } )
    .catch( error => {
        console.log( error );
    } );

//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component(
    'modal-post', 
    require('./components/PostModalComponent.vue').default
);
Vue.component(
    'post-list-default', 
    require('./components/PostListDefaultComponent.vue').default
);


const app = new Vue({
    el: '#app',
    router,
});
