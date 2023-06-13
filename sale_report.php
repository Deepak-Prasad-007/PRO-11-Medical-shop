<?php

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

			<h2>sale report</h2>
<form method="post" action="sale_report.php">
          <table border="1" width="80%">
               <tr>
                   <td></td>
                <td><b>reciept No</b></td>
                <td><b>date</b></td>
                <td><b>user name</b></td>
                 <td><b>phone NO</b></td>
                 <td><b>email</b></td>
                 <td><b>Address</b></td>
                 <td><b>Total price</b></td>
                   <td><b>medicine code</b></td>
                
                </tr>
                        <?php
                 $db=mysql_connect("localhost","root","");
                mysql_select_db("medical_db",$db);
                $result=mysql_query("Select * from sale",$db);
                while($row= mysql_fetch_array($result))
                {
                    ?>
                <tr>
                    <td><a href ="edit_sale.php?id=<?php echo $row[0]?>">edit</td>
                    <td><?php echo $row[0]?></td>
                    <td><?php echo $row[1]?></td>
                     <td><?php echo $row[2]?></td>
                       <td><?php echo $row[3]?></td>
                        <td><?php echo $row[4]?></td>
                         <td><?php echo $row[5]?></td>
                          <td><?php echo $row[6]?></td>
                          <td><?php echo $row[7]?></td>
                           
                </tr>
                <?php

                    }
                mysql_close();
            ?>


        </table>
        </form>

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
						        Sec-6 A market
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
							07700-28855
						</li>
					</ul>
				</li>
				<li>
					<span class="email">email</span>
					<ul>
						<li>
							<a href="http://www.freewebsitetemplates.com/misc/contact">manoharmedical@gmail.com</a>
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