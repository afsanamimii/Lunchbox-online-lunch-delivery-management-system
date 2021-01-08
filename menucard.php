<?php
SESSION_START();

?>

<!DOCTYPE html>
<html>
<head>
	<title>MENU CARD</title>
	<link rel="stylesheet" type="text/css" href="stylesheet2.css"/>
</head>
<body>
	
<div id="container">
	
	<div id="header">
      <h1> WELCOME TO LUNCHBOX</h1>
      <div class="level6">
      	<a href="cart.php" color="red" ><h2>CART</h2></a>
      </div>
    
</div>

<div id="content">
    <div id="nav">
    	<h3>Welcome <br>
    		<?php echo $_SESSION['name']?></h3>
     <h3><a href="seeorderprogress.php">Track Your order</a></h3><br>
     <h3><a href="cutomerlogout.php">log out</a></h3><br>

    </div>
    <br>
    <br>

    



    <div id="main">



    		
    	




          <form action="saveoderdatabase2.php " method="get">

          	<div id="img">
             <img src="biriani.jpg" height="200" width="220" hspace="40" vspace="20" />
    	<img src="rice.jpg" height="200" width="220" hspace="40" vspace="20"/>
    	 <img src="curry.jpg" height="200" width="220" hspace="40" vspace="20"/>
    	 <img src="fish.jpg" height="200" width="220" hspace="40" vspace="20"/>
          	</div>

          	<div>
          		<label class="level"><b>BIRIANI</b>, Price:160taka/=</label>
        <label class="level3"><b>RICE</b>, Price:20taka/=</label>
        <label class="level5"><b>CHICKEN CURRY</b>, Price:120taka/=</label>
        <label class="levelinput2"><b>FISH</b>, Price:100taka/=</label>
        <br>
        <br>
          	</div>

          	
        <label class="level">Select:</label>
    	<input type="checkbox" name="choice[]" value="1">
    
    	 
    	<label class="level2">Select:</label>
    	<input type="checkbox" name="choice[]" value="2">
    	
    	<label class="level2">Select:</label>
    	<input type="checkbox" name="choice[]" value="3">
    	
    	<label class="level2">Select:</label>
    	<input type="checkbox" name="choice[]" value="4">
    	
    	<br>
    	<br>

       
    	<label class="level">Quantity:</label>
    	<input type="number" name="quantity1">
    	
        <label class="levelinput2">Quantity:</label>
    	<input type="number" name="quantity2">
    	<label class="levelinput2">Quantity:</label>
    	<input type="number" name="quantity3">
    	<label class="levelinput2">Quantity:</label>
    	<input type="number" name="quantity4">
        <br>
        <br>
        <br>


        <div >
            <br>
        <img src="tehari.jpg" height="200" width="220" hspace="40" vspace="30" />
        <img src="khichuri.jpg" height="200" width="220" hspace="40" vspace="30" />
        <img src="dal.jpg" height="200" width="220" hspace="40" vspace="30" />
        <img src="goru.jpg" height="200" width="220" hspace="40" vspace="30" />
          	</div>


          	<div>
               <label class="level"><b>TEHARI</b>, Price:200 taka/=</label>
        <label class="level3"><b>KHICHURI</b>, Price:120 taka/=</label>
        <label class="level4"><b>DAL</b>, Price:15 taka/=</label>
        <label class="level5"><b>GORU VUNA</b>, Price:180 taka/=</label>
        <br>
        <br>

          	</div>


        
    
         
        <label class="level">Select:</label>
    	<input type="checkbox" name="choice[]" value="5">
    	
    	<label class="level2">Select:</label>
    	<input type="checkbox" name="choice[]" value="6">
    	
    	<label class="level2">Select:</label>
    	<input type="checkbox" name="choice[]" value="7">
    	
    	<label class="level2">Select:</label>
    	<input type="checkbox" name="choice[]" value="8">
    	
    	<br>
    	<br>
    	
        <label class="level">Quantity:</label>
    	<input type="number" name="quantity5">
        <label class="levelinput2">Quantity:</label>
    	<input type="number" name="quantity6">
    	<label class="levelinput2">Quantity:</label>
    	<input type="number" name="quantity7">
    	<label class="levelinput2">Quantity:</label>
    	<input type="number" name="quantity8">
        <br>
        <br>
        <br>


         
    	<input class="level" color="green" type="submit" name="submit2" value="CONFIRM ORDER">


    	

    </form>
        

    	


    	
         
    

    </div>

	</div>


	<div id="footer">
		<p>Developed by  Afsana Mimi<br>
			East West University<br>
			Copyright &copy; 2021 
		</p>


	</div>



</div>

</body>
</html>