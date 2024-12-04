<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do-While Loop in PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl w-full">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Perulangan dengan do-while</h1>
        <p class="mb-4 text-gray-700">
            The 'do-while' loop in PHP executes a block of code once before checking if the condition is true, then it repeats the loop as long as the condition is true. This ensures that the code block is executed at least once.
        </p>
        <div class="bg-gray-200 p-4 rounded-md mb-4">
            <pre class="text-sm"><code>
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 5);
            </code></pre>
        </div>
        <p class="mb-4 text-gray-700">Output:</p>
        <div class="bg-gray-200 p-4 rounded-md">
            <p class="text-green-600">
                <?php
                $i = 1;
                do {
                    echo $i . " ";
                    $i++;
                } while ($i <= 5);
                ?>
            </p>
        </div>
    </div>
</body>
</html>
