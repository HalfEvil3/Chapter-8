<?php 
	include "art-header.inc.php"; 

	include "art-data.php";

	function outputCartRow($file, $product, $quantity, $price) {
		$amount = $quantity * $price;
		$dir = "images/art/tiny";
		echo '<tr>';
		echo '<td><img class="img-thumbnail" src="' . $dir . '/' . $file . '" alt="..."></td>';
		echo '<td>' . $product . '</td>';
		echo '<td>' . $quantity . '</td>';
		echo '<td>$' . number_format($price,2) . '</td>';
		echo '<td>$'  . number_format($amount,2) . '</td>';
		echo '</tr>';
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chapter 8</title>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="chapter08-project02.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>



<div class="container">

      <div class="page-header">
         <h2>View Cart</h2>
      </div>
         
      <table class="table table-condensed">
         <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
         </tr>
		 <?php 
				outputCartRow($file1, $product1, $quantity1, $price1);
				outputCartRow($file2, $product2, $quantity2, $price2);
		 ?>
<!--         <tr>
            <td><img class="img-thumbnail" src="images/art/tiny/116010.jpg" alt="..."></td>
            <td>Artist Holding a Thistle</td>
            <td>2</td>
            <td>$500</td>
            <td>$1000</td>
         </tr>
         <tr>
            <td><img class="img-thumbnail" src="images/art/tiny/113010.jpg" alt="..."></td>
            <td>Self-portrait in a Straw Hat</td>
            <td>1</td>
            <td>$700</td>
            <td>$700</td>
         </tr>  -->
         <tr class="success strong">
            <td colspan="4" class="moveRight">Subtotal</td>
            <td>$
				<?php 
					$amount1 = $quantity1 * $price1;
					$amount2 = $quantity2 * $price2;
					$subtotal = $amount1 + $amount2;
					echo number_format($subtotal,2);
				?>
			</td>
         </tr>
         <tr class="active strong">
            <td colspan="4" class="moveRight">Tax</td>
            <td>$
				<?php 
					$taxRate = 0.10;
					$taxTotal = $subtotal * $taxRate;
					echo number_format($taxTotal,2);
				?>
			</td>
         </tr>  
         <tr class="strong">
            <td colspan="4" class="moveRight">Shipping</td>
            <td>$
				<?php 
					$shipping = 100;
					if ($subtotal > 2000){
						$shipping = 0;
					}
					
					echo number_format($shipping,2);
				?>
			</td>
         </tr> 
         <tr class="warning strong text-danger">
            <td colspan="4" class="moveRight">Grand Total</td>
            <td>$
				<?php 
					$grandTotal = $subtotal + $taxTotal + $shipping;
					echo number_format($grandTotal,2);
				?>
			</td>
         </tr>    
         <tr >
            <td colspan="4" class="moveRight"><button type="button" class="btn btn-primary" >Continue Shopping</button></td>
            <td><button type="button" class="btn btn-success" >Checkout</button></td>
         </tr>
      </table>         

</div>  <!-- end container -->

<?php 	include "art-footer.inc.php";  ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
    <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
  </body>
</html>
