<?php
    session_start();
    $msg="";
    if(isset($_POST["submit"]))
    {
        $id=$_POST["t1"];
        $pwd=$_POST["t2"];
        $role="";
        $status="";
        $flag=false;
        //Select Record
        $db=mysqli_connect("localhost","root","");
        mysqli_select_db($db,"medical_db");
         $result=mysqli_query($db,"select Role from login where id='$id' and Password='$pwd'");
        while($row= mysqli_fetch_array($result))
        {
            $flag=true;
            $role=$row[0];
        }
        mysqli_close($db);
        
        if($flag==true)
        {
            $_SESSION["tid"]=$id;
        
            if($role=="operator")
            {           
                header("location: op_profile.php");
            }           
            if($role=="admin")
            {           
                header("location: admin_change_pwd.php");
            }
            if($role=="block")
            {           
                $msg="<span style='color:red'>* You are Blocked By Admin...</span>";
            }
        }
        else
        {
            $msg="<span style='color:red'>* Invalid Login Id or Password...</span>";
        }
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


			<li class="selected">
				<a href="login.php">Login</a>
			</li>
			<li>
				<a href="contact_us.php">Contact Us</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<div class="content">

			<h2>Login</h2>
<form method="post" action="login.php">
            <table>
                <tr>
                    <td>Login ID</td>
                    <td><input type="text" name="t1" ></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="t2"></td>
                </tr>
                   <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Login"></td>
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
