<?php
$c=0;
$msg="";
if($_POST["submit"])
    {
        $t1=$_POST["t1"];
       $t2=$_POST["t2"];
       $t3=$_POST["st1"];
        $t4=$_POST["t4"];
         $t5=$_POST["t5"];
          $t6=$_POST["t6"];
           $t7=$_POST["t7"];
             $t8=$_POST["t8"];

      //Insert Record
       $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        mysql_query("insert into dealer_details values($t1,'$t2','$t3','$t4','$t5','$t6','$t7','$t8')",$db);
        mysql_close();
      $msg="<span style='color:green'>* Record inserted Successfully.....</span>";
    }
     $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
       $result=mysql_query("select * from dealer_details");
        while($row=mysql_fetch_array($result))
        {
            $c++;
        }
         $c=$c+1;
?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Medical shop management</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
        <link type="text/css" href="css/ui-lightness/jquery-ui-1.8.19.custom.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$("#t8").datepicker();
});
</script>
<style type="text/css">
.ui-datepicker { font-size:8pt !important}
</style>
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
			<h2>Dealer Details</h2>
			<form method="post" action="admin_dealer.php">
				<label for="firstName"> <span>Dealer ID</span>
					<input type="text" name="t1" id="firstName" value="<?php echo $c;?>">
				</label>
				<label for="lastName"> <span>Dealer name</span>
					<input type="text" name="t2">
				</label>

                       
                <label for="lastName"> <span>Medicine company</span>
                <td><select  name="st1" style="width:220px">
                        <option>select company</option>
                        <?php
                        $db=mysql_connect("localhost","root","");
                        mysql_select_db("medical_db",$db);
                        $result=mysql_query("Select company_name from company",$db);
                        while($row= mysql_fetch_array($result))
                        {
                            echo "<option>$row[0]</option>";
                           
                          
                        }
                        mysql_close();
                        ?>
                </select>
                </td>
            </label>
				<label for="email"> <span>Phone No</span>
					<input type="text" name="t4" id="email">
				</label>
				<label for="phoneNumber"> <span>Email</span>
					<input type="text" name="t5" id="phoneNumber">
				</label>
				<label for="subject"> <span>Address</span>
					<input type="text" name="t6" id="subject">
				</label>
				<label for="message"> <span>pin code</span>
					<input type="text" name="t7" id="subject">
				</label>
                            <label for="message"> <span>date</span>
					<input type="text" name="t8" id="t8" value="<?php date_default_timezone_set("Asia/Calcutta");echo date("y/m/d");?>"id="subject">
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