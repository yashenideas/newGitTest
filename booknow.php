
<html>
<head>




  <meta charset= "utf-8">
  <meta name = "viewport" content = "width =device-width">
   <meta name = "description" content = "">
   <meta name = "keywords" content = "">
  <meta name = "author" content = "decio mota">
  <title>Shape Your Life Health and Wellness </title>
  <link rel="stylesheet" href ="./css/style.css">


</head>

    <header>
	<div id="hed">
         <div id="branding">
          <h1>Shape Your Life Health and Wellness </h1> 		 
		</div>
	<nav>
	<nav>
	<ul>
	  <li><a  href="rooms.html">Gym membership</a></li>
	   <li><a  href="contact.html">Contact</a></li>
	   <li><a  href="booknow.php">Gym Classes now</a></li>
	   <li><a  href="about.html">about us</a></li>
	  <li><a  href="index.php">Home</a></li>
	</ul>
	</nav>
	</div>
      </header>
	  
	  <section id= "showcase">
	    <div class= "container">
		  
		  
		<h1 style="text-align:center; color:#e8491d;outline-color:black;">Accommodation and all allied activities</h1>
		  <p></p>
		  
		  </div>
	<section id= "newsletter" style="max-width:1200px;margin-left:auto; margin-right: auto; background-color:black; border-radius: 7px; padding:5px; opacity: 0.8">	  
	
<form action="" method="post">
  <div class="form-group">
    <h2 class="heading">Sign up:</h2>
   Full Name:<br>
  <input type="text" name="Fullname" placeholder="your Full name">
  <br>
    Email:<br>
  <input type="text" name="Email" placeholder="your email">
  <br>
  Phone:<br>
  <input type="text" name="Phone" placeholder="your Phone number">
  <br><br>
 	     <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Check in:</label>
        <input type="date" id="arrive" class="floatLabel" name="arrive">
      
      </div>    

<div class="controls">
        <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Check out:</label>
        <input type="date" id="depart" class="floatLabel" name="depart"/>
      </div>      
   
	<label for="fruit"><i class="fa fa-male"></i>Membership type:</label>
	 <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select name="NOA"class="floatLabel">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
        </select>
		
			
	 <div class="grid">
	 <label for="fruit"><i></i>&nbsp;&nbsp;Any childern included free under 6:</label>
    <div>
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select name="NOC" class="floatLabel">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
        </select>
   
   </div>
   </div>
   </div>
		<div >
		     <label for="fruit">membersip benefits:</label>
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select name="room">
	  <label for="fruit">membersip benefits:</label>
        <option value="blank"></option>
        <option value="deluxe" selected>With benefits</option>
        <option value="Zuri-zimmer">Without benefits</option>
      </select>
     </div>     
		
      </div>      
    
		  <button type="submit" name="capture" class="Submit_1">Submit</button>
      </div>
</div>
</div>	  
</div>
</div>
</div>
		   </form> 
		 
		 
		 <?php
	include("includes/db.php");
	
	if(isset($_POST['capture'])){
		
	$fname = $_POST['Fullname'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];
	$checkin = $_POST['arrive'];
	$checkout = $_POST['depart'];
	$numberofA = $_POST['NOA'];
	$numberofC = $_POST['NOC'];
	$room = $_POST['room'];
	
	$insert_cat = "insert into booking (full_name, email, phone, check_in, check_out, numberOfAdults, numberOfChildren, room) 
					values ('$fname','$email','$phone','$checkin','$checkout','$numberofA','$numberofC','$room')";
	
	$run_cat = mysqli_query($con,$insert_cat);
	
	if($run_cat){
		
		echo"<script>alert('Thank You For Booking, Enjoy!!!')</script>";
		
	
	}
	}
			?>
		   </section>
		   
		   <details>
				<summary>Process payment</summary>
				<table width ="795" align="center" bgcolor="#e8491d">

				<tr align="center">
					<td colspan="10"><h2>Membership sign up</h2></td>
				</tr>
				<tr align='center' bgcolor='white' border='2px solid orange'>
					<th>No.</th>
					<th>I.D</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Phone</th>						
					<th>Check In</th>
					<th>Check Out</th>
					<th>N.O.A</th>
					<th>N.O.C</th>
					<th>Room</th>	
						<th> <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="yashennaidu@gmail.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Room">
  <input type="hidden" name="amount" value="1000">
  <input type="hidden" name="currency_code" value="ZAR">

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
</th>			
				</tr>
				<?php
				
	
	$get_bookings= "select * from booking";
	include("includes/db.php");
	$run_bookings = mysqli_query($con, $get_bookings);
	$i=0;
	while($row_bookings = mysqli_fetch_array($run_bookings)){
		
		$g_id = $row_bookings['guest_id'];
		$fname = $row_bookings['full_name'];
		$email = $row_bookings['email'];
		$phone = $row_bookings['phone'];
		$checkin = $row_bookings['check_in'];
		$checkout = $row_bookings['check_out'];
		$noa = $row_bookings['numberOfAdults'];
		$noc = $row_bookings['numberOfChildren'];
		$room = $row_bookings['room'];
		
		 $i++;
		 
		 ?>
		 
		 </tr>
		 	<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php echo $g_id; ?></td>
			<td><?php echo $fname; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $phone; ?></td>
			<td><?php echo $checkin; ?></td>
			<td><?php echo $checkout; ?></td>
			<td><?php echo $noa; ?></td>
			<td><?php echo $noc; ?></td>
			<td><?php echo $room; ?></td>
	
			<?php }?>
			
			</table>
		 </details>
		  <Style>
	input[type=text], select, textarea {
    width: auto;
	min-width:10%;
	height: 5%;
	padding-left:1%;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 4px;
    margin-bottom: 11px;
    resize: vertical;
	}

     button[type=submit] {
    background-color:#e8491d ;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
 body form{
 
	 font-family: cooper black;
	 font-size: 22px;
	 padding:0;
	 margin:0;
	 color: #e8491d  ;

	border:50px;
 
 }
 </Style>
		   
		  
		  
		
				<footer class="footer">
			     <section>
<div class="center_footer"> Developed by Yashen Naidu 2017 <br />				</section>
				</footer>

</body>
</html>