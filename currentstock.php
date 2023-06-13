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
			
			<h2>current stock</h2>
<form method="post" action="currentstock.php">
            <table>
               <tr>
                <td>category </td>
                <td><select  name="st1" style="width:150px">
                        <?php
                 $db=mysql_connect("localhost","root","");
                mysql_select_db("medical_db",$db);
                $result=mysql_query("Select categoryname from category",$db);
                while($row= mysql_fetch_array($result))
                {   
                    echo "<option>$row[0]</option>";

                }
                mysql_close();
            ?>
                </select>
          
                    <td>
                        <input type="submit" name="submit" value="Show">

                    </td>
                </tr>
            </table>

<br>
    <table border="1" width="60%">
            <tr style="background-color: green;color:white">
                <td>medicine code</td>
                <td>company</td>
                <td>price</td>
                 <td>stock</td>
            </tr>
            <?php
            $cate=$_POST["st1"];

                $db=mysql_connect("localhost","root","");
                mysql_select_db("medical_db",$db);
                $result=mysql_query("Select * from medicine_details where category='$cate'",$db);
                while($row= mysql_fetch_array($result))
                {
                    echo "<tr style='background-color: white;color:blue'>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[6]</td>";
                     echo "<td>$row[9]</td>";
                    echo "</tr>";
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