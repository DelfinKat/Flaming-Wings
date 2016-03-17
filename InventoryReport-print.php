u<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flaming Wings | Inventory Report</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- PHP --> 
   <?PHP 
   include("dbconnection.php")

   ?>

  </head>
  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <img src="logo.jpg" style="width:128px;height:60px;"></img></br></br>
              Flaming Wings
              <small class="pull-right">  
                  <small class="pull-right">
                  <?php 
                    echo "<p>Report Date: " . date("Y-m-d l h:i:sa") . "</p>";

                    ?></small>
                  </small>
            </h2>
          </div><!-- /.col -->
        </div>

        <!-- info row -->
       <!-- <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            From
            <address>
              <strong>Admin, Inc.</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (804) 123-5432<br>
              Email: info@almasaeedstudio.com
            </address>
          </div><!-- /.col -->
          <!--<div class="col-sm-4 invoice-col">
            To
            <address>
              <strong>John Doe</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (555) 539-1037<br>
              Email: john.doe@example.com
            </address>
          </div><!-- /.col -->
         <!-- <div class="col-sm-4 invoice-col">
            <b>Invoice #007612</b><br>
            <br>
            <b>Order ID:</b> 4F3S8J<br>
            <b>Payment Due:</b> 2/22/2014<br>
            <b>Account:</b> 968-34567
          </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Table row -->
     <div class="row">
          <div class="col-xs-12 table-responsive">
             <h3 class="box-title"><b>Inventory Report</b>
            <table class="table table-striped">
                
              <thead>
                <tr><b>
                   <th>Stock Code</th>
                    <th>Item Name</th>
                    <th>Remaining Quantity</th>
                    <th>Date Received</th>
                    <th>Actual Quantity</th>
                   <th>Date Verified</th>
                 </b>
                </tr>
              </thead>
              <tbody>
               <?php
                        $stock_code = isset($_GET['stock_code']) ? $_GET['stock_code'] : '';
                        $sql = mysqli_query($connect, "SELECT * FROM stock NATURAL JOIN stocktype NATURAL JOIN unitmeasurement NATURAL JOIN ingredientname
                          NATURAL JOIN replenishstock NATURAL JOIN verifystock");
                        while ($row = mysqli_fetch_array($sql)){
                          echo "<tr>"; 
                          echo "<td>".$row['stock_id']."</td>"; //stockcode
                          echo "<td>".$row["stock_type"]."</td>"; //type
                          echo "<td>".$row["sname"]."</td>"; //itemname
                          echo "<td>".$row["qty"]."</td>"; //qty
                          echo "<td>".$row["dtReceived"]."</td>"; //date stock received
                          echo "<td>".$row["verifiedqty"]."</td>"; //qty after verified
                          echo "<td>".$row["dtVerified"]."</td>"; //unit
                          echo "</tr>";

                      
                        }
                         ?>
              
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->
<!--
        <div class="row">
          <!-- accepted payments column -->
  <!--        <div class="col-xs-6">
            <p class="lead">Payment Methods:</p>
            <img src="../../dist/img/credit/visa.png" alt="Visa">
            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="../../dist/img/credit/american-express.png" alt="American Express">
            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
          </div><!-- /.col -->
          <div class="col-xs-6">
            <p class="lead">Amount Due 2/22/2014</p>
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th style="width:50%">Subtotal:</th>
                  <td>$250.30</td>
                </tr>
                <tr>
                  <th>Tax (9.3%)</th>
                  <td>$10.34</td>
                </tr>
                <tr>
                  <th>Shipping:</th>
                  <td>$5.80</td>
                </tr>
                <tr>
                  <th>Total:</th>
                  <td>$265.24</td>
                </tr>
              </table>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
  </body>
</html>
