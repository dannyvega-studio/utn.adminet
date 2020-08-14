$('#registrarEmpleado').click(function(event) { 

    //declaracion de variables//
    var Nombre1, Nombre2, Apellido1, Apellido2, E_MAIL, Domicilio, Telefono, ID_Supervisor, ID_Departamento,
    expresionCorreo, expresionCorreoOficial, expresionTelefono;

    //captura de datos usando jquery//
    Nombre1 = $('#Nombre1').val();
    Nombre2 = $('#Nombre2').val();
    Apellido1 = $('#Apellido1').val();
    Apellido2 = $('#Apellido2').val();
    E_MAIL = $('#E_MAIL').val();
    Domicilio = $('#Domicilio').val();
    Telefono = $('#Telefono').val();
    ID_Supervisor = $('#ID_Supervisor').val();
    ID_Departamento = $('#ID_Departamento').val();

    expresionCorreo=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    expresionCorreoOficial=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    expresionTelefono=/^[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){2}\d{3}|(\d{2}[\*\.\-\s]){3}\d{2}|(\d{4}[\*\.\-\s]){1}\d{4})|\d{8}|\d{10}|\d{12}$/;
    
    //condicionantes para no dejar campos vacios//
    if(Nombre1.length == 0 || Nombre2.length == 0 || Apellido1.length == 0 || Apellido2.length == 0 ||
        E_MAIL.length == 0 || Domicilio.length == 0 || Telefono.length == 0 || 
        ID_Supervisor.length == 0 || ID_Departamento.length == 0) {
        Swal.fire("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(Nombre1.length>45){
        Swal.fire("Error", "El primer nombre es muy largo", "error");
        return false;
    } else if(Nombre2.length>45){
        Swal.fire("Error", "El segundo nombre es muy largo", "error");
        return false;
    } else if(Apellido1.length>45){
        Swal.fire("Error", "El primer apellido es muy largo", "error");
        return false;
    } else if(Apellido2.length>45){
        Swal.fire("Error", "El segundo apellido es muy largo", "error");
        return false;
    } else if(E_MAIL.length>45){
        Swal.fire("Error", "El correo es muy largo", "error");
        return false;
    } else if(!expresionCorreo.test(E_MAIL) && !expresionCorreoOficial.test(E_MAIL)){
        Swal.fire("Error", "El correo no es valido", "error");
        return false;
    } else if(Domicilio.length>45){
        Swal.fire("Error", "El domicilio es muy largo", "error");
        return false;
    }else if(isNaN(Telefono)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el Telefono", "error");
        return false;
    } else if(!expresionTelefono.test(Telefono)){
        Swal.fire("Error", "Favor de solo ingresar 10 NUMEROS en el Telefono", "error");
        return false;
    } else if(Telefono.length!== 10){
        Swal.fire("Error", "Favor de solo ingresar 10 DIGITOS en el telefono", "error");
        return false;
    }else if(isNaN(ID_Supervisor)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Supervisor", "error");
        return false;
    }else if(isNaN(ID_Departamento)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Departamento", "error");
        return false;
    }

    Swal.fire("Success", "Empleado registado correctamente", "success");

});

$('#actualizarEmpleado').click(function(event) { 

    //declaracion de variables//
    var Nombre1, Nombre2, Apellido1, Apellido2, E_MAIL, Domicilio, Telefono, ID_Supervisor, ID_Departamento,
    expresionCorreo, expresionCorreoOficial, expresionTelefono;

    //captura de datos usando jquery//
    Nombre1 = $('#Nombre1').val();
    Nombre2 = $('#Nombre2').val();
    Apellido1 = $('#Apellido1').val();
    Apellido2 = $('#Apellido2').val();
    E_MAIL = $('#E_MAIL').val();
    Domicilio = $('#Domicilio').val();
    Telefono = $('#Telefono').val();
    ID_Supervisor = $('#ID_Supervisor').val();
    ID_Departamento = $('#ID_Departamento').val();

    expresionCorreo=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    expresionCorreoOficial=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    expresionTelefono=/^[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){2}\d{3}|(\d{2}[\*\.\-\s]){3}\d{2}|(\d{4}[\*\.\-\s]){1}\d{4})|\d{8}|\d{10}|\d{12}$/;
    
    //condicionantes para no dejar campos vacios//
    if(Nombre1.length == 0 || Nombre2.length == 0 || Apellido1.length == 0 || Apellido2.length == 0 ||
        E_MAIL.length == 0 || Domicilio.length == 0 || Telefono.length == 0 || 
        ID_Supervisor.length == 0 || ID_Departamento.length == 0) {
        Swal.fire("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(Nombre1.length>45){
        Swal.fire("Error", "El primer nombre es muy largo", "error");
        return false;
    } else if(Nombre2.length>45){
        Swal.fire("Error", "El segundo nombre es muy largo", "error");
        return false;
    } else if(Apellido1.length>45){
        Swal.fire("Error", "El primer apellido es muy largo", "error");
        return false;
    } else if(Apellido2.length>45){
        Swal.fire("Error", "El segundo apellido es muy largo", "error");
        return false;
    } else if(E_MAIL.length>45){
        Swal.fire("Error", "El correo es muy largo", "error");
        return false;
    } else if(!expresionCorreo.test(E_MAIL) && !expresionCorreoOficial.test(E_MAIL)){
        Swal.fire("Error", "El correo no es valido", "error");
        return false;
    } else if(Domicilio.length>45){
        Swal.fire("Error", "El domicilio es muy largo", "error");
        return false;
    }else if(isNaN(Telefono)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el Telefono", "error");
        return false;
    } else if(!expresionTelefono.test(Telefono)){
        Swal.fire("Error", "Favor de solo ingresar 10 NUMEROS en el Telefono", "error");
        return false;
    } else if(Telefono.length!== 10){
        Swal.fire("Error", "Favor de solo ingresar 10 DIGITOS en el telefono", "error");
        return false;
    }else if(isNaN(ID_Supervisor)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Supervisor", "error");
        return false;
    }else if(isNaN(ID_Departamento)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Departamento", "error");
        return false;
    }

    Swal.fire("Success", "Empleado actualizado correctamente", "success");

});

