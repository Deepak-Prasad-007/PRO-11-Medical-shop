<?php
session_start();
$oid=$_SESSION["oid"];
$c=0;
$msg="";
if($_POST["submit"])
    {
        $op=$_POST["t1"];
       $ph=$_POST["t2"];
        $em=$_POST["t3"];
        $dob=$_POST["t4"];
        $bg=$_POST["t5"];
         //Insert Record
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
      mysql_query("update operator_details set operatorname='$op',phoneNo='$ph',email='$em',DOB='$dob',bloodgroup='$bg' where operatorcode='$oid'",$db);
       mysql_close();
       $msg="<span style='color:green'>* Record updated Successfully.....</span>";

    }
        $t1="";
        $t2="";
        $t3="";
        $t4="";
        $t5="";

     $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
       $result=mysql_query("select * from operator_details where operatorcode='$operatorcode'");
        while($row=mysql_fetch_array($result))
        {
            $t1=$row[1];
            $t2=$row[2];
            $t3=$row[3];
            $t4=$row[5];
            $t5=$row[6];

        }
        


    
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
			
			<h2>Operator profile</h2>
			<form method="post" action="op_profile.php">
				<label for="firstName"> <span>Operator name</span>
					<input type="text" name="t1" id="firstName" value="<?php echo $t1;?>">
				</label>
				<label for="lastName"> <span>phone no</span>
					<input type="text" name="t2"  id="lastName" value="<?php echo $t2;?>">
				</label>
				<label for="email"> <span>email</span>
					<input type="text" name="t3" id="email" value="<?php echo $t3;?>">
				</label>
				<label for="phoneNumber"> <span>DOB</span>
					<input type="text" name="t4" id="phoneNumber" value="<?php echo $t4;?>">
				</label>
				<label for="subject"> <span>blood group</span>
					<input type="text" name="t5" id="subject" value="<?php echo $t5;?>">
				</label>
                             <input type="submit" name="submit" value="Edit Profile">
				
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
				

				<li>
					
			</ul>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				<span>2023 &copy; Illumelabs Diagnostic Center.</span><a href="#" >Terms of Service</a> | <a href="#" >Privacy Policy</a>
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