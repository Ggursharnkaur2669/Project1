
<!DOCTYPE html>
<html lang="en">
<!--Gursharan Kaur 8622669 Dated-28.02.2020-->
<head>
  <title>Book Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

/* Container css*/
.container {
  /*position: relative;*/
  width: 100%;
  max-width: 1000px;
  max-height:100px;
}
/* Container image css*/
.container img {
  width: 100%;
  height: auto;
}
/*Container button css */
.container .btn {
  position: absolute;
  top: 300%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: 5px solid;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

/*button hover style*/ 
.container .btn:hover {
  background-color: black;
}
.container {
  position: relative;
  font-family: Arial;
}
/*text placed on image styling */
.text-block {
  position: absolute;
  bottom: 9.5px;
  right: 80px;
  left:80px;
  background-color: black;
  color: white;
  padding-left: 50px;
  padding-right: 50px;
}
footer{
  background-color:black;
  padding:10px;
  text-align:center;
  color:white;
  position:relative;
  top:600px;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Book Hub</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="store.php">Shop</a></li>
      <li><a href="checkout.php">check Out</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3 style="color:Dark Blue; font-weight:Bold">Book Hub</h3>
  
  </div>
  <div class ="container">
  
  <img src="images/walpaper2.jpg" alt="home" style="width:100%">
  
  <div class="text-block">
    <h4>Books N Books </h4>
    <p>A book is a medium for recording information in the form of writing or images, typically composed of many pages (made of papyrus, parchment, vellum, or paper) bound together and protected by a cover.</p>
  </div>
  <a href="store.php"><button class="btn btn-primary">SHOP NOW</button></a>
</div>
  
  



</body>
<footer><p>Copyright@2020 All Rights Are Reserved.</p></footer>
</html>