$('#registrarContrato').click(function(event) { 

    //declaracion de variables//
    var ID_Departamento, ID_Puesto, Fecha_Contrato, Fecha_Renovacion_Contrato, Sueldo,
    expresionFecha;

    //captura de datos usando jquery//
    ID_Departamento = $('#ID_Departamento').val();
    ID_Puesto = $('#ID_Puesto').val();
    Fecha_Contrato = $('#Fecha_Contrato').val();
    Fecha_Renovacion_Contrato = $('#Fecha_Renovacion_Contrato').val();
    Sueldo = $('#Sueldo').val();

    expresionFecha=/^\d{4}[\-\/\s]?((((0[13578])|(1[02]))[\-\/\s]?(([0-2][0-9])|(3[01])))|(((0[469])|(11))[\-\/\s]?(([0-2][0-9])|(30)))|(02[\-\/\s]?[0-2][0-9]))$/;

    //condicionantes para no dejar campos vacios//
    if(ID_Departamento.length == 0 || ID_Puesto.length == 0 || Fecha_Contrato.length == 0 || 
        Fecha_Renovacion_Contrato.length == 0 || Sueldo.length == 0) {
        Swal.fire("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(isNaN(ID_Departamento)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Departamento", "error");
        return false;
    } else if(isNaN(ID_Puesto)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Puesto", "error");
        return false;
    } else if(!expresionFecha.test(Fecha_Contrato)){
        Swal.fire("Error", "Favor de ingresar fecha de contrato en este formato: yyyy/mm/dd", "error");
        return false;
    } else if(!expresionFecha.test(Fecha_Renovacion_Contrato)){
        Swal.fire("Error", "Favor de ingresar fecha de renovacion de contrato en este formato: yyyy/mm/dd", "error");
        return false;
    } else if(isNaN(Sueldo)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el Sueldo", "error");
        return false;
    }

    Swal.fire("Success", "Contrato registado correctamente", "success");

});

$('#actualizarContrato').click(function(event) { 

    //declaracion de variables//
    var ID_Departamento, ID_Puesto, Fecha_Contrato, Fecha_Renovacion_Contrato, Sueldo,
    expresionFecha;

    //captura de datos usando jquery//
    ID_Departamento = $('#ID_Departamento').val();
    ID_Puesto = $('#ID_Puesto').val();
    Fecha_Contrato = $('#Fecha_Contrato').val();
    Fecha_Renovacion_Contrato = $('#Fecha_Renovacion_Contrato').val();
    Sueldo = $('#Sueldo').val();

    expresionFecha=/^\d{4}[\-\/\s]?((((0[13578])|(1[02]))[\-\/\s]?(([0-2][0-9])|(3[01])))|(((0[469])|(11))[\-\/\s]?(([0-2][0-9])|(30)))|(02[\-\/\s]?[0-2][0-9]))$/;

    //condicionantes para no dejar campos vacios//
    if(ID_Departamento.length == 0 || ID_Puesto.length == 0 || Fecha_Contrato.length == 0 || 
        Fecha_Renovacion_Contrato.length == 0 || Sueldo.length == 0) {
        Swal.fire("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(isNaN(ID_Departamento)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Departamento", "error");
        return false;
    } else if(isNaN(ID_Puesto)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Puesto", "error");
        return false;
    } else if(!expresionFecha.test(Fecha_Contrato)){
        Swal.fire("Error", "Favor de ingresar fecha de contrato en este formato: yyyy/mm/dd", "error");
        return false;
    } else if(!expresionFecha.test(Fecha_Renovacion_Contrato)){
        Swal.fire("Error", "Favor de ingresar fecha de renovacion de contrato en este formato: yyyy/mm/dd", "error");
        return false;
    } else if(isNaN(Sueldo)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el Sueldo", "error");
        return false;
    }

    Swal.fire("Success", "Contrato actualizado correctamente", "success");

});

