<?php
$c=0;
$msg="";
if($_POST["submit"])
    {
        $t1=$_POST["t1"];
       $t2=$_POST["t2"];
       $t3=$_POST["t3"];
        $t4=$_POST["st1"];
         $t5=$_POST["st2"];
          $t6=$_POST["st3"];
           $t7=$_POST["st4"];

           //Insert Record
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        mysql_query("insert into purchase values($t1,'$t2','$t3','$t4','$t5','$t6','$t7')",$db);
        mysql_close();
      $msg="<span style='color:green'>* Record inserted Successfully.....</span>";
    }
     $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
       $result=mysql_query("select * from purchase");
        while($row=mysql_fetch_array($result))
        {
            $c++;
        }
         $c=$c+111;
?>

<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
 <link type="text/css" href="css/ui-lightness/jquery-ui-1.8.19.custom.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$("#t2").datepicker();
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

			<h2>Purchase_details</h2>
        <form method="post" action="op_purchase.php">
            <table>

             <tr>
                 <td>Receipt No.</td><td><input type="text" name="t1" value="<?php echo $c?>"></td>
             </tr>
               <tr>
                 <td> purchase Date</td><td><input type="text" name="t2" id="t2"value="<?php date_default_timezone_set("Asia/Calcutta");echo date("y/m/d");?>"</td>

             </tr>


             <tr>
                 <td>dealer name</td><td><input type="text" name="t3"></td>
             </tr>
                  <tr>
                <td>company</td>
                <td><select  name="st1" style="width:150px">
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
            </tr>
            <tr>
                <td>medicine code</td>
               <td><select  name="st2" style="width:150px">
                        <option>select medicine code</option>
                        <?php
                        $db=mysql_connect("localhost","root","");
                        mysql_select_db("medical",$db);
                        $result=mysql_query("Select medicode from medicine_details",$db);
                        while($row= mysql_fetch_array($result))
                        {
                            echo "<option>$row[0]</option>";
                        }
                        mysql_close();
                        ?>
                </select>
                   </tr>
              <tr>
                <td>category </td>
                <td><select  name="st3" style="width:150px">
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

             </tr>
             
<tr>
                <td>medicine name</td>
               <td><select  name="st4" style="width:150px">
                        <option>select medicine name</option>
                        <?php
                        $db=mysql_connect("localhost","root","");
                        mysql_select_db("medical",$db);
                        $result=mysql_query("Select mediname from medicine_details",$db);
                        while($row= mysql_fetch_array($result))
                        {
                            echo "<option>$row[0]</option>";
                        }
                        mysql_close();
                        ?>
                </select>
                  

            </tr>

</table>
     
           <input type="submit" value="submit" name="submit">

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