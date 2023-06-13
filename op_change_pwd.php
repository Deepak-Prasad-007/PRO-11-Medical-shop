<?php
session_start();
$oid=$_SESSION["oid"];
    $msg="";
echo $oid;
    if($_POST["submit"])
    {
        $old_pwd_db="";
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical",$db);

        
        $result=mysql_query("Select password from login where id=$oid",$db);
        while($row= mysql_fetch_array($result))
        {
            $old_pwd_db=$row[0];
        }
        mysql_close();

        $old_pwd=$_POST["t1"];
        $new_pwd=$_POST["t2"];
        $retype=$_POST["t3"];

        if($old_pwd==$old_pwd_db)
        {
            if($new_pwd==$retype)
            {
                $db=mysql_connect("localhost","root","");
                mysql_select_db("medical",$db);
                mysql_query("update login set password='$new_pwd' where id=$oid",$db);
                mysql_close();
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
                     <table width="500px" border="0">
        <tr>
            <td><img src="images/dlogo.jpg" width="100px"></td>
            </table>
                   
			<h2>Change password</h2>
<form method="post" action="op_change_pwd.php">
            <table>
                <tr>
                    <td>Old Password</td>
                    <td><input type="text" name="t1" ></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td><input type="text" name="t2"></td>
                </tr>
                <tr>
                    <td>Retype Password</td>
                    <td><input type="text" name="t3"></td>
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
				<span>2023 &copy; Manohar medical store.</span><a href="#" >Terms of Service</a> | <a href="#" >Privacy Policy</a>
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