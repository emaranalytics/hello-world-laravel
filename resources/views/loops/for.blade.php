<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop in PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl w-full">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Perulangan Dengan For</h1>
        <p class="mb-4 text-gray-700">
            The 'for' loop in PHP is used when you know in advance how many times you want to execute a block of code. It's ideal for iterating a specific number of times.
        </p>
        <div class="bg-gray-200 p-4 rounded-md mb-4">
            <pre class="text-sm"><code>
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
            </code></pre>
        </div>
        <p class="mb-4 text-gray-700">Output:</p>
        <div class="bg-gray-200 p-4 rounded-md">
            <p class="text-green-600">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo $i . " ";
                }
                ?>
            </p>
        </div>
    </div>
</body>
</html>
