<?php
$msg="";
if($_POST["submit"])
    {
       $uname=$_POST["t1"];
       $email=$_POST["t2"];
       $message=$_POST["t3"];

       //Insert Record
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        mysql_query("insert into contact_us values('$uname','$email','$message')",$db);
        mysql_close();
       $msg="<span style='color:green'>* Record inserted Successfully.....</span>";
    }
?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	 <center><img src="images/dev2.jpeg" height="300px" width="100%" style=""></center>

	<div id="header" style="background-color: white">
		<ul>
			<li>
				<a href="login.php">Login</a>
			</li>
			<li class="selected">
				<a href="contact_us.php">Contact Us</a>
			</li>
                        <li>
				<a href="op_logout.php">Logout</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<div class="content">

			<h2>Contact Us</h2>
  <form method="post" action="contact_us.php">
            <table>

                <tr>
                     <td>user name</td><td><input type="text" name="t1"></td>
                </tr>
                <tr>
                     <td>email</td><td><input type="text" name="t2"></td>
                </tr>

                <tr>
                <td>message</td>
                <td><textarea rows="3" cols="30" name="t3"></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="submit" name="submit" ></td>
                </tr>

            </table>

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
							Medical store
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
							0700-28855
						</li>
					</ul>
				</li>
				<li>
					<span class="email">email</span>
					<ul>
						<li>
							<a href="http://www.freewebsitetemplates.com/misc/contact">Manoharmedical.com</a>
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