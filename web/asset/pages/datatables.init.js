/*
 Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Datatable js
 */

$(document).ready(function() {
    $('#inmate_list').DataTable({
        language: {
            "url": "asset/pages/datatable.localisation_fr.json"
        }
    });

    //Buttons examples
    /*
    var table = $('#datatable-buttons').DataTable({
    	select: true,
    	dom: 'Bfrtip',
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis'],
        language: {
    	    "url": "public/assets/pages/datatable.localisation_fr.json"
    	}
    });
    */

    //table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
} );