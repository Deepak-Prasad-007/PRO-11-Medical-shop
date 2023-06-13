<?php
$c=0;
$msg="";
if($_POST["submit"])
    {
        $mcode=$_POST["t1"];
       $stock=$_POST["t5"];

       
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        mysql_query("update medicine_details set stock=stock+$stock where medicode='$mcode'",$db);
        mysql_close();
        //echo "update medicine_details set stock='$stock' where medicode='$mcode'";
        $msg="<span style='color:green'>* Record inserted Successfully.....</span>";
    }

    $s1="";
    $s2="";
    $s3="";
    $s4="";
    $code="";
    if(isset($_POST["submit1"]))
    {
        $code=$_POST["t1"];
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        $result=mysql_query("Select companyname,category,mediname,stock from medicine_details where medicode='$code'",$db);
        while($row= mysql_fetch_array($result))
        {
           $s1=$row[0];
           $s2=$row[1];
           $s3=$row[2];
           $s4=$row[3];
        }
        mysql_close();
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
			
			<h2>Add stock</h2>
        <form method="post" action="add_stock.php">
            <table>

             <tr>
                <td>medicine code</td>
               <td><input type="text" name="t1" value="<?php echo $code;?>"></td>

                <td>  <input type="submit" name="submit1" value="Get Detail"></td>
             <tr>
                 <td>company</td><td><span><?php echo $s1;?></span> </td>
             </tr>
               <tr>
                 <td>category</td><td><span><?php echo $s2;?></span></td>
             </tr>


             <tr>
                 <td>Medicine</td><td><span><?php echo $s3;?></span></td>
             </tr>
                  <tr>
            <td>current stock</td>
            <td><span><?php echo $s4;?></span></td>
                </tr>

            <tr>
                 <td>Add stock</td><td><input type="text" name="t5"></td>
             </tr>

            </table>
            <input type="submit" value="Add" name="submit">
        
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
							<a href="http://www.freewebsitetemplates.com/misc/contact">mythsahu@gmail.com</a>
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