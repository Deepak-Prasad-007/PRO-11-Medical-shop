<?php
session_start();
$tid=$_SESSION["tid"];
$msg="";
    if(isset($_POST["submit"]))
    {
        $old_pwd_db="";
        $db=mysqli_connect("localhost","root","");
        mysqli_select_db($db,"medical_db");
         $result=mysqli_query($db,"select * from login where id='$tid'");
         while($row= mysqli_fetch_array($result))
        {  
            $old_pwd_db=$row[1];
        }
        mysqli_close($db);
        
        $old_pwd=$_POST["t1"];
        $new_pwd=$_POST["t2"];
        $retype=$_POST["t3"];
        
        if($old_pwd==$old_pwd_db)
        {
            if($new_pwd==$retype)
            {
                $db=mysqli_connect("localhost","root","");
                mysqli_select_db($db,"medical_db");
                mysqli_query($db,"update login set Password='$new_pwd' where id='$tid'");
                mysqli_close($db);
                $msg="<span style='color:green'>* Password Updated Successfully.....</span>";
            }
            else
            {
                $msg="<span style='color:red'>* Retype Password not Match.....</span>";
            }                  
        }
        else
        {
            $msg="<span style='color:red'>* Old Password not Match.....</span>"; 
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
			<li>
				<a href="administration.php">administration</a>
			</li<>
			<li>
				<a href="operator.php">add Operator</a>
			</li>

			<li>
				<a href="admin_report.php">report</a>
			</li>
			<li class="selected">
                            <a href="admin_change_pwd.php">change password</a>

			</li>
			<li>
				<a href="admin_logout.php">Logout</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<div class="content">
			
			<h2>Change password</h2>
<form method="post" action="admin_change_pwd.php">
            <table>
                <tr>
                    <td>Old Password</td>
                    <td><input type="password" name="t1" ></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td><input type="password" name="t2"></td>
                </tr>
                <tr>
                    <td>Retype Password</td>
                    <td><input type="password" name="t3"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Change Password"></td>
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
							Manohar medical store
						</li>
						<li>
							sec-6 A market
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
							9977692270
						</li>
					</ul>
				</li>
				<li>
					<span class="email">email</span>
					<ul>
						<li>
							<a href="http://www.freewebsitetemplates.com/misc/contact">mahoharmedical@gmail.com</a>
						</li>
					</ul>
				</li>
				<li>
					<span class="twitter">twitter</span>
					<ul>
						<li>
							<a href="http://freewebsitetemplates.com/go/twitter/">@manoharmedical</a>
						</li>
					</ul>
				</li>
				<li>
					<span class="facebook">facebook</span>
					<ul>
						<li>
							<a href="http://freewebsitetemplates.com/go/facebook/">www.facebook/manohar medical</a>
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