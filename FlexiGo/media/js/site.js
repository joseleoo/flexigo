$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
(function () {
    'use strict';
    $("#frmCliente").validate({
        rules: {
            idcliente: { required: true, maxlength: 255 },
            nif: { required: true }

        }
    });
