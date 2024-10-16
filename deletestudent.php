<?php require_once 'Dbbconfig.php'; ?>
<?php require_once 'getdelup.php';?>

    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $getuserid = getuserid ($pdo, $_GET['Employee_ID']);?>
    <form action="handleforms.php?Employee_ID=<?php echo $_GET['Employee_ID']; ?>" method = "POST" >
    <p>first_name:<?php echo $getuserid['first_name']?></p>
    <p>last name:<?php echo $getuserid['last_name']?></p>
    <p>gender:<?php echo $getuserid['gender']?></p>
    <p>age:<?php echo $getuserid['age']?></p>
    <p>emailaddress:<?php echo $getuserid['emailaddress']?></p>
    <p>profession:<?php echo $getuserid['profession']?></p>
        <input type="submit" name="Deletebtn" value="DELETE">
        </form>
</body>
</html>