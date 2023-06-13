<?php
$msg="";
if($_POST["submit"])
    {
        $t1=$_POST["t1"];
       $st1=$_POST["st1"];
       $st2=$_POST["st2"];
        $t2=$_POST["t2"];
         $t3=$_POST["t3"];
          $st3=$_POST["st3"];
           $t4=$_POST["t4"];
            $t5=$_POST["t5"];
            $t6=$_POST["t6"];

         //update Record
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
       
        mysql_query("update medicine_details set companyname='$st1',category='$st2',mediname='$t2',power='$t3',Used_for='$st3',price='$t4',saleprice='$t5',rackNo='$t6' where medicode='$t1'",$db);
        mysql_close();
          $msg="<span style='color:green'>* Updated Successfully.....</span>";
    }
      $t1="";
      $st1="";
      $t2="";
      $t3="";
      $t4="";
      $st2="";
      $t5="";
      $t6="";
      $t7="";
      $mid=$_GET["id"];
       $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        $result=mysql_query("Select * from medicine_details where medicode='$mid'",$db);
        while($row= mysql_fetch_array($result))
        {
            $t1=$row[0];
            $st1=$row[1];
            $t2=$row[2];
            $t3=$row[3];
            $t4=$row[4];
            $st2=$row[5];
            $t5=$row[6];
            $t6=$row[7];
            $t7=$row[8];
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
			</li>
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

			<h2>Medicine details</h2>
        <form method="post" action="edit_medicine.php">
            <table>
                <tr>
            <td>medicine code</td>
            <td><input type="text" name="t1" value="<?php echo $t1;?>"></td>
                </tr>
             <tr>
                <td>company</td>
                <td><select  name="st1" style="width:150px">
                        <option>select company</option>
                        <?php
                        $db=mysql_connect("localhost","root","");
                        mysql_select_db("medical",$db);
                        $result=mysql_query("Select company_name from company",$db);
                        while($row= mysql_fetch_array($result))
                        {
                            echo "<option>$row[0]</option>";
                        }
                        mysql_close();
                        ?>
                </select>
                    </td>
            </tr>
             <tr>
                 <td>category</td>
                 <td><select  name="st2" style="width:150px">
                        <option>select category</option>
                        <?php
                        $db=mysql_connect("localhost","root","");
                        mysql_select_db("medical",$db);
                        $result=mysql_query("Select categoryname from category",$db);
                        while($row= mysql_fetch_array($result))
                        {
                            echo "<option>$row[0]</option>";
                        }
                        mysql_close();
                        ?>
                </select>
                    </td>

             </tr>
               <tr>
                 <td>medicine name</td><td><input type="text" name="t2" value="<?php echo $t3;?>"></td>
             </tr>


             <tr>
                 <td>power(mg)</td><td><input type="text" name="t3" value="<?php echo $t4;?>"></td>
             </tr>
             <tr>
                <td>For</td>
                <td><select  name="st3" style="width:150px">
                        <option>child</option>
                        <option>adult</option>
                        <option>general</option></td>
                </select>
            </tr>
            <tr>
                 <td>price</td><td><input type="text" name="t4" value="<?php echo $t5;?>"></td>
             </tr>
             <tr>
                 <td>sale price</td><td><input type="text" name="t5" value="<?php echo $t6;?>""></td>
             </tr>
             <tr>
                 <td>rack no.</td><td><input type="text" name="t6" value="<?php echo $t7;?>"></td>
             </tr>



            </table>
            <input type="submit" value="edit" name="submit">
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