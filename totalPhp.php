<html>
<head></head>
<body>
<?php
	$con = mysql_connect("localhost","id1027434_root","Kanna1652");
	if($con)
	{
		//echo "Connection Succesful";
		$db = mysql_select_db("id1027434_webdcd");
		if ($db)
		{
			//echo "Database selected";

			if(isset($_GET['submit']))
			{

				$sql = "select * from cookie";

				$retVal=mysql_query($sql);
				$array = mysql_fetch_array($retVal);
				$previousNumber = $array['i'];
				echo $previousNumber;
//				echo "Submit Set";
				if ( $_GET['phone'] != $previousNumber)
				{
					/**
					This is to set the database with the user
					*/
					$db =mysql_select_db("id1027434_webdcd");
					$sql = "insert into customers (name,email,phone,comment) values ('".$_GET["name"]."','".$_GET['email']."','".$_GET['phone']."','".$_GET['comment']."');";
					$retVal = mysql_query($sql);
					//echo $_GET['phone'];
					echo "Yes";
					$sql = "update cookie set i =".$_GET['phone'];
					$retVal = mysql_query($sql);
if($retVal)
{
echo "Query Succesfull";
}
					?>
	
					  		<script type="text/javascript">
      var modal = document.getElementById("myModal");
      var btn = document.getElementById("mybtn");
      var span = document.getElementsByClassName("close")[0]; 
     // btn.onclick = function() {
          modal.style.display = "block";
      //}
      span.onclick = function() {
           modal.style.display = "none";
      }
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
		<?php			}


			}
			//echo $_GET['phone'];
		}
	}
	unset($_GET['submit']);
	
?>
</body>

</html>