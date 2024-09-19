<?php
require 'connect.php';

if (isset($_POST["submit"])) {
    insertDataOrder($_POST);
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
            <label for="name_cust" class="font-bold">Nama Pelanggan</label>
            <input class="w-80 h-10 rounded-lg text-left px-3" type="text" name="name_cust" id="name_cust">
            <label for="food" class="font-bold">Nama Makanan</label>
            <input class="w-80 h-10 rounded-lg text-left px-3" type="text" name="food" id="food">
            <label for="amount" class="font-bold">Jumlah</label>
            <input class="w-80 h-10 rounded-lg text-left px-3" type="number" name="amount" id="amount">
            <label for="total" class="font-bold">Total</label>
            <input class="w-80 h-10 rounded-lg text-left px-3" type="number" name="total" id="total">
            <button class="bg-slate-500 py-3 px-7 rounded-lg text-white" type="submit" name="submit" id="submit">submit</button>
        </form>
    </section>
</body>

</html>