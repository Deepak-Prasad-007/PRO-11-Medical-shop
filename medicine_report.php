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

			<h2>medicine report</h2>
<form method="post" action="medicine_report.php">
          <table border="1" width="80%">
               <tr>
                   <td></td>
                <td><b>medi code</b></td>
                <td><b>company name</b></td>
                <td><b>category</b></td>
                 <td><b>medicine name</b></td>
                 <td><b>power</b></td>
                 <td><b>for</b></td>
                 <td><b>price</b></td>
                 <td><b>sale price</b></td>
                  <td><b>rack no</b></td>
                 <td><b>stock</b></td>
                </tr>
                        <?php
                 $db=mysql_connect("localhost","root","");
                mysql_select_db("medical_db",$db);
                $result=mysql_query("Select * from medicine_details",$db);
                while($row= mysql_fetch_array($result))
                {
                    ?>
                <tr>
                    <td><a href ="edit_medicine.php?id=<?php echo $row[0]?>">edit</td>
                    <td><?php echo $row[0]?></td>
                    <td><?php echo $row[1]?></td>
                     <td><?php echo $row[2]?></td>
                       <td><?php echo $row[3]?></td>
                        <td><?php echo $row[4]?></td>
                         <td><?php echo $row[5]?></td>
                          <td><?php echo $row[6]?></td>
                           <td><?php echo $row[7]?></td>
                            <td><?php echo $row[8]?></td>
                            <td><?php echo $row[9]?></td>
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