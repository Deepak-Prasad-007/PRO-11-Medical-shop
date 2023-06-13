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
        $t7=$_POST["t7"];
        $t8=$_POST["t8"];
        $t9=$_POST["t9"];
         //update Record
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);

      mysql_query("update operator_details set operatorname='$t2',phoneNo='$t3',email='$t4',DOJ='$t5',DOB='$t6',bloodgroup='$t7',timing='$t8',salary='$t9' where operatorcode='$t1'",$db);
        mysql_close();
          $msg="<span style='color:green'>* Updated Successfully.....</span>";
    }
      $t1="";
      $t2="";
      $t3="";
      $t4="";
      $t5="";
      $t6="";
      $t7="";
      $t8="";
      $t9="";
      $oid=$_GET["id"];
       $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        $result=mysql_query("Select * from operator_details where operatorcode='$oid'",$db);
        while($row= mysql_fetch_array($result))
        {
            $t1=$row[0];
            $t2=$row[1];
            $t3=$row[2];
            $t4=$row[3];
            $t5=$row[4];
            $t6=$row[5];
            $t7=$row[6];
            $t8=$row[7];
            $t9=$row[8];
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
				<a href="administration.php">administration</a>
			</li<>
			<li>
				<a href="operator.php">add Operator</a>
			</li>

			<li>
				<a href="admin_report.php">report</a>
			</li>
			<li>
                            <a href="admin_change_pwd.php">change password</a>

			</li>
			<li>
				<a href="admin_logout.php">Logout</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<div class="content">
			<h2>edit Operator</h2>
			<form method="post" action="edit_operator.php">
				<label for="firstName"> <span>Operator code</span>
					<input type="text" name="t1" value="<?php echo $t1;?>">
				</label>
				<label for="lastName"> <span>Operator name</span>
					<input type="text" name="t2" value="<?php echo $t2;?>">
				</label>
				<label for="email"> <span>Phone No</span>
					<input type="text" name="t3" value="<?php echo $t3;?>">
				</label>
				<label for="phoneNumber"> <span>Email</span>
					<input type="text" name="t4" value="<?php echo $t4;?>">
				</label>
				<label for="subject"> <span>DOJ</span>
					<input type="text" name="t5" value="<?php echo $t5;?>">
				</label>
				<label for="message"> <span>DOB</span>
					<input type="text" name="t6" value="<?php echo $t6;?>">
				</label>
                                <label for="blood group"> <span>Blood group</span>
					<input type="text" name="t7" value="<?php echo $t7;?>">
				</label>
                            <label for="Timing"> <span>Timing</span>
					<input type="text" name="t8" value="<?php echo $t8;?>">
				</label>
                            <label for="salary"> <span>Salary</span>
					<input type="text" name="t9" value="<?php echo $t9;?>">
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