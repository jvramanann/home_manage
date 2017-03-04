

<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Expenses Mode
        <small>add to quick select</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">settings</a></li>
        <li class="active">Expenses Mode</li>
      </ol>
    </section>

     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Follows your list </h3>
              <div style="text-align:right;"> 
              <a href="<?php echo base_url().'budjet/add_expenses_mode';?>"> <button type="submit" name="add_new" id="add_new" class="btn btn-primary" >Add New Expenses</button></a>
            </div>
            <!-- /.box-header -->
              <?php if($data){?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Total Income</th>
                  <th>Total Expenses</th>
                  <th>Date</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                      $i=0; 
                    foreach ($data as $key => $val) { ?>
                  <tr>
                  <td><?php echo ++$i;?>
                    </td>
                  <td><?php
                    echo $val->total_income;
                  ?>
                  </td>
                  <td><?php
                    echo $val->total_expenses;
                  ?></td>
                  <td> <?php
                    echo $val->created_on;
                  ?></td>
                  <td>
                      <a href="#"><i class="fa fa-eya"></i></a>&nbsp;&nbsp;&nbsp;
                      <a class="dfdf" href="<?php echo base___url().'budjet/add_expenses_mode/'.$val->id;?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;
                      <a href="#"><i class="fa fa-trassh"></i></a>&nbsp;&nbsp;&nbsp;
                  </td>
                </tr>
                <?php } ?>

                
                
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Sl.No</th>
                  <th>Total Income</th>
                  <th>Total Expenses</th>
                  <th>Date</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <?php } ?>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
     <?php include('footer_wo_script.php');?>

<!-- jQuery 2.2.3 -->
<script src="../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>