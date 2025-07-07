<!DOCTYPE html>
<html>
    <head>
        <title>sign up </title>
</head>
<body>
    <form action ="process_register.php" method="post" enctype="multipart/form-data">
        <label>username:</label>
        <input type="text" name="username" required ><br><br>
        
        <lable>password:</lable>
        <input type="password" name="password" required ><br><br>

        <lable>upload profile image:</lable>
        <input type="file" name="profile-image" accept="image/*" required><br><br>

        <button type="submite">sign up</button>
</form>
</body>
</html>

    