$(function(){

    $(".my-datatable").dataTable({
        dom: 'Bfrtip',
        buttons: [
            'print', 'excel', 'pdf'
        ]
    });

    $(".datepicker").datepicker();

});