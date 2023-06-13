<?php
$c=0;
$msg="";
if($_POST["submit"])
    {
        $t1=$_POST["t1"];
       $t2=$_POST["t2"];
       $t3=$_POST["t3"];
        $t4=$_POST["t4"];
         $t5=$_POST["t5"];
          $t6=$_POST["t6"];
           $t7=$_POST["t7"];
           $st1=$_POST["st1"];
           $st2=$_POST["st2"];

         //Insert Record
        $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        mysql_query("insert into sale values($t1,'$t2','$t3','$t4','$t5','$t6','$t7','$st1','$st2')",$db);
        mysql_close();
         $msg="<span style='color:green'>* Record inserted Successfully.....</span>";

         $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
        //echo "update medicine_details set stock=stock-$st2 where medicode='$st1'";
        mysql_query("update medicine_details set stock=stock-$st2 where medicode='$st1'",$db);
        mysql_close();
        header("location: Bill.php?id=$t1");
        
    }


    if(isset($_POST["st1"]))
    {

    }


     $db=mysql_connect("localhost","root","");
        mysql_select_db("medical",$db);
       $result=mysql_query("select * from sale");
        while($row=mysql_fetch_array($result))
        {
            $c++;
        }
         $c=$c+1001;
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
<body> <center><img src="images/dev2.jpeg" height="300px" width="100%" style=""></center>

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
			
			<h2>SALE</h2>
        <form method="post" action="sale.php">
            <table>

             <tr>
                 <td>Receipt No.</td><td><input type="text" name="t1" value="<?php echo $c?>"></td>
             </tr>
               <tr>
                 <td>Date</td><td><input type="text" name="t2" id="t2" value="<?php date_default_timezone_set("Asia/Calcutta");echo date("y/m/d");?>"</td>
             
             </tr>


             <tr>
                 <td>User name</td><td><input type="text" name="t3"></td>
             </tr>
                  <tr>
            <td>Phone no.</td><td><input type="text" name="t4"></td>
                </tr>

            <tr>
                 <td>Email</td><td><input type="text" name="t5"></td>
             </tr>
              <tr>
                 <td>Address</td><td><input type="text" name="t6"></td>
             </tr>
              <tr>
                 <td>Total price</td><td><input type="text" name="t7" id="t7"></td>

             </tr>
<tr>
                <td>medicine code</td>
               <td><select  name="st1" style="width:150px">
                        <option>select medicine code</option>
                        <?php
                        $db=mysql_connect("localhost","root","");
                        mysql_select_db("medical_db",$db);
                        $result=mysql_query("Select medicode from medicine_details",$db);
                        while($row= mysql_fetch_array($result))
                        {
                            if(isset($_POST["st1"]))
                            {
                                $name=$_POST["st1"];
                                if($name==$row[0])
                                    echo "<option selected>$row[0]</option>";
                                else
                                    echo "<option>$row[0]</option>";
                            }
                            else
                                echo "<option>$row[0]</option>";
                        }
                        mysql_close();
                        ?>
                </select>
                   <td><input type="submit" value="Add" name="sub"></td>
                    
            </tr>
                 
</table>
            <br>
    <table border="1" width="60%">
            <tr style="background-color: green;color:white">
                 <td>S No.</td>
                <td>medicine code</td>
                <td>company</td>
                <td>price</td>
                 <td>Qty</td>
                  <td>net price</td>
            </tr>
            <?php
            $mcode=$_POST["st1"];

            $c=0;
                $db=mysql_connect("localhost","root","");
                mysql_select_db("medical",$db);
                $result=mysql_query("Select * from medicine_details where medicode='$mcode'",$db);
                while($row= mysql_fetch_array($result))
                {
                    $c++;
                    echo "<tr style='background-color: white;color:blue'>";
                    echo "<td>$c</td>";
                    echo "<td><input type='text' name='mcode' value=$row[0]></td>";
                    echo "<td>$row[1]</td>";
                    echo "<td><input type='text' id='pr1' value='$row[7]'></td>";
                  echo "<td>
                    <select id='q1' name='st2' onchange='getPrice()'>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select></td>";
                  echo "<td><input type='text' id='np1'></td>";
                    echo "</tr>";
                }
                mysql_close();
            ?>
        </table>
            <input type="submit" value="submit" name="submit">
       
        </form>
          <?php echo $msg;?>
   </div>



            <script>
    function getPrice()
    {

        var pr=document.getElementById("pr1").value;
        //alert("Get"+pr);
        var q=document.getElementById("q1").value;
        var np=parseInt(pr)*parseInt(q);
        document.getElementById("np1").value=np;
        document.getElementById("t7").value=np;
    }
    </script>



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