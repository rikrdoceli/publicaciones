$(document).ready(function () {
    $(".eliminar1").submit(function (e) {
        e.preventDefault();
        Swal.fire({
            title: '¿Está seguro de eliminar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    });
    $(".eliminar").submit(function (e) {
        e.preventDefault();
        Swal.fire({
            title: '¿Está seguro de inhabilitar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    });
    $(".reingresar").submit(function (e) {
        e.preventDefault();
        Swal.fire({
            title: '¿Está seguro de habilitar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    });
    $('#buscar_libro').select2({
        dropdownParent: $("#prestar")
    });
    $('#estudiante').select2({
        dropdownParent: $("#prestar")
    });
    $(".devolver").submit(function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Estado conforme?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si!',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    });
    $('#alerta').toast('show');
    $('#errorCambioPass').toast('show');
    
});