<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register Form</h2>

   <form action="/saveuser" method="POST">
    @csrf
    NAME: <input type="text" name="name" required><br><br>
    EMAIL: <input type="email" name="email" required><br><br>
    PASSWORD: <input type="password" name="password" required><br><br>
    CONFIRM PASSWORD: <input type="password" name="password_confirmation" required><br><br>
    <input type="submit" value="REGISTER">
</form>

</body>
</html>
