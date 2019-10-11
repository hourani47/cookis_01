<html>
<head>
    <title> php cook</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php if(isset($_COOKIE["page_color"])) {?>
<body style="background: <?php echo $_COOKIE['page_color'] ?>">
<?php } else { ?>
<body style="background: wheat">
<?php } ?>


<h3>Chose your color</h3>
<form action="file.php" method="post">
<div class="group-of-box">
    <label for="1" class="color-box red">
        <input id="1" type="radio" name="user_color" value="red">
    </label>
    <label for="2" class="color-box green">
        <input id="2" type="radio" name="user_color" value="green">

    </label>
    <label for="3" class="color-box black">
        <input id="3" type="radio" name="user_color" value="black">

    </label>
</div>
    <button type="submit">change color</button>
</form>
</body>
</html>