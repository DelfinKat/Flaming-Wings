<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flaming Wings | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
   
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>




    


    <!-- JAVASCRIPT NIGGA -->
    <script type="text/javascript">
    $(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = <input type="number" class="form-control" id="InputQty" placeholder="Quantity" name="qty" value="<?php if(isset($_POST['qty'])) echo $_POST['qty']; ?>"><a href="javascript:void(0);" class="remove_button" title="Remove field"> REMOVE </a>;
    var fieldHTML2 = <select class="form-control" name="untiM" value="<?php if (isset($_POST['unitM'])) echo $_POST['unitM']; ?>"><option value="" disabled selected>Unit of Measurement</option></select><a href="javascript:void(0);" class="remove_button" title="Remove field"> REMOVE </a>; //New input field html
    var fieldHTML3 = <select class="form-control" name="ing_name" value="<?php if (isset($_POST['ing_name'])) echo $_POST['ing_name']; ?>"><option value="" disabled selected>Ingredients</option></select><a href="javascript:void(0);" class="remove_button" title="Remove field"> REMOVE </a>; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
            $(wrapper).append(fieldHTML2);
            $(wrapper).append(fieldHTML3);
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
    });
    </script>



    <script>
      //var button = $();
      var ingredientwrapper = ('tr[name=ingTable]');
      $(document).ready(function() {
        $(".addingredient").on("click", function(e){
        console.log("hifusdfh");
        console.log("hi"); 
            e.preventDefault(); 

            $(ingredientwrapper).append('<tr><td><input type="number" class="form-control" id="InputQty" placeholder="Quantity" name="qty" value="'
              + <?php if (isset($_POST["qty"])) echo $_POST["qty"]; ?>
              + '"></td>' 
              + '<td><select class="form-control" name="unitM" value="'
              + <?php if (isset($_POST["unitM"])) echo $_POST["unitM"]; ?>
              + '"> <option value="" disabled selected>Unit of Measurement</option>'
              + <?php $sql = mysqli_query($connect, "SELECT * FROM unitmeasurement");
              while ($row = mysqli_fetch_array($sql)){
              echo "<option value=" . $row["unit_id"] . ">" . $row["unit_name"] . "</option>";}?></select></td>
              + '<td> <select class="form-control" name="ing_name"'
              'value="'
              <?php if (isset($_POST["ing_name"])) echo $_POST["ing_name"]; ?>">
              <option value="" disabled selected>Available Ingredients</option>
              <?php
              $sql = mysqli_query($connect, "SELECT * FROM ingredientname");
              while ($row = mysqli_fetch_array($sql)){
              echo "<option value=" . $row["ingName_id"] . ">" . $row["ing_name"] . "</option>";}?></select></td></tr>);              
      });
      }); 
      $(".addingredient").click(function(){
        alert("hehehehe");
    });
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!--<script src="AddIngButton.js"></script>



    <!-- PHP --> 
   <?PHP 
   include("dbconnection.php")

   ?>

   <script type="text/JAVASCRIPT">
   function addTextNigga(){
      var div = document.getElementById('div_quotes');
      div.innerHTML += "<textarea name = 'new quote[]' />";
      div.innerHTML += "\n <br />";

   }

  </script>

   <script type="text/JAVASCRIPT">
    function addTextArea(){
      var div= document.getElementById('div_quotes');
      div.innerHTML += "<textarea name = 'new quote[] ' />";
      div.innerHTML += "\n<br />";
    }

    </script>

    <script type="text/JAVASCRIPT">
    function addText(){
    $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
}
   </script>
 


    <!-- HEADER -->
  </head>
  
  <body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="MAIN.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Flaming Wings</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">


             
              <!-- NOTIFICATION -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>




              <!-- UPPER RIGHT CORNER -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Brooklyn Beckham</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Brooklyn Beckham - Manager
                      <small>Member since Nov. 2016</small>
                    </p>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>






      <!--UPPER LEFT CORNER-->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Brooklyn Beckham</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          



          <!-- SIDEBAR MENU -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <!--DASHBOARD-->
            <li class="active treeview">
              <a href="MAIN.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>




   <!---RECIPE -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Recipe</span>
                <span class="label label-primary pull-right"></span>
              </a>

              <ul class="treeview-menu">
                <li><a href="http://localhost/Flaming-Wings/SearchRecipe.php"><i class="fa fa-circle-o"></i> Search Recipe</a></li>
                <li><a href="http://localhost/Flaming-Wings/ViewRecipe.php"><i class="fa fa-circle-o"></i> View Recipe</a></li>
                <li><a href="http://localhost/Flaming-Wings/AddRecipe.php"><i class="fa fa-circle-o"></i> Add Recipe</a></li>
                <li><a href="http://localhost/Flaming-Wings/EditRecipe.php"><i class="fa fa-circle-o"></i> Edit Recipe</a></li>
                <li><a href="http://localhost/Flaming-Wings/DeactivateRecipe.php"><i class="fa fa-circle-o"></i> Deactivate Recipe</a></li>
              </ul>
            </li>




             <!--STOCKS-->
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Stocks</span>
                <span class="label label-primary pull-right"></span>
              </a>

              <ul class="treeview-menu">
                <li><a href="http://localhost/Flaming-Wings/SearchStock.php"><i class="fa fa-circle-o"></i> Search Stock</a></li>
                <li><a href="http://localhost/Flaming-Wings/AddStock.php"><i class="fa fa-circle-o"></i> Add new Stock</a></li>
                <li><a href="http://localhost/Flaming-Wings/ReplenishStock.php"><i class="fa fa-circle-o"></i> Replenish Stock</a></li>
                <li><a href="http://localhost/Flaming-Wings/EditStock.php"><i class="fa fa-circle-o"></i> Edit Stock</a></li>
                <li><a href="http://localhost/Flaming-Wings/WithdrawStock.php"><i class="fa fa-circle-o"></i> Withdraw Stock</a></li>
              </ul>
            </li>





            <!--INVENTORY REPORTS-->
         <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i>
                <span>Inventory Reports</span>
                <span class="label label-primary pull-right"></span>
              </a>

              <ul class="treeview-menu">
                <li><a href="http://localhost/Flaming-Wings/InventoryReport.php"><i class="fa fa-circle-o"></i> Inventory Report</a></li>
                 <li><a href="http://localhost/Flaming-Wings/VerifyStock.php"><i class="fa fa-circle-o"></i>Stock Controller</a></li>
                <li><a href="http://localhost/Flaming-Wings/MostSold.php"><i class="fa fa-circle-o"></i> Most sold order</a></li>
              </ul>
            </li>
        <!-- /.sidebar -->

         
         <!--CONVERSION-->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-calculator"></i> 
                <span>Conversion</span> 
                <span class="label label-primary pull-right"></span>
              </a>


               <ul class="treeview-menu">
                <li><a href="http://localhost/Flaming-Wings/Conversion.php"><i class="fa fa-circle-o"></i>Conversion Table</a></li>
              </ul>
            </li>
      </aside>





       <!--SEARCH--> 
    <div class="content-wrapper">


       <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>ADD RECIPE</b></h3>
                </div><!-- /.box-header -->
                <!-- form start -->

                <form role="form" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="InputRecipeName">Recipe Name</label>
                      <input type="text" class="form-control" id="InputRecipeName" placeholder="Enter recipe name" name="recipe_name" required
                      value="<?php if (isset($_POST['recipe_name'])) echo $_POST['recipe_name']; ?>">
                    </div>

                     <label>Recipe Category/Type</label>
                      <select class="form-control" name="recipe_type" required>
                        <option value="" disabled selected> -- Category/Type --</option> 
                         <?php
                            $sql = mysqli_query($connect, "SELECT * FROM recipetype");
                            while ($row = mysqli_fetch_array($sql)){
                            echo "<option value=\"" . $row['recipe_typeid'] . "\">" . $row['recipe_type'] . "</option>";
                            }
                             ?>
                      </select>




                    
                    <!--- INGREDIENTS --> 
                    <b>Ingredients</b>
                    <table id="addingredient" class="table table-bordered table-hover" name="ingTable">
                       <td>
                          <a href = "flaminghoe.jsp" input type="button" class="addingredient"> Add more Ingredients </a>
                        </td>
                     <tr name="ingTable">

                    
                    <!-- KOKO -->
                    <div class="field_wrapper">
                    <div>
                    
                    
                    
                    <input type="number" class="form-control" id="InputQty" placeholder="Quantity" name="qty" value="<?php if(isset($_POST['qty'])) echo $_POST['qty']; ?>" >
                   



                    <select class="form-control" name="untiM" value="<?php if (isset($_POST['unitM'])) echo $_POST['unitM']; ?>" > <option value="" disabled selected>Unit of Measurement</option> //list of measurements from database
                            <?php
                            $sql = mysqli_query($connect, "SELECT * FROM unitmeasurement");
                            while ($row = mysqli_fetch_array($sql)){
                            echo "<option value=\"" . $row['unit_id'] . "\">" . $row['unit_name'] . "</option>";
                            }
                             ?>
                          </select>
                    



                    <select class="form-control" name="ing_name" value="<?php if (isset($_POST['ing_name'])) echo $_POST['ing_name']; ?>">  <option value="" disabled selected>Ingredients</option> //list of measurements from database
                            <?php
                            $sql = mysqli_query($connect, "SELECT * FROM ingredientname");
                            while ($row = mysqli_fetch_array($sql)){
                            echo "<option value=\"" . $row['ingName_id'] . "\">" . $row['ing_name'] . "</option>";
                            }
                             ?>
                          </select>     
                       

                    
                    <a href="javascript:void(0);" class="add_button" title="Add field">Click here to add more ingredients</a>

                    </div>
                    </div>





                      <!--Quantity-->
                      <td>
                          <input type="number" class="form-control" id="InputQty" placeholder="Quantity" name="qty"
                          value="<?php if (isset($_POST['qty'])) echo $_POST['qty']; ?>">
                      </td>



                     <!--UOM-->
                      <td>
                          <select class="form-control" name="unitM" 
                          value="<?php if (isset($_POST['unitM'])) echo $_POST['unitM']; ?>">
                           <option value="" disabled selected>Unit of Measurement</option> //list of measurements from database
                     
                            <?php
                            $sql = mysqli_query($connect, "SELECT * FROM unitmeasurement");
                            while ($row = mysqli_fetch_array($sql)){
                            echo "<option value=\"" . $row['unit_id'] . "\">" . $row['unit_name'] . "</option>";
                            }
                             ?>
                          </select>
                        </td>
                       


                        <!--Ingredients-->
                        <td>
                          <select class="form-control" name="ing_name" 
                          value="<?php if (isset($_POST['ing_name'])) echo $_POST['ing_name']; ?>">
                           <option value="" disabled selected>Ingredients</option> //list of measurements from database
                     
                            <?php
                            $sql = mysqli_query($connect, "SELECT * FROM ingredientname");
                            while ($row = mysqli_fetch_array($sql)){
                            echo "<option value=\"" . $row['ingName_id'] . "\">" . $row['ing_name'] . "</option>";
                            }
                             ?>
                          </select>
                        </td>



                        <HEAD>
                          <SCRIPT language="javascript">
                             function add(type) {
 
    //Create an input type dynamically.
                              var element = document.createElement("input");
 
    //Assign different attributes to the element.
                              element.setAttribute("type", type);
                              element.setAttribute("value", type);
                              element.setAttribute("name", type);
 
 
                              var foo = document.getElementById("fooBar");
 
    //Append the element in page (in span).
                              foo.appendChild(element);
 
                         }
                          </SCRIPT>
                      </HEAD>
                        <BODY>
                         <FORM>

                           <BR/>
                <SELECT name="element">
                   <OPTION value="button">Button</OPTION>
                   <OPTION value="text">Textbox</OPTION>
                   <OPTION value="radio">Radio</OPTION>
               </SELECT>
 
            <INPUT type="button" value="Add Ingredient" onclick="add(document.forms[0].element.value)"/>
 
             <span id="fooBar">&nbsp;</span>
 
                      </FORM>
                  </BODY>

                      </p>
                  </div>

