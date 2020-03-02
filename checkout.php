<?php 
    //--Gursharan Kaur 8622669 Dated-28.02.2020-->
    require('mysqli_connect.php');
	$error = array();

    //getting bookid from store page
	if(isset($_GET['bid'])) {
       
        
       
		$bid = '';
        $bookTitle = '';
        $bookPrice = '';
        $bookImage = '';		
		$bid = $_GET['bid'];
	
        $q = "SELECT * FROM bookinventory WHERE ID = $bid";
        
        $r = mysqli_query($dbc, $q);
        
        echo mysqli_error($dbc);
		$db_form_query_results = mysqli_fetch_array($r);

		$bookTitle = $db_form_query_results['Title'];
		$bookPrice = $db_form_query_results['Price'];
		$bookImage = $db_form_query_results['Image']; 
	}

echo mysqli_error($dbc);

// checking form submission and santizing the strings
    if(isset($_POST['submit']))
    {
    	$firstname = $_POST['firstname'];
    	$lastname = $_POST['lastname'];
    	
    	$payment = $_POST['payment'];          
        
        if(empty($firstname) || strlen($firstname) == 0) {
 			array_push($error, "Go back to store page to make selection again and then fill the following things in the form.Please enter your firstname<br><br>");
    	} else {
        	$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
   		}
		if(empty($lastname) || strlen($lastname) == 0) {
 			array_push($error, "Go back to store page to make selection again and then fill the following things in the form.Please enter your lastname<br><br>");
    	} else {
        	$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
   		}
		
		if(empty($payment) || strlen($payment) == 0) {
			array_push($error, "Please choose a payment method <br><br>");
		} else {
			$payment = filter_var($_POST['payment'], FILTER_SANITIZE_STRING);
		}
        $id = $_POST['id'];
        echo $id;
       
	 	
        //reducing quanity by 1
        if(empty($error))
	 	{
	 		$q = "INSERT INTO users VALUES ('','$firstname','$lastname','$payment')";
	 		$insert_query = mysqli_query($dbc,$q);
            echo mysqli_error($dbc);

	 		$query = mysqli_query($dbc, "SELECT * FROM bookinventory WHERE ID = $id");
             $details = mysqli_fetch_array($query);
             
	 		$quantity = $details['Quantity'];
             echo $quantity;
            $newQuantity = $quantity - 1;
             

	 		$update = mysqli_query($dbc,"UPDATE bookinventory SET Quantity = '$newQuantity' WHERE ID='$id'");

	 		header("Location: success.php");
	 	}
        else{
	 		foreach ($error as $key => $value) {
	 			echo $value;
	 		}
	 		
	 	}
	}

 ?>

<!DOCTYPE html>
<html>

<head>
<title>Check Out</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>

</style>
</head>

<body>
<!--navbar---->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Book Hub</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="store.php">Store</a></li>
      <li><a href="checkout.php">check Out</a></li>
      
    </ul>
  </div>
</nav>
    <div class=" text-center"><br><br>
        <div class='img_disp' style=" height: 50%; width: 100%; ">
            <img src="<?php echo $bookImage; ?>" style="width:250px;height:400px; ">
        </div>

        <div class='confirmation col-sm-12'>
        <label class="control-label col-sm-2">Book Title:</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" value="<?php if(isset($bookTitle)) echo $bookTitle; ?>" disabled="disabled">
        </div>
        <br><br><br>
        <div>
            <label class="control-label col-sm-2">Unit Price:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" value="<?php if(isset($bookPrice)) echo $bookPrice; ?>" disabled="disabled">
            </div>
        </div>
    </div>
    <div>
    <br>
    <div class='confirmation col-sm-12'>
        <br>

        <div class='form'>
            <form class="form-horizontal" action='checkout.php' method='post'>



                <div class="form-group">
                    <label class="control-label col-sm-2">First Name:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']?>" name="firstname">
                    </div>
          </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Last Name:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="" name="lastname">
                    </div>
                </div>
             <div class="form-group">
                    <label class="control-label col-sm-2">Payment:</label>
                    <div class="col-sm-2">
                        <select name="payment" style="color: black">
                            <option value="Credit card">Credit Card</option>
                            <option value="Debit Card">Debit Card</option>
                        </select>
                    </div>
                </div>

                <input type="hidden" name="id" value="<?php echo $bid; ?>">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button type="submit" class="btn btn-primary" style='padding:2px;
				width: 150px;height:50px;' name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
   
</body>
<footer style="background-color:black;color:white;text-align:center;max-height:200px;position:absolute;top:825px;width:100%;"><p>Copyright@2020 All Rights Are Reserved.</p></footer>
</html>
