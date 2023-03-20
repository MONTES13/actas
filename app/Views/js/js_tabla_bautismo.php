

$(document).ready(function() {
	// Individual column searching with text inputs

    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        dom: '<"datatable-header"fBl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
        language: {
            search: '<span>Buscar:</span> _INPUT_',
            searchPlaceholder: 'Escribe para empezar a buscar...',
            lengthMenu: '<span>Mostrar:</span> _MENU_',
            className: 'form-control',
            paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
        },
        lengthMenu: [
            [ 5, 10, 25, 50, -1 ],
            [ 5, '10', '25', '50']
        ],
    });
	
    $('.datatable-column-search-inputs tfoot td').not(':last-child').each(function () {
	    var title = $('.datatable-column-search-inputs thead th').eq($(this).index()).text();
	    $(this).html('<input type="text" class="form-control input-sm" placeholder="Search '+title+'" />');
	});
    

    var table = $('#tabla_bautismo').DataTable( {
        pageLength : 10,
        "order": [[ 0, "desc" ]],
        "processing": true,
        "serverSide": true,
        "processing": true,
        "serverSide": true,
        "ajax": {
		    url: "<?php echo base_url(); ?>procesar_tabla_bautismo",
		    type: 'POST',
            dataType: 'json',
            /*
            success: function(data, status) {
                console.log(1);
            }
            */
		},
        "columns": [
		    { "name": "nombre" },
            { "name": "" }
		  ],
    } );


    table.columns().every( function () {
        var that = this;
        $('input', this.footer()).on('keyup change', function () {
            that.search(this.value).draw();
        });
    });
} );




