(function (document) {
    'use strict';

    let pp;
    const selector = 'mypolipop';

    function initPolipop(selector, options) {
        if (document.querySelector(selector))
            document.querySelector(selector).remove();

        pp = new Polipop(selector, options);
    }

    document.addEventListener('DOMContentLoaded', function () {
        const options = {
            layout: 'popups',
            position: 'top-right',
            theme: 'default',
            icons: true,
            insert: 'before',
            pool: 0,
            sticky: false,
            pauseOnHover: true,
            life: 4000,
            progressbar: true,
            effect: 'slide',
            easing: 'ease-in-out',
        };

        initPolipop(selector, options);

        // Info


        // duyet
        const duyet = document.querySelector('#duyet');

        duyet.addEventListener('click', function (e) {
            e.preventDefault();

            pp.add({
                type: 'success',
                title: 'Duyệt thành công!!!',
                content: '',
            });
        });
        // choduyet
        const choduyet = document.querySelector('#choduyet');

        choduyet.addEventListener('click', function (e) {
            e.preventDefault();

            pp.add({
                type: 'success',
                title: 'Từ chối duyệt!!!',
                content: '',
            });
        });

        //guidanhgia
        const guidanhgia = document.querySelector('#guidanhgia');

        guidanhgia.addEventListener('click', function (e) {
            e.preventDefault();

            pp.add({
                type: 'success',
                title: 'Success',
                content: 'Gửi thành công!!!',
            });
        });

         // Info
        const info = document.querySelector('#info');

        info.addEventListener('click', function (e) {
            e.preventDefault();

            pp.add({
                type: 'info',
                title: 'Info',
                content: 'This is an info message.',
            });
        });

        // Warning
        const warning = document.querySelector('#warning');

        warning.addEventListener('click', function (e) {
            e.preventDefault();

            pp.add({
                type: 'warning',
                title: 'Warning',
                content: 'This is a warning message.',
            });
        });

        // Error
        const error = document.querySelector('#error');

        error.addEventListener('click', function (e) {
            e.preventDefault();

            pp.add({
                type: 'error',
                title: 'Error',
                content: 'This is an error message.',
            });
        });

        // Default
        const message = document.querySelector('#message');

        message.addEventListener('click', function (e) {
            e.preventDefault();

            pp.add({
                type: 'default',
                title: 'Message',
                content: 'This is a default message.',
            });
        });

    });
})(document);
