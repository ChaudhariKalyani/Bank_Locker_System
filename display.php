<html>
    <head>
        <script language=javascript>
            function valid1()
            {
                var x;
                x=event.keyCode;
                if(x>=48 && x<=57)
                {
                event.keyCode=x;
                return true;
                }
                else 
                {
                event.keyCode=0;
                return false;
                }
            }

            
            

       </script>
    </head>
<body>
    <form name=frm method=post action=display.php>
        <center>
            <caption><h2>DISPLAY</h2></caption><br>
            <table> 
            <tr>
                <!--Customer ID-->
                <td><label for="Customer ID">Customer ID</label></td>
                <td><select name=ci>
                    <?php
                $cn=mysql_connect("localhost","root");
                mysql_select_db("banklocker",$cn);
                $query="select customerid from customer";
                $result=mysql_query($query);
                while($row=mysql_fetch_array($result))
                {
                    echo "<option value=$row[0]>$row[0]</option>";
                }
                ?>
   
                </select>
            </td>
                        </br>
                </tr>
             </table> </br>
    <input type=submit name=sbm value=Display>
    
    </center>
    </form>
    </body>
    </html>

    
<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("banklocker",$cn);
$sb=$_POST['sbm'];
if($sb=="Display")
{
echo "<center><table border=1>";
echo "<caption>customer information</caption>";
echo "<tr>";
echo "<th>customerid</th>";
echo "<th>customername</th>";
echo "<th>gender</th>";
echo "<th>birthdate</th>";
echo "<th>contactnumber</th>";
echo "<th>emailid</th>";
echo "<th>adharcard</th>";
echo "<th>state</th>";
echo "<th>city</th>";
echo "<th>pincode</th>";
echo "<th>address</th>";
echo "<th>password</th>";
echo "</tr>";
$sql="select * from customer where customerid='$_POST[ci]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>