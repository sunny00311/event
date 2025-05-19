<html>
<head>
    <title>event by sunny</title>


	 <style>
        /* Basic page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 40px;
            color: #333;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
        }

        form {
            max-width: 400px;
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
            margin: 0 auto;
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
        }

        form input[type="submit"] {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #1e8449;
        }

        /* Success and error messages */
        .message {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px 20px;
            border-radius: 6px;
            font-weight: bold;
            text-align: center;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <h1>Welcome to bhajanpura event registration 2025</h1>

    <form method="post">
        Name     : <input type="text" name="name"  required ><br>
        Email    : <input type="text" name="mail"  required ><br>
       Message: <textarea required name="pass" rows="3" cols="41" style="border: 1px solid #ccc; border-radius: 4px; padding: 8px; font-size: 16px; resize: vertical;"></textarea><br>
<br>
                   <input type="submit" name="sb">
    </form>

    <?php

    // Database credentials
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'projects';
    // Connect to DB
    $con = mysqli_connect($host, $user, $password, $database);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "form is live<br>";
    }

    // Handle form submission
    if (isset($_POST['sb'])) {
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $password = $_POST['pass'];

      
       
        // ✅ Use prepared statement (optional but safer)
        $query = "INSERT INTO mydata (name, email, password) VALUES ('$name', '$email', '$password')";

        if (mysqli_query($con, $query)) {
            echo "form submitted successfully.";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
    ?>
</body>
</html>
