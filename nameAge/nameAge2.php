<html>
<body>

<form action="nameAge3.php" method="post">

Name: <input type="text" name="fname"
       value=<?php echo "\"" . $_POST['textbox1'] . "\"" ?>/>

Age: <input type="text" name="age" />

<input type="submit" />
</form>

</body>
</html> 

