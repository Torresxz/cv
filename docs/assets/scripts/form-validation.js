$("#nuevo-aspirante").validate({
    rules: {
        nombre_aspirante: "required",
        apellido_paterno: "required",
        apellido_materno: "required",
    },
    messages: {
        nombre_aspirante: "Debe ingresar su nombre",
        apellido_paterno: "Debe ingresar su apellido paterno",
        apellido_materno: "Debe ingresar su apellido materno",
    }
});
