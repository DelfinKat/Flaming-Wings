<?php 
	header ("url=ReplenishStock.php"); 
	include("dbconnection.php"); 

	$sql_query = "INSERT INTO replenishstock(dtReceived, qty, stock_id, remarks) 
	VALUES ('".$_POST['dtReceived']."', '".$_POST['qty']."', '".$_POST['sname']."','".$_POST['remarks']."')"; 

	
	mysqli_query($connect, $sql_query); 
		
	echo "Replenished stock!";
	echo $sql_query; 


?>
<html>
<body>

 <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>Recently Added Stocks</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="recentlyadded" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Stock Code</th>
                        <th>Category/Type</th>
                        <th>Item Name</th>
                        <th>In-Stock</th>
                        <th>UOM</th>
                        <th>Packaging</th>

                      </tr>
                    </thead>
                    <tbody>
                     
                       <?php
                        $stock_code = isset($_GET['stock_code']) ? $_GET['stock_code'] : '';
                        $sql = mysqli_query($connect, "SELECT * FROM stock NATURAL JOIN stocktype NATURAL JOIN unitmeasurement NATURAL JOIN ingredientname
                          NATURAL JOIN unitpackaging ORDER BY stock_id DESC");
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
                   
                <!--      <tfoot>
                         <div class="box-body">
                    <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                   </div>
                    </tfoot>  --> 
                  </table>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

<a href="ReplenishStock.php">Go back</a>
</body>
</html>
