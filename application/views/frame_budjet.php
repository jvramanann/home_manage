<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
 
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
    <form class="form-horizontal" name="add_expenses_mode" id="add_expenses_mode" action="#" method="post">
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
            
              <table class="table table-hover" name="frame_budjet" id="frame_budjet">
                <tr><td></td><td>Total Income : <b><label id="tot_income"></label></b></td><td>Total Expenses :<b><label id="tot_income"></label></b></td><td>With Un-Nec Exp : <b><label id="tot_income"></label></b></td><td>Balance : <b><label id="balance"></label></b></td></tr>
                <tr>
                  <th><!-- Sl.No --></th>
                  <th>Mode of Inome</th>
                  <th>Description</th>
                  <th>Amount</th>
                  <th><label class="add_row btn btn-info" id="add_row" >Add</label></th>
                </tr>
                <tr>
                  <td><!-- <label id="sl_no" class="sl_no">1</label> --></td>
                  <td><input type="text" name="in_mode[]" class="in_mode" ></td>
                  <td><input type="text" name="in_desc[]" class="in_desc" ></td>
                  <td><input type="text" name="in_amt[]" class="in_amt" id="in_amt" onchange="sum_income(this.value);" ></td>
                  <!-- <input type="hidden" name="id1" value="1"> -->
                  <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
                  <td><!-- <a href="javascript:void(0);"><i class="fa fa-trash"></i></a> --></td>
                </tr>               
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>



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
            
              <table class="table table-hover" name="frame_exp" id="frame_exp">
                <tr><td></td><td>Total Income : <b><label id="tot_income1"></label></b></td><td>Total Expenses :<b><label id="tot_exp1"></label></b></td><td>With Un-Nec Exp : <b><label id="tot_wexp1"></label></b></td><td>Balance : <b><label id="balance1"></label></b></td></tr>
                <tr>
                  <th><!-- Sl.No --></th>
                  <th>Mode of Expenses</th>
                  <th>Description</th>
                  <th>Amount</th>
                  <th><label class="add_row btn btn-info" id="add_row_exp" >Add</label></th>
                </tr>
                <tr>
                  <td><!-- <label id="sl_no" class="sl_no">1</label> --></td>
                  <td><input type="text" name="exp_mode[]" class="exp_mode" ></td>
                  <td><input type="text" name="exp_desc[]" class="exp_desc" ></td>
                  <td><input type="text" name="exp_amt[]" class="exp_amt" id="exp_amt" onchange="sum_expenses(this.value);" ></td>
                  <!-- <input type="hidden" name="id1" value="1"> -->
                  <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
                  <td><!-- <a href="javascript:void(0);"><i class="fa fa-trash"></i></a> --></td>
                </tr>
               
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <button>save</button>
      </form>     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>

  <script type="text/javascript">
   
    var sum = 0;
    $('#tot_income').text(0);
     $('#tot_exp1').text(0);
    $("#add_row").click(function(){
    var tbl_tow = "";
    var set_id =0;
    
    tbl_row = "<tr><td></td><td><input type='text' name='in_mode[]' class='in_mode' ></td><td><input type='text' name='in_desc[]' class='in_desc' ></td><td><input type='text' name='in_amt[]' class='in_amt' onchange='sum_income(this.value)' ></td><td><input type='button' value='delete' class='btn btn-danger'></td></tr>";
      $('#frame_budjet tbody').append(tbl_row);    
  });


  $('#frame_budjet').on('click', 'input[type="button"]', function () {
  $(this).closest('tr').remove();
  var values=[];
  values = $("input[name='in_amt[]']").map(function(){return $(this).val();}).get();
  sum =values.reduce(add,0); 
  $('#tot_income').text(sum);
     var bal = parseFloat($('#tot_income').text())-parseFloat($('#tot_exp1').text());
  $('#balance').text(bal);
  });



   $("#add_row_exp").click(function(){
    var tbl_tow = "";
    var set_id =0;
    
    tbl_row = "<tr><td></td><td><input type='text' name='exp_mode[]' class='exp_mode' ></td><td><input type='text' name='exp_desc[]' class='exp_desc' ></td><td><input type='text' name='exp_amt[]' class='exp_amt' onchange='sum_expenses(this.value)' ></td><td><input type='button' value='delete' class='btn btn-danger'></td></tr>";
      $('#frame_exp tbody').append(tbl_row);
    
  });



  $('#frame_exp').on('click', 'input[type="button"]', function () {
    $(this).closest('tr').remove();
    var values=[];
    values = $("input[name='exp_amt[]']").map(function(){return $(this).val();}).get();
    sum =values.reduce(add,0); 
    $('#tot_exp1').text(sum);  
    var bal = parseFloat($('#tot_income').text())-parseFloat($('#tot_exp1').text());
    $('#balance').text(bal);
});




 function sum_income(ins){
  
 var values=[];
 values = $("input[name='in_amt[]']").map(function(){return $(this).val();}).get();
 sum =values.reduce(add,0); 
$('#tot_income').text(sum); 

var bal = parseFloat($('#tot_income').text())-parseFloat($('#tot_exp1').text());
$('#balance').text(bal);
}



 function sum_expenses(ins){
  
 var values=[];
 values = $("input[name='exp_amt[]']").map(function(){return $(this).val();}).get();
 sum =values.reduce(add,0); 
$('#tot_exp1').text(sum); 

var bal = parseFloat($('#tot_income').text())-parseFloat($('#tot_exp1').text());
$('#balance').text(bal);
}


function add(a,b){
return parseFloat(a)+parseFloat(b);
}

  

  </script>

  </body>
</html>