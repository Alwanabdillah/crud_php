<?php
require 'connect.php';

if (isset($_POST["submit"])) {
    insertDataMenu($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Alwan Restaurant</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="flex items-center justify-center mt-20">
        <form action="" method="post" class="flex p-10 mt-10 flex-col gap-4 w-fit bg-slate-200 rounded-lg">
            <label for="name" class="font-bold">Nama Makanan</label>
            <input class="w-80 h-10 rounded-lg text-left px-3" type="text" name="name" id="name">
            <label for="price" class="font-bold">Harga</label>
            <input class="w-80 h-10 rounded-lg text-left px-3" type="number" name="price" id="price">
            <label for="description" class="font-bold">Deskripsi</label>
            <textarea type="text" name="description" id="description" class="px-3 py-3" required></textarea>
            <button class="bg-slate-500 py-3 px-7 rounded-lg text-white" type="submit" name="submit" id="submit">submit</button>
        </form>
    </section>
</body>

</html>