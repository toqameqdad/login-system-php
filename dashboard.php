<!DOCTYPE html>
<html>
    <head>
        <title> Dashboard</title>
</head>
<body>
    <div>
        <h1> welcome,<?php echo htmlspecialchars($username);?>!</h1>
        <img src="<?php echo $image; ?>" alt="profile picture" width="120" style="border-radius:50%;">
        <p> this is your fucking dashboard</p>
        <a href="logout.php">logout</a>
</div>
</body>
</html>
 