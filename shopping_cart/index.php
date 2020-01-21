<?php 
    session_start(); 
    require("includes/connection.php"); 
    if(isset($_GET['page'])){ 
          
        $pages=array("products", "cart"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="products"; 
              
        } 
          
    }else{ 
          
        $_page="products"; 
          
    } 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
  
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link rel="stylesheet" href="css/reset.css" /> 
    <link rel="stylesheet" href="css/style.css" /> 
      
    <title>Product Cart</title> 
  
</head> 
  
<body> 
  <h1>Cart</h1> 
    <?php 
      
        if(isset($_SESSION['cart'])){ 
              
            $sql="SELECT * FROM products WHERE id_product IN ("; 
              
            foreach($_SESSION['cart'] as $id => $value) {    //selects only those products that exist in the session
                $sql.=$id.","; 
            } 
              
            $sql=substr($sql, 0, -1).") ORDER BY name ASC";  //removes the last comma
            $query=mysqli_query($conn, $sql); 
            while($row=mysqli_fetch_array($query)){ 
                  
            ?> 
                <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p> 
            <?php 
                  
            } 
        ?> 
            <hr /> 
            <a href="index.php?page=cart">Go to cart</a> 
        <?php 
              
        }
        else
        {    
            echo "<p>Your Cart is empty. Please add some products.</p>"; 
        } 
      
    ?>
    <div id="container" align="left"> 
  
    <div id="main"> 

        <?php require($_page.".php"); ?>
          
    </div><!--end main-->
          
    <div id="sidebar" align="right"> 
              
    </div><!--end sidebar-->
  
    </div><!--end container-->
  
</body> 
</html>