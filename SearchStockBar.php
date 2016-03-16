<?php 
header ("url=SearchStock.php"); 
include("dbconnection.php"); 

//$query = mysqli_real_escape_string($_POST['query']); 

if (empty($_POST['query'])) { 
    echo 'No results found'; 

    }else{
     
      $sql = "SELECT stock_id, stock_type, sname, qty, unit_name FROM stock s, stocktype st, unitmeasurement unitM WHERE s.stocktype_id=st.stocktype_id AND unitM.unit_id=s.unit_id AND s.stock_id LIKE '%".$_POST['query']."%'";
      $r_query = mysqli_query($connect, $sql);
    }


?>



  <div class='row'>
            <div class='col-xs-10'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'><b>Results</b></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
                  <?php

                  $numrows = mysqli_num_rows($r_query); 

                  if($numrows == 0){
                    echo "There are no results.";

  } else {

  ?>
                  <table id='example2' class='table table-bordered table-hover'>
                    <thead>
                      <tr>
                        <th>Stock Code</th>
                        <th>Category/Type</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Unit of Measurement</th>
                      </tr>
                    </thead>
                    <tbody>

<?php



while ($row = mysqli_fetch_array($r_query)){ 
	

	 					echo "<tr>"; 
                          echo "<td>".$row['stock_id']."</td>"; 
                          echo "<td>".$row['stock_type']."</td>"; 
                          echo "<td>".$row['sname']."</td>"; 
                          echo "<td>".$row['qty']."</td>";
                          echo "<td>".$row['unit_name']."</td>"; 
                          echo "</tr>";


}
}
?>
                    </tbody>
                  </table>
                </b>
                  <a href="SearchStock.php">Go Back</a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

    </div><!-- ./wrapper -->
 