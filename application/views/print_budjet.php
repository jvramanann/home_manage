
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Print Budjet</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/bootstrap/css/bootstrap.min.css';?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/dist/css/AdminLTE.min.css';?>">

 <!-- Content Wrapper. Contains page content -->
 <!--  <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        View Budjet Details
        <small>Date:</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Budjet</a></li>
        <li class="active">View Budjet Details</li>
      </ol>
    </section> -->

    <!-- <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
      </div>
    </div> <?php// echo base_url().?>-->

<body onload="window.print();">
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Description
            <small class="pull-right">Date: <?php echo date('Y-m-d');?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
     <!--  <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Admin, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (804) 123-5432<br>
            Email: info@almasaeedstudio.com
          </address>
        </div> -->
        <!-- /.col -->
        <!-- <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>John Doe</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (555) 539-1037<br>
            Email: john.doe@example.com
          </address>
        </div> -->
        <!-- /.col -->
        <!-- <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div> -->
        <!-- /.col -->
      <!-- </div> -->
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Sl.No</th>
              <th>Expenses Mode</th>
              <th>Description</th>
              <th>Status</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <?php 

            $exp_amount = explode('@@',$data[0]->exp_amount);
            $exp_desc = explode('@@',$data[0]->exp_desc);
            $exp_mode = explode('@@',$data[0]->exp_mode);
            //print_r($exp_amount);
            //$exp_status = explode(@@,$data[0]->status);
                      //$i=0; 
                    for($i=0,$j=1;$i<count($exp_amount);$i++,$j++) { 
                       ?>
            <tr>
              <td><?php echo $j;//++$i; ?></td>
              <td><?php echo $exp_mode[$i]; ?></td>
              <td><?php echo $exp_desc[$i]; ?></td>
              <td><?php echo 'Needed';//$exp_status[$i]; ?></td>
              <td><?php echo $exp_amount[$i]; ?></td>
            </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
        <!--   <p class="lead">Payment Methods:</p>
          <img src="../../dist/img/credit/visa.png" alt="Visa">
          <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="../../dist/img/credit/american-express.png" alt="American Express">
          <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Details</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Income:</th>
                <td><?php echo $data[0]->total_income;?></td>
              </tr>
              <tr>
                <th>Expenses:</th>
                <td><?php echo $data[0]->total_expenses;?></td>
              </tr>
              <tr>
                <th>Gain/Loss:</th>
                <td><?php echo ($data[0]->total_income)-($data[0]->total_expenses);?></td>
              </tr>
              <!-- <tr>
                <th>Total:</th>
                <td>$265.24</td>
              </tr> -->
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      
    </section>
    <!-- /.content -->
    <!-- <div class="clearfix"></div>
  </div> -->
  <!-- /.content-wrapper -->
</div>
</body>

  

