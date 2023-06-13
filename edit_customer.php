<?php

$msg="";
if($_POST["submit"])
    {
        $t1=$_POST["t1"];
       $t2=$_POST["t2"];
       $t3=$_POST["t3"];
        $t4=$_POST["t4"];
         $t5=$_POST["t5"];
          $t6=$_POST["t6"];

          //update Record
       $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        mysql_query("update customer_details set name='$t2',phoneNo='$t3',email='$t4',address='$t5',date='$t6' where customerID='$t1'",$db);
        mysql_close();
        $msg="<span style='color:green'>* Updated Successfully.....</span>";
    }
      $t1="";
      $t2="";
      $t3="";
      $t4="";
      $t5="";
      $t6="";
      $cid=$_GET["id"];
       $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        $result=mysql_query("Select * from customer_details where customerID='$cid'",$db);
        while($row= mysql_fetch_array($result))
        {
            $t1=$row[0];
            $t2=$row[1];
            $t3=$row[2];
            $t4=$row[3];
            $t5=$row[4];
            $t6=$row[5];
        }
        mysql_close();
?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Medical shop management</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
     <center><img src="images/dev2.jpeg" height="300px" width="100%" style=""></center>

	<div id="header" style="background-color: white">
		<ul>
			<li>
				<a href="my_account.php">my account</a>
			</li>
			<li>
				<a href="op_change_pwd.php">change password</a>
			</li>
			<li>
				<a href="sale.php">sale</a>
			</li>

			<li>
				<a href="op_profile.php">operator profile</a>
			</li>
			<li>
				<a href="op_logout.php">logout</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<div class="content">
			<h2>Edit customer</h2>
			<form method="post" action="edit_customer.php">
				<label for="firstName"> <span>Customer ID</span>
					<input type="text" name="t1" value="<?php echo $t1;?>">
				</label>
				<label for="lastName"> <span>Customer name</span>
					<input type="text" name="t2" value="<?php echo $t2;?>">
                                                </label>
				<label for="email"> <span>Phone No</span>
					<input type="text" name="t3" value="<?php echo $t3;?>">
				</label>
				<label for="phoneNumber"> <span>Email</span>
					<input type="text" name="t4" value="<?php echo $t4;?>">
				</label>
				<label for="subject"> <span>Address</span>
					<input type="text" name="t5" value="<?php echo $t5;?>">
				</label>
                            <label for="message"> <span>date</span>
					<input type="text" name="t6" value="<?php echo $t6;?>">
				</label>
                            <input type="submit" value="edit" name="submit" >

			</form>
                        <?php echo $msg;?>
		</div>
		<div class="sidebar">
			<h3>contact</h3>
			<ul>
				<li>
					<span class="address">address</span>
					<ul>
						<li>
							Manohar
						</li>
						<li>
							Medical Store
						</li>
						<li>
							Sec-6 'A'market
						</li>
						<li>
							Bhilai
						</li>
					</ul>
				</li>
				<li>
					<span class="phone">telephone</span>
					<ul>
						<li>
							0770-25588
						</li>
					</ul>
				</li>
				<li>
					<span class="email">email</span>
					<ul>
						<li>
							<a href="http://www.freewebsitetemplates.com/misc/contact">manoharmedical.com</a>
						</li>
					</ul>
				</li>

				<li>
					<span class="facebook">facebook</span>
					<ul>
						<li>
							<a href="http://freewebsitetemplates.com/go/facebook/">www.facebook/manoharmedical</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				<span>2023 &copy; manohar medical store.</span><a href="#" >Terms of Service</a> | <a href="#" >Privacy Policy</a>
			</p>
			<ul>
				<li id="facebook">
					<a href="http://freewebsitetemplates.com/go/facebook/">facebook</a>
				</li>
				<li id="twitter">
					<a href="http://freewebsitetemplates.com/go/twitter/">twitter</a>
				</li>
				<li id="googleplus">
					<a href="http://freewebsitetemplates.com/go/googleplus/">googleplus</a>
				</li>
				<li id="rss">
					<a href="#" >rss</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>