$(function(){

    $(".my-datatable").dataTable({
        dom: 'Bfrtip',
        buttons: [
            'print', 'excel', 'pdf'
        ]
    });

    $(".tb-nilai").dataTable({
        dom: 'Bfrtip',
        buttons: [
            'print',
            'excelHtml5',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'A4'
            }
        ]
    });

    $(".datepicker").datetimepicker({
        format: 'yyyy-mm-dd',
        minView: 2,
        autoclose: 1,
    });

    $(".jadwal").datetimepicker({
        format: 'yyyy-mm-dd',
        minView: 2,
        autoclose: 1,
        // startDate : new Date(),
    });

    $(".tgllahir").datetimepicker({
        format: 'yyyy-mm-dd',
        minView: 2,
        autoclose: 1,
        startDate : new Date('1965-01-01'),
        endDate : new Date('1996-12-31'),
    });

    var awaldiklat = "";

    $(".awaldiklat").datetimepicker({
        format: 'yyyy-mm-dd',
        minView: 2,
        autoclose: 1,
    }).on('changeDate', function(ev){
        awaldiklat = $('.awaldiklat').val();
        console.log(awaldiklat);
        $('.akhirdiklat').datetimepicker('setStartDate', awaldiklat);
    });

    $(".akhirdiklat").datetimepicker({
        format: 'yyyy-mm-dd',
        minView: 2,
        autoclose: 1,
    });

     $(document).on('change', ':file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });

    // We can watch for our custom `fileselect` event like this
    $(document).ready( function() {
        $(':file').on('fileselect', function(event, numFiles, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        });
    });

});