<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>

    <form action="/loginuser" method="POST">
        @csrf
        EMAIL:<input type="email" name="email" value="{{ old('email') }}" required><br><br>
        PASSWORD:<input type="password" name="password" required><br><br>
        <input type="submit" value="LOGIN">
    </form>
</body>
</html>
