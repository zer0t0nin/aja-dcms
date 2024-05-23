<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/Chart.bundle.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/app.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="../assets/js/datatable.min.js"></script>
<script src="../assets/js/datatable-net.min.js"></script>


<!-- Datatables Export -->
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>


<script>
$(function () {
  $('#example1').DataTable({
    dom: 'lBfrtip',
    ordering: false,
    buttons: 
    [
      { 
        extend: 'excelHtml5', 
        className: 'btn btn-dark btn-xs ',
        init: function(api, node, config) 
        {
          $(node).removeClass('dt-button')
        } 
      },
      { 
        extend: 'csvHtml5', 
        className: 'btn btn-dark btn-xs ',
        init: function(api, node, config) 
        {
          $(node).removeClass('dt-button')
        } 
      },
      { 
        extend: 'pdfHtml5', 
        className: 'btn btn-dark btn-xs ',
        init: function(api, node, config) 
        {
          $(node).removeClass('dt-button')
        } 
      },
    ]
  })
});

</script>

    