$('#ej4').bootstrapValidator({

    message: 'Este valor no es valido',

    fields: {

        titulo: {

            validators: {

                notEmpty: {

                    message: 'El nombre de usuario es requerido'

                }

            }

        },

        apellido: {

            validators: {

                notEmpty: {

                    message: 'el apellido es obligatorio'

                }

            }

        },

        edad: {

            validators: {

                maxLength: {

                    message: 'ingrese un valor menor a 150'

                }

            }

        }

    }

});
