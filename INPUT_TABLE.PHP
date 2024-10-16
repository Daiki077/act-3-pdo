<?php require_once "getdelup.php"?>
<?php require_once "Dbbconfig.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h3 {
            color: #333;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #333;
            margin: 0 5px;
        }
        a:hover {
            color: #4CAF50;
        }
    </style>

</head>
<body>
<h3>REGISTRATION FORM FOR YOUR DREAM JOB</h3>
    <form action="handleforms.php" method="POST">
        <p><label for="first_name">First Name:</label><input type="text" name="first_name"></p>
        <p><label for="last_name">Last Name:</label><input type="text" name="last_name"></p>
        <p><label for="gender">Gender:</label><input type="text" name="gender"></p>
        <p><label for="age">Age:</label><input type="number" name="age"></p>
        <p><label for="emailaddress">Email Address:</label><input type="email" name="emailaddress"></p>
        <p><label for="profession">Profession:</label><input type="text" name="profession"></p>
        <input type="submit" name="entersbmtbtn">
    </form>
    <table class="md:table-fixed">
        <tr>
            <th>Employee_ID</th>
            <th>first name</th>
            <th>last name</th>
            <th>gender</th>
            <th>age</th>
            <th>emailaddress</th>
            <th>profession</th>
            <th>date_added</th>
            <th>edit/delete</th>
        </tr>
        <?php $getalltheuserrecords = seeallusersrecord($pdo);?>
        <?php foreach ($getalltheuserrecords as $row) { ?>
            <tr>
	  	<td><?php echo $row['Employee_ID']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
        <td><?php echo $row['emailaddress']; ?></td>
	  	<td><?php echo $row['profession']; ?></td>
        <td><?php echo $row['date_added']; ?></td>
	  	<td>
	  		<a href="editstudent.php?Employee_ID=<?php echo $row['Employee_ID'];?>">Edit</a>
	  		<a href="deletestudent.php?Employee_ID=<?php echo $row['Employee_ID'];?>">Delete</a>
	  	</td>
	</tr>
	  <?php } ?>
    </table>
</body>
</html>