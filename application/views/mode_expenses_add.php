<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Expenses Modes
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'budjet/dashboard';?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url().'budjet/mode_expenses';?>">Expenses Mode</a></li>
        <li class="active">New Expenses mode </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Expenses Mode</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <div class="col-md-8" style="padding: 0 10px 0px 150px;">
            <form class="form-horizontal" name="add_expenses_mode" id="add_expenses_mode" action="#" method="post">
            <?php //if(isset($data->id)) echo 'hii'; var_dump($data);?>
              <div class="box-body">
                <div class="form-group">
                  <label for="Name" class="col-sm-6 control-label">Enter Expenses Mode</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  name="name" id="exp_mode_name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-6 control-label">Description</label>

                  <div class="col-sm-6">
                    <!-- <input type="text" class="form-control" id="exp_desc" name="" ="exp_desc" > -->
                    <textarea class="form-control"  name="description" id="exp_desc"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="Name" class="col-sm-6 control-label">Status</label>                  
                  <div class="col-sm-6" >
                    <select name="status" class="form-control">
                      <option value="1">Active</option>
                      <option value="2">Unnecessary</option>
                      <option value="0">Inactive</option>
                    </select>
                  </div>
                </div>
                <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_id'];?>">
                
                <!-- <div class="form-group">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-info ">Add</button>  
                  <button type="reset" class="btn btn-default">Cancel</button>
                
                </div>
                </div> -->
              <!-- /.box-body -->
              <div class="box-footer" style="padding-left: 250px;">
                <button type="submit" class="btn btn-info">Submit</button>
                <button type="submit" class="btn btn-default">Cancel</button>
                
              </div>
              <!-- /.box-footer -->
            </form>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>
  <script type="text/javascript">
    



  </script>