<!-- Dito yung code dati / just in case-->
                       
                      </tr>    
                 </table>
                    </div>

                </form>
               
              </div><!-- /.box -->
                <div class="box-footer">
                    
                    <input type="submit" class="btn btn-primary" value="Add Recipe" />
                   
                  </div>


    </div><!-- ./wrapper -->
              <!-- RECENTLY ADDED TABLE -->
              <div class="row">
            <div class="col-md-6">
              <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title"><b>STOCKS</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="recentlyadded" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Stock Code</th>
                        <th>Category/Type</th>
                        <th>Item Name</th>
                        <th>In Stock</th>
                        <th>UOM</th>
                        <th>Packaging</th>

                      </tr>
                    </thead>
                    <tbody>
                     
                       <?php
                        $stock_code = isset($_GET['stock_code']) ? $_GET['stock_code'] : '';
                        $sql = mysqli_query($connect, "SELECT * FROM stock NATURAL JOIN stocktype NATURAL JOIN unitmeasurement NATURAL JOIN ingredientname
                          NATURAL JOIN unitpackaging");
                        while ($row = mysqli_fetch_array($sql)){
                          echo "<tr>"; 
                          echo "<td>".$row['stock_id']."</td>"; //stockcode
                          echo "<td>".$row["stock_type"]."</td>"; //type
                          echo "<td>".$row["sname"]."</td>"; //itemname
                          echo "<td>".$row["qty"]."</td>"; //qty
                          echo "<td>".$row["unit_name"]."</td>"; //unit
                          echo "<td>".$row["pack_name"]."</td>"; //packaging
                          echo "</tr>";

                      
                        }
                         ?>
                    
                     
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

       <a href="AddIngType.php" class="btn btn-info" role="button">Add Ingredient Type</a>


         
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

     <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button); 
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    
  </body>
</html>
