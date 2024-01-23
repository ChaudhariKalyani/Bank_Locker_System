<html>
<head>
        <script language=javascript>
        function toprint() 
        {
        window.print();    
        }
        </script>
    </head>
    <body>
    <form name=frm method=post action=report01.php>
        <center>
            <h1>Report Information Report</h1>

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
{
    echo "<center><table border=1>";
    echo "<caption>Report Information</caption>";
    echo "<tr>";
    echo "<th>lockernumber</th>";
    echo "<th>reportdate</th>";
    echo "<th>customerid</th>";
    echo "<th>officercode</th>";
    echo "<th>reporttype</th>";
    echo "<th>remark</th>";
    echo "</tr>";
    $sql="select * from report";
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
    echo "</tr>";
    }
    echo "</table>";
    echo "<input type=button name=btn value=print onclick=toprint()></center>";
}
}
?>