<?php
/*
VARIABLE RULES:
- All variables are prefixed with a dollar sign ($).
- They must start with a letter or an underscore.
- They cannot start with a number.
- They can only contain letters, numbers, and underscores.
- They are case sensitive. So, `$name` and `$Name` are two different variables.
*/

/*
CONVENTIONS:
- Underscores: $server_name
- Camel Case: $serverName
- Pascal Case: $ServerName
- lowercase: $servername
*/

// Creating variables: 

$heading = "Learn PHP From Scratch";
$title = "Welcome to the course";
$description = "In this course, you will learn the fundamentals of the PHP language";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $heading ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $title ?></h2>
            <p><?= $description ?></p>
        </div>
    </div>
</body>
</html>