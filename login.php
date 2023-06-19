<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  padding: 20px;
}

h2 {
  text-align: center;
}

form {
  max-width: 400px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 3px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  box-sizing: border-box;
}

input[type="submit"] {
  width: 100%;
  background-color: #1f2748;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.team-card {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.team-card img {
  height: 180px;
  width: 180px;
  border-radius: 50%;
}

.btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border: none;
            background-color: #1f2748;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn:active {
            background-color: #3e8e41;
        }

    </style>
</head>

<body>
<a href="index.html" class="btn">Back</a>
<div class="team-card">
			<img src="image/unity-logo.png" alt="Team Member 2" height="180px" width="180px">
		  </div>

    <h2>Admin Login</h2>
    <form method="post" action="setting.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>