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
            <td><img src="images/med.png" width="90px"></td>
            <td>
                <b><table border="0" width="100%" style="text-align: center"></b>
                    <tr>
                        <tr style="background-color: blue;color:white">
                        <td>Cash Memo</td>
                        <td>Ph.:- 2221687</td>
                    </tr>
                    <tr>
                        <td colspan="2">

                            Manohar Medical Stores<br>
                            Chemist & Drugist<br>
                            Sec-6, 'A' Market, BHILAI<br>
                            <br>
</td>
                    </tr>
                </table></b>
            </td>
        </tr>
    </table>
<?php
    $s1="";
    $s2="";
    $s3="";
       $id=$_GET["id"];
       //$id=1006;
       $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);
       $result=mysql_query("select * from sale where receiptNo='$receiptNo'");
        while($row=mysql_fetch_array($result))
        {
         $s1=$row[0];
         $s2=$row[1];
         $s3=$row[2];
        }
       ?>
    <b><table width="75%">
       <tr>
          <td>Receipt No <?php echo $s1;?></td>
          <td></td>
          <td><center>Date <?php echo $s2;?></center></td>
       </tr>
       <tr>
           <td colspan="3">Name <?php echo $s3;?></td>
       </tr>
    </table></b>

    <table border="1" width="75%" style="text-align: center">
       <tr>
          <td>Sr</td>
          <td>Medicine</td>
          <td>Price</td>
          <td>Qty</td>
          <td>Amount</td>
       </tr>
       <?php
       $id=$_GET["id"];
       //$id=1006;
       $db=mysql_connect("localhost","root","");
        mysql_select_db("medical_db",$db);

        $medicine="";
        $result=mysql_query("select mediname from medicine_details where medicode='$medicode'");
        while($row=mysql_fetch_array($result))
        {
            $medicine=$row[0];
        }


       $result=mysql_query("select mcode,totalprice,qty,totalprice from sale where receiptNo='$receiptNo'");
        while($row=mysql_fetch_array($result))
        {
            $c=$row[1]/$row[2];
          echo"<tr>";
          echo"<td>1</td>";

            $result1=mysql_query("select mediname from medicine_details where medicode=$row[0]");
            while($row1=mysql_fetch_array($result1))
            {
                echo"<td>$row1[0]</td>";
            }


          echo"<td>$c</td>";
          echo"<td>$row[2]</td>";
          echo"<td>$row[3]</td>";
          echo"</tr>";
        }
       ?>
    </table>
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