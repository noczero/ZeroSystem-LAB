$(function () {
    $('.js-basic-example').DataTable();
    //$('#example').DataTable();
    //$('#dataAsisten').DataTable();

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});