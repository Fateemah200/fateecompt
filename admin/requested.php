<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Administrators Section </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
<style>
table{width:100%;

color:black;

}

</style>

</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <center><div style="color:#FFF;width:1000px;"><font size="5px">ONLINE INDIGENE PROCESSING SYSTEM
    </font></div></center>
    <div id="topnav">
      <ul>
        <li ><a href="home.php">Home</a></li>
        <li class="active"><a href="requested.php">Requested indigene Cert</a></li>
        <li><a href="confirmed.php">Confirmed Cert</a></li>
        <li><a href="edit_card.php">Edit Cert</a></li>
        <li><a href="complaint.php">Complaint</a></li>
       <li class="last"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
  <center>
    <h1>REQUESTED INDIGENE CERTIFICATE</h1></center>
            <p style="float:left;">Click on any one of the following info below to processed the cert or to reject the cert</p>
            
            	
	<center>
        <td width="45%" height="186" align="center"><div align="left"></div><?php
require_once('db_function.php');

$result = mysqli_query($con, "Select * from request");
?>
<table border ="1" width="100%" cellpadding="5">
<tr>
<th colspan="10" bgcolor="black"><font color="white">Requested Indigene Cert Record</th>
</tr>
<tr>
<th bgcolor="white">Full Name</th>
<th bgcolor="white">Father Name.</th>
<th bgcolor="white">Mother Name</th>
<th bgcolor="white">User Name</th>
<th bgcolor="white"> &nbsp</th>
<tr/>

<?php
while($row= mysqli_fetch_array($result)) {

echo "<tr>";
echo '<td>'.$row['full_name']. '</td>';
echo '<td>'.$row['father_name']. '</td>';
echo '<td>'.$row['mother_name']. '</td>';
echo '<td>'.$row['user_name']. '</td>';

?><th bgcolor="white"> <a href="get_id.php?id=<?php echo $row['id']; ?>">More.....</a></th>
<?php
}
mysqli_close($con);
?>

</td>
        </tr>
</table>
    </table>

  <center>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></center>
<p>&nbsp;</p>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="box1">
      
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
  <p class="fl_left">Copyright &copy;  SHEHU ISAH HND/CO/19/027M </p>
    <p class="fl_right">Supervised by MALAM ISMAIL MATO </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>