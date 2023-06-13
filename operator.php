<?php
session_start();
$oid=$_SESSION["oid"];
$c=0;
$msg="";
if($_POST["submit"])
    {
        $operatorcode=$_POST["t1"];
       $operatorname=$_POST["t2"];
        $phoneNo=$_POST["t3"];
        $email=$_POST["t4"];
        $DOJ=$_POST["t5"];
        $DOB=$_POST["t6"];
        $bloodgroup=$_POST["t7"];
        $timing=$_POST["t8"];
        $salary=$_POST["t9"];
         //Insert Record
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        
      mysql_query("insert into operator_details values($operatorcode,'$operatorname','$phoneNo','$email','$DOJ','$DOB','$bloodgroup','$timing','$salary')",$db);
       $pwd=$operatorcode.$operatorname;
       mysql_query("insert into login values($operatorcode,'$pwd','operator')",$db);
       header("location:welcome.php?opcode=$operatorcode&pwd=$pwd");
      mysql_close();
        $msg="<span style='color:green'>* Record inserted Successfully.....</span>";
       
    }
    $_SESSION["oid"]=$operatorcode;
     $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
       $result=mysql_query("select * from operator_details");
        while($row=mysql_fetch_array($result))
        {
            $c++;
        }
         $c=$c+101;
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
				<a href="admin_change_pwd.php">change password</a>
			</li>

			<li>
				<a href="admin_report.php">report</a>
			</li>
			<li class="selected">
				<a href="operator.php">add Operator</a>
			</li>
			<li>
				<a href="admin_logout.php">Logout</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<div class="content">
			<h2>Add Operator</h2>
			<form method="post" action="operator.php">
				<label for="firstName"> <span>Operator code</span>
					<input type="text" name="t1" id="firstName" value="<?php echo $c;?>">
				</label>
				<label for="lastName"> <span>Operator name</span>
					<input type="text" name="t2" id="lastName">
				</label>
				<label for="email"> <span>Phone No</span>
					<input type="text" name="t3" id="email">
				</label>
				<label for="phoneNumber"> <span>Email</span>
					<input type="text" name="t4" id="phoneNumber">
				</label>
				<label for="subject"> <span>DOJ</span>
					<input type="text" name="t5" id="subject">
				</label>
				<label for="message"> <span>DOB</span>
					<input type="text" name="t6" id="subject">
				</label>
                                <label for="blood group"> <span>Blood group</span>
					<input type="text" name="t7" id="subject">
				</label>
                            <label for="Timing"> <span>Timing</span>
					<input type="text" name="t8" id="subject">
				</label>
                            <label for="salary"> <span>Salary</span>
					<input type="text" name="t9" id="subject">
				</label>
				<input type="submit" value="submit" name="submit" >
                                
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