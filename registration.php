<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="register_process.php">
        <pre>
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="phone number">Phone Number:</label>
        <input type="number" name="phone number" required>

        <label for="address">Address:</label>
        <input type="text" name="address" required>

        <input type="submit" value="Register">
        </pre>
    </form>
</body>
</html>
