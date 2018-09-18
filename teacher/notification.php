<!DOCTYPE html>
<html>
<head>
<title>Simple College Notice Board</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "../bootstrap/css/bootstrap.css" type = "text/css"/>
<link rel = "stylesheet" href = "../bootstrap/css/bootstrap.min.css" type = "text/css"/>
</head>
<body>
<div id="main" class="container">
<table class="table table-bordered">
<h2 align="center">Teacher Message Notice Board</h2><hr/>
    <tbody>
      <tr>
        <td><div id="content">
			<?php
			$con = mysqli_connect("localhost","root","","notice");
			
			$result = mysqli_query($con,"SELECT * FROM noticemsg WHERE position='teacher'");
					while($row = mysqli_fetch_array($result))
						{
							echo '<li>'.$row['message'].'</li>';
						}
			?>
			<div class="clearfix"></div>
			</div></td>
      </tr>
    </tbody>
</table>
<div id="footer" align="center">Sourcecodester &copy 2016</div>
</div>
</body>
</html>
