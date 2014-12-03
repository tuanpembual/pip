<?php
  include('utama/header.php');
?>
<div id="content">
  <h2>Laporan Masuk</h2>
    <div id="wrap">
      <!-- Grid contents -->
      <div id="tablecontent"></div>
    
      <!-- Paginator control -->
      <div id="paginator"></div>
    </div>  
    
    <script src="js/editablegrid-2.1.0-b13.js"></script>   
    <script src="js/jquery-1.11.1.min.js" ></script>
        <!-- EditableGrid test if jQuery UI is present. If present, a datepicker is automatically used for date type -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="js/demo.js" ></script>
    <script type="text/javascript">
      var datagrid = new DatabaseGrid();
      window.onload = function() { 
        // key typed in the filter field
        $("#filter").keyup(function() {
            datagrid.editableGrid.filter( $(this).val());

            // To filter on some columns, you can set an array of column index 
            //datagrid.editableGrid.filter( $(this).val(), [0,3,5]);
          });

        $("#showaddformbutton").click( function()  {
          showAddForm();
        });
        $("#cancelbutton").click( function() {
          showAddForm();
        });

        $("#addbutton").click(function() {
          datagrid.addRow();
        });
      }; 
    </script>
</div>
<?php
  include ("utama/footer.php");
?>
