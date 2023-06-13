<?php

    $msg="";
    if($_POST["submit"])
    {
    $t1=$_POST["t1"];
        $t2=$_POST["t2"];
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        mysql_query("update category set categoryname='$t2' where categorycode='$t1'",$db);
        mysql_close();

       $msg="<span style='color:green'>* Updated Successfully.....</span>";

    }
        $t1="";
        $t2="";
        $cid=$_GET["id"];
       $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        $result=mysql_query("Select * from category where categorycode='$cid'",$db);
        while($row= mysql_fetch_array($result))
        {
            $t1=$row[0];
            $t2=$row[1];
        }
        mysql_close();

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
			<h2>Edit Category</h2>
                        <form method="post" action="edit_category.php">
            <table>
                <tr>
                    <td>category code</td>
                    <td><input type="text" name="t1" value="<?php echo $t1;?>"></td>
                </tr>
                <tr>
                    <td>category name</td>
                    <td><input type="text" name="t2" value="<?php echo $t2;?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="edit">

                    </td>
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