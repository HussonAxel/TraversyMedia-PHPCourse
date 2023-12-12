<?php
echo "Hello from PHP echo";
echo "<br>";
print "Hello from PHP print";
echo "<br>";
echo "echo : ", "Value one", " Value two", " Value three";
// print "Value one", " Value two", " Value three"; // This will throw an error

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
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?php echo 'Welcome to the course : This text is written with PHP'; ?></h2>
            <h2 class="text-2xl font-semibold mb-4"><?= 'Welcome to the course : This text is written with PHP but with less syntax' ?></h2>
            <?php echo '<p>In this course, you will learn the fundamentals of the PHP language. This text is now encapsuled in an echo statement.</p>'; ?>
        </div>
    </div>
</body>



</html />