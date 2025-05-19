<html>
<head>
    <title>Get Data from MySQL Table</title>



        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h2, h3 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #777;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        code {
            background-color: #f2f2f2;
            padding: 2px 4px;
            border-radius: 4px;
        }
    </style>

</head>
<body>

    <h2>Click the button to fetch data from <code>mydata</code> table:</h2>

    <form method="post">
        <input type="submit" name="getdata" value="Get Data">
    </form>

    <?php
    // Database credentials
     $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'projects';


    // Create connection
    $con = mysqli_connect($host, $user, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // If button clicked
    if (isset($_POST['getdata'])) {
        $query = "SELECT * FROM mydata";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<h3>Data from <code>mydata</code> table:</h3>";
            echo "<table border='1' cellpadding='8'>
                    <tr>
                        
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password (Hashed)</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['password']}</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No data found in the table.</p>";
        }
    }
    ?>
</body>
</html>