$('#registrarDepartamento').click(function(event) { 

    //declaracion de variables//
    var Nombre_Departamento, ID_Director;

    //captura de datos usando jquery//
    Nombre_Departamento = $('#Nombre_Departamento').val();
    ID_Director = $('#ID_Director').val();

    //condicionantes para no dejar campos vacios//
    if(Nombre_Departamento.length == 0 || ID_Director.length == 0) {
        Swal.fire("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(Nombre_Departamento.length>45){
        Swal.fire("Error", "El Nombre del Departamento es muy largo", "error");
        return false;
    } else if(isNaN(ID_Director)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Director", "error");
        return false;
    } else if(ID_Director.length>11){
        Swal.fire("Error", "El ID del Director del Departamento es muy largo", "error");
        return false;
    }

    Swal.fire("Success", "Departamento registado correctamente", "success");

});

$('#actualizarDepartamento').click(function(event) { 

    //declaracion de variables//
    var Nombre_Departamento, ID_Director;

    //captura de datos usando jquery//
    Nombre_Departamento = $('#Nombre_Departamento').val();
    ID_Director = $('#ID_Director').val();

    //condicionantes para no dejar campos vacios//
    if(Nombre_Departamento.length == 0 || ID_Director.length == 0) {
        Swal.fire("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(Nombre_Departamento.length>45){
        Swal.fire("Error", "El Nombre del Departamento es muy largo", "error");
        return false;
    } else if(isNaN(ID_Director)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Director", "error");
        return false;
    } else if(ID_Director.length>11){
        Swal.fire("Error", "El ID del Director del Departamento es muy largo", "error");
        return false;
    }

    Swal.fire("Success", "Departamento actualizado correctamente", "success");

});

$('#registrarEmpresaCliente').click(function(event) { 

    //declaracion de variables//
    var Nombre_Empresa, RFC_Empresa, Ubicacion_Empresa, Telefono_Empresa, Correo_Empresa,
    expresionCorreo, expresionCorreoOficial;

    //captura de datos usando jquery//
    Nombre_Empresa = $('#Nombre_Empresa').val();
    RFC_Empresa = $('#RFC_Empresa').val();
    Ubicacion_Empresa = $('#Ubicacion_Empresa').val();
    Telefono_Empresa = $('#Telefono_Empresa').val();
    Correo_Empresa = $('#Correo_Empresa').val();

    expresionRFC=/^[a-zA-Z]{3,4}(\d{6})((\D|\d){2,3})?$/;
    /*EL rfc VALIDA A   10DIGITOS sin homoclave
                        12DIGITOS (persona moral)
                        13DIGITOS (persona fisica)*/
    expresionCorreo=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    expresionCorreoOficial=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    expresionTelefono=/^[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){2}\d{3}|(\d{2}[\*\.\-\s]){3}\d{2}|(\d{4}[\*\.\-\s]){1}\d{4})|\d{8}|\d{10}|\d{12}$/;

    //condicionantes para no dejar campos vacios//
    if(Nombre_Empresa.length == 0 || RFC_Empresa.length == 0 || Ubicacion_Empresa.length == 0 || 
        Telefono_Empresa.length == 0 || Correo_Empresa.length == 0) {
        Swal.fire("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(Nombre_Empresa.length>45){
        Swal.fire("Error", "El Nombre del Cliente y/o Empresa es muy largo", "error");
        return false;
    } else if(!expresionRFC.test(RFC_Empresa)){
        Swal.fire("Error", "El RFC no es valido", "error");
        return false;
    } else if(RFC_Empresa.length>13){
        Swal.fire("Error", "El RFC es muy largo", "error");
        return false;
    } else if(Ubicacion_Empresa.length>45){
        Swal.fire("Error", "El domicilio es muy largo", "error");
        return false;
    } else if(isNaN(Telefono_Empresa)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el Telefono", "error");
        return false;
    } else if(Telefono_Empresa.length!== 10){
        Swal.fire("Error", "Favor de solo ingresar 10 DIGITOS en el telefono", "error");
        return false;
    } else if(Correo_Empresa.length>45){
        Swal.fire("Error", "El correo es muy largo", "error");
        return false;
    } else if(!expresionCorreo.test(Correo_Empresa) && !expresionCorreoOficial.test(Correo_Empresa)){
        Swal.fire("Error", "El correo no es valido", "error");
        return false;
    } 

    Swal.fire("Success", "Cliente y/o Empresa registado correctamente", "success");

}); 

$('#actualizarEmpresaCliente').click(function(event) { 

    //declaracion de variables//
    var Nombre_Empresa, RFC_Empresa, Ubicacion_Empresa, Telefono_Empresa, Correo_Empresa,
    expresionCorreo, expresionCorreoOficial;

    //captura de datos usando jquery//
    Nombre_Empresa = $('#Nombre_Empresa').val();
    RFC_Empresa = $('#RFC_Empresa').val();
    Ubicacion_Empresa = $('#Ubicacion_Empresa').val();
    Telefono_Empresa = $('#Telefono_Empresa').val();
    Correo_Empresa = $('#Correo_Empresa').val();

    expresionRFC=/^[a-zA-Z]{3,4}(\d{6})((\D|\d){2,3})?$/;
    /*EL rfc VALIDA A   10DIGITOS sin homoclave
                        12DIGITOS (persona moral)
                        13DIGITOS (persona fisica)*/
    expresionCorreo=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    expresionCorreoOficial=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    expresionTelefono=/^[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){2}\d{3}|(\d{2}[\*\.\-\s]){3}\d{2}|(\d{4}[\*\.\-\s]){1}\d{4})|\d{8}|\d{10}|\d{12}$/;

    //condicionantes para no dejar campos vacios//
    if(Nombre_Empresa.length == 0 || RFC_Empresa.length == 0 || Ubicacion_Empresa.length == 0 || 
        Telefono_Empresa.length == 0 || Correo_Empresa.length == 0) {
        Swal.fire("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(Nombre_Empresa.length>45){
        Swal.fire("Error", "El Nombre del Cliente y/o Empresa es muy largo", "error");
        return false;
    } else if(!expresionRFC.test(RFC_Empresa)){
        Swal.fire("Error", "El RFC no es valido", "error");
        return false;
    } else if(RFC_Empresa.length>13){
        Swal.fire("Error", "El RFC es muy largo", "error");
        return false;
    } else if(Ubicacion_Empresa.length>45){
        Swal.fire("Error", "El domicilio es muy largo", "error");
        return false;
    } else if(isNaN(Telefono_Empresa)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el Telefono", "error");
        return false;
    } else if(Telefono_Empresa.length!== 10){
        Swal.fire("Error", "Favor de solo ingresar 10 DIGITOS en el telefono", "error");
        return false;
    } else if(Correo_Empresa.length>45){
        Swal.fire("Error", "El correo es muy largo", "error");
        return false;
    } else if(!expresionCorreo.test(Correo_Empresa) && !expresionCorreoOficial.test(Correo_Empresa)){
        Swal.fire("Error", "El correo no es valido", "error");
        return false;
    } 

    Swal.fire("Success", "Cliente y/o Empresa actualizado correctamente", "success");

});

$('#registrarServicios').click(function(event) { 

    //declaracion de variables//
    var Nombre_Servicio, ID_Departamento;

    //captura de datos usando jquery//
    Nombre_Servicio = $('#Nombre_Servicio').val();
    ID_Departamento = $('#ID_Departamento').val();

    //condicionantes para no dejar campos vacios//
    if(Nombre_Servicio.length == 0 || ID_Departamento.length == 0) {
        Swal.fire("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(Nombre_Servicio.length>45){
        Swal.fire("Error", "El Nombre del Servicio es muy largo", "error");
        return false;
    } else if(isNaN(ID_Departamento)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Departamento", "error");
        return false;
    } else if(ID_Departamento.length>11){
        Swal.fire("Error", "El ID del Departamento es muy largo", "error");
        return false;
    }

    Swal.fire("Success", "Servicio registado correctamente", "success");

});

$('#actualizarServicio').click(function(event) { 

    //declaracion de variables//
    var Nombre_Servicio, ID_Departamento;

    //captura de datos usando jquery//
    Nombre_Servicio = $('#Nombre_Servicio').val();
    ID_Departamento = $('#ID_Departamento').val();

    //condicionantes para no dejar campos vacios//
    if(Nombre_Servicio.length == 0 || ID_Departamento.length == 0) {
        Swal.fire("Error", "Favor de no dejar campos vacios", "error");
        return false;
    } else if(Nombre_Servicio.length>45){
        Swal.fire("Error", "El Nombre del Servicio es muy largo", "error");
        return false;
    } else if(isNaN(ID_Departamento)){
        Swal.fire("Error", "Favor de solo ingresar NUMEROS en el ID del Departamento", "error");
        return false;
    } else if(ID_Departamento.length>11){
        Swal.fire("Error", "El ID del Departamento es muy largo", "error");
        return false;
    }

    Swal.fire("Success", "Departamento actualizado correctamente", "success");

});