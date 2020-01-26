$(function () {
    jQuery.validator.setDefaults({

        success: "valid"
    });
    $("#save").on("click", function () {


        jQuery.validator.addMethod("last", function (value, element) {
            return this.optional(element) || /^[a-z|A-Z|0-9]+[^I]\s?[a-z|A-Z|]{1}$/.test(value);
        }, "El nif debe termninar en letra");
        $("#formClient").validate(
            {

                rules: {
                    idClient: {

                        required: true,
                        minlength: 8,
                        last: true,
                    },

                },
                messages: {
                    idClient: {
                        required: 'campo requerido',
                        minlength: jQuery.validator.format("Escriba por lo menos {0} caracteres!")
                    }
                }


            }
        )


    })

});
