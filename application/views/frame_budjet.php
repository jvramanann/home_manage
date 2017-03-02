<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
 <script type="text/javascript">
    
    function add_row(){
      //alert('jjkdhjgh');
       var tbl_tow = "";
    var set_id =0;
    
    tbl_row = "<tr><td><label id='sl_no' class='sl_no'></label></td><td><input type='text' name='in_mode[]' class='in_mode' ></td><td><input type='text' name='in_desc[]' class='in_desc' ></td><td><input type='text' name='in_amt[]' class='in_amt'></td><input type='hidden' name='id' value=''><td><a class='add_row'><i class='fa fa-plus'></i></a>&nbsp;&nbsp;<a href='javascript();'><i class='fa fa-trash'></i></a></td></tr>";
    }
</script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Frame Budjet
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'budjet/dashboard';?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#<!-- <?php //echo base_url().'budjet/mode_expenses';?> -->">Budjet</a></li>
        <li class="active">Frame Budjet</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


    <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <form class="form-horizontal" name="add_expenses_mode" id="add_expenses_mode" action="#" method="post">
              <table class="table table-hover">
                <tr>
                  <th>Sl.No</th>
                  <th>Mode of Inome</th>
                  <th>Description</th>
                  <th>Amount</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td><label id="sl_no" class="sl_no">1</label></td>
                  <td><input type="text" name="in_mode[]" class="in_mode" ></td>
                  <td><input type="text" name="in_desc[]" class="in_desc" ></td>
                  <td><input type="text" name="in_amt[]" class="in_amt" ></td>
                  <input type="hidden" name="id1" value="1">
                  <input type="hidden" name="id" value="<?php echo "$_SESSION['user_id']";?>">
                  <td><label class="add_row btn btn-info" id="add_row" >Add</label> &nbsp;&nbsp;<a href="javascript:void(0);"><i class="fa fa-trash"></i></a></td>
                </tr>
                <!-- <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr> -->
              </table>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>

  <script type="text/javascript">
    
   /* function add_row(){
      alert('jjkdhjgh');
    }*/

    $("#add_row").click(function(){
    //alert('jjkdhjgh');
     var tbl_tow = "";
    var set_id =0;
    var id = $('#id').value();
    tbl_row = "<tr><td><label id='sl_no' class='sl_no'></label></td><td><input type='text' name='in_mode[]' class='in_mode' ></td><td><input type='text' name='in_desc[]' class='in_desc' ></td><td><input type='text' name='in_amt[]' class='in_amt'></td><input type='hidden' name='id' value=''><td><label class='add_row btn btn-info' id='add_row'>Add</label>&nbsp;&nbsp;<a href='javascript();'><i class='fa fa-trash'></i></a></td></tr>";
  $('table tbody').append(tbl_row);

  })

$(document).ready(function(){
  $("#add_row").click(function(){
    alert('jjkdhjgh');
   /* var tbl_tow = "";
    var set_id =0;
    
    tbl_row = "<tr><td><label id='sl_no' class='sl_no'></label></td><td><input type='text' name='in_mode[]' class='in_mode' ></td><td><input type='text' name='in_desc[]' class='in_desc' ></td><td><input type='text' name='in_amt[]' class='in_amt'></td><input type='hidden' name='id' value=''><td><a class='add_row'><i class='fa fa-plus'></i></a>&nbsp;&nbsp;<a href='javascript();'><i class='fa fa-trash'></i></a></td></tr>";
  $('table tbody').append(tbl_row);
*/
  })

});


  </script>

  </body>
</html>