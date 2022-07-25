$(function () {
    $('#table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#table2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
  
$(function (){
    const flashdata = $('#flash-data').data('flashdata');
    if(flashdata){
        Swal.fire({
            title: 'Berhasil',
            text: 'Data Berhasil ' + flashdata,
            type: 'success',
            showConfirmButton: false,
            timer: 1500
        });
    }
});
$(function (){
    const flashdata = $('#flash-data-false').data('flashdata');
    if(flashdata){
        Swal.fire({
            text: flashdata,
            type: 'error',
            showConfirmButton: false,
            timer: 1500
        });
    }
});
