<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-950 text-stone-200">

    <?php include('./components/navbar.php') ?>

    <main class="mx-auto max-w-screen-lg space-y-10">
        <?php require "./views/{$view}.view.php" ?>
    </main>
</body>
</html>