<!--
/**
* Copyright 2015 IBM Corp. All Rights Reserved.
*
* Licensed under the Apache License, Version 2.0 (the “License”);
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* https://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an “AS IS” BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
->

<?php include 'db.php';?>
<?php


?>


<!DOCTYPE html>
<html>

<head>
    <title>PHP MySQL Sample Application</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="">
        <img class="newappIcon" src="images/newapp-icon.png" />
        <h1>
					Welcome to the <span class="blue">PHP MySQL Sample</span> on Bluemix!
				</h1>
        <p class="description">This introductory sample allows you to insert messages into a MySQL database. <br>


            
    
		<center>
		<form action="feedback.php" method="post">
		<table>
		<tr>
		<td>Name:</td>
		<td><input type="text" name="sname"> </td>
		</tr>
		<tr>
		<td>Rollno:</td>
		<td><input type="text" name="rollno"></td>
		</tr>
		<tr>
		<td>Dept</td>
		<td><select name="dept">
		<option value="cba">CBA</option>
		<option value="bda">BDA</option>
		<option value="ma">MA</option>
		</select></td>
		</tr><tr>
		<td>category</td>
		<td><select name="cat">
		<option value="complain">complain</option>
		<option value="suggestion">suggestion</option>
		<option value="reviews">reviews</option>
		<option value="examination">examination</option>
		<option value="registration">registration</option>
		<option value="others">others</option>

		</select></td>
		</tr>
		<tr>

		<td>Message</td>

		<td><textarea rows="10" cols="15" name="message"></textarea> </td>
		<td><input type="submit" value="submit"></td>
		</tr>

		</table>



		</form>
		</center>
    </div>
</body>

</html>
