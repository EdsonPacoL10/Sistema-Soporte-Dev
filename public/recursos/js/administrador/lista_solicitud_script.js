console.log("estamos usando ");
"use strict";
var table;
var dt;
var filterPayment;


// Class definition
var KTDatatablesServerSide = function () {
    // Shared variables
    //var table;
    

    // Private functions
    var initDatatable = function () {
        dt = $("#kt_datatable_solicitud").DataTable({
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [[0, 'asc']],
            stateSave: true,
            select: {
                style: 'multi',
                selector: 'td:first-child input[type="checkbox"]',
                className: 'row-selected'
            },
            ajax: {
                url: hostUrl+"listar",
            },
            columns: [
                { data: 'id' },
                { data: 'id' },
                { data: 'nombres' },
                { data: 'nombre' },
                { data: 'rubro' },
                { data: 'venta' },
                { data: 'Actions' },
            ],
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function (data) {
                        return `
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="${data}" />
                            </div>`;
                    }
                },
            ],
            // Add data-filter attribute
            createdRow: function (row, data, dataIndex) {
                $(row).find('td:eq(4)').attr('data-filter', data.CreditCardType);
            }
        });

        table = dt.$;

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        dt.on('draw', function () {
            initToggleToolbar();
            toggleToolbars();
            handleDeleteRows();
            KTMenu.createInstances();
        });
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            dt.search(e.target.value).draw();
        });
    }

   

    // Delete customer
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');

        deleteButtons.forEach(d => {
            // Delete button on click
            d.addEventListener('click', function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest('tr');

                // Get customer name
                const customerName = parent.querySelectorAll('td')[1].innerText;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Are you sure you want to delete " + customerName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        // Simulate delete request -- for demo purpose only
                        Swal.fire({
                            text: "Deleting " + customerName,
                            icon: "info",
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000
                        }).then(function () {
                            Swal.fire({
                                text: "You have deleted " + customerName + "!.",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            }).then(function () {
                                // delete row data from server and re-draw datatable
                                dt.draw();
                            });
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: customerName + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            })
        });
    }

    

    // Init toggle toolbar
    var initToggleToolbar = function () {
        // Toggle selected action toolbar
        // Select all checkboxes
        const container = document.querySelector('#kt_datatable_empresa');
        const checkboxes = container.querySelectorAll('[type="checkbox"]');

        // Select elements
        const deleteSelected = document.querySelector('[data-kt-docs-table-select="delete_selected"]');

        // Toggle delete selected toolbar
        checkboxes.forEach(c => {
            // Checkbox on click event
            //console.log()
            c.addEventListener('click', function () {

                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });

        // Deleted selected rows
        deleteSelected.addEventListener('click', function () {
            // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/



            Swal.fire({
                text: "¿Está seguro de que desea eliminar las unidades de medidas seleccionados?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                showLoaderOnConfirm: true,
                confirmButtonText: "Si, Borrar!",
                cancelButtonText: "No, cancelar",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                },
            }).then(function (result) {
                if (result.value) {
                

                    checkboxes.forEach(c => {
                        // Checkbox on click event
                        if(c.checked){
                            $.ajax({
                                    data:{"id":c.value,"nombre":"categoria"},
                                    type: "POST",
                                    dataType: "json",
                                    url: hostUrl+"acele"
                                }) 
                                .done(function( data, textStatus, jqXHR ) {
                                  
                                 })
                                 .fail(function( jqXHR, textStatus, errorThrown ) {
                                    
                                
                                });
                        }
                    });

                    // Simulate delete request -- for demo purpose only
                    Swal.fire({
                        text: "Eliminando Unidades de Medida Seleccionados",
                        icon: "info",
                        buttonsStyling: false,
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function () {
                        Swal.fire({
                            text: "Ha eliminado todas las  Unidades de Medida Seleccionados!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function () {
                            // delete row data from server and re-draw datatable
                            dt.draw();
                        });

                        // Remove header checked box
                        const headerCheckbox = container.querySelectorAll('[type="checkbox"]')[0];
                        headerCheckbox.checked = false;

                    });
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Las Unidades de Medidas Seleccionados no fueron Eliminadas.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    });
                }
            });
        });
    }

    // Toggle toolbars
    var toggleToolbars = function () {
        // Define variables
        const container = document.querySelector('#kt_datatable_empresa');
        const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="base"]');
        const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected"]');
        const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count"]');

        // Select refreshed checkbox DOM elements
        const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');

        // Detect checkboxes state & count
        let checkedState = false;
        let count = 0;

        // Count checked boxes
        allCheckboxes.forEach(c => {
            if (c.checked) {
                checkedState = true;
                count++;
            }
        });

        // Toggle toolbars
        if (checkedState) {
            selectedCount.innerHTML = count;
            toolbarBase.classList.add('d-none');
            toolbarSelected.classList.remove('d-none');
        } else {
            toolbarBase.classList.remove('d-none');
            toolbarSelected.classList.add('d-none');
        }
    }

    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            initToggleToolbar();
            handleDeleteRows();
            //handleResetForm();
        }
    }
}();

function recargar_tabla()
{
   dt.ajax.reload();
   //dt.draw();
   //dt.search('').draw();
}

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init();
});

$("#add_nombre").click(function(){
    $('#contenido_adicionar').load('../../acaem',function(result){
      $('#adicionar_empresa_modal').modal({show: true});
    });
});


$(document).on("click","tbody td #editar", function () {  
    var el = $(this);
    //console.log(el.attr('data-url'));
    $('#dynamic-content').load('../../'+el.attr('data-url')+'?id='+el.data('id'),function(result){
      $('#editar_empresa_modal').modal({show: true});
    });
});


$(document).on("click","tbody td #eliminar", function () {   
    var el = $(this);
    Swal.fire({
            text: "Esta seguro de Borrar el pagado: "+el.data("nombre"),
            icon: "error",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Si, Borrar!",
            cancelButtonText: "No, Borrar",
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-active-light"
            }
        }).then(function (result) {
           if (result.value) {
                 $.ajax({
                        data:{"id":el.data('id'),"nombre":el.data('nombre')},
                        type: "POST",
                        dataType: "json",
                        url: hostUrl+"acele"
                    }) 
                    .done(function( data, textStatus, jqXHR ) {
                      
                        if(data.success){

                            Swal.fire({
                                text: data.message,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.value) {
                                }
                            });
                        }else{
                            Swal.fire({
                                text: data.message,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok!",
                                customClass: {
                                    confirmButton: "btn btn-danger"
                                }
                            }).then(function (result) {
                                if (result.value) {
                                    //console.log("error");
                                }
                            });
                        }

                        recargar_tabla();
                     })
                     .fail(function( jqXHR, textStatus, errorThrown ) {
                        
                         Swal.fire({
                                text: "Ocurrio un Error!",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok!",
                                customClass: {
                                    confirmButton: "btn btn-danger"
                                }
                            }).then(function (result) {
                                
                            });
                        
                        recargar_tabla();
                    });
            }
        });
});
