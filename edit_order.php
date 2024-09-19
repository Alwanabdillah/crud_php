<?php
require 'connect.php';

$id = $_GET['id'];

$order = showDataOrder($id);

if (isset($_POST["submit"])) {
    if (updateDataOrder($data, $id) > 0) {
        echo "<script>
    alert('data berhasil diupdate');
    document.location.href = 'index.php';
    </script>";
    } else {
        echo "<script>
    alert('data gagal diupdate');
    // document.location.href = 'index.php';
    </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../src/output.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex items-center justify-center mt-20">
        <form action="" method="post" class="flex p-10 mt-10 flex-col gap-4 w-fit bg-slate-200 rounded-lg">
            <label class="font-bold" for="name">Nama Pelanggan</label>
            <input class=" w-80 h-10 px-3 py-3 rounded-lg" type="text" name="name" id="name" value="<?= $order[0]['name'] ?>">
            <label class="font-bold" for="name">Makanan yang dipesan</label>
            <input class=" w-80 h-10 px-3 py-3 rounded-lg" type="text" name="name" id="name" value="<?= $order[0]['food'] ?>">
            <label class="font-bold" for="price">Jumlah</label>
            <input class="w-80 h-10 rounded-lg px-3 py-3 " type="number" name="price" id="price" required value="<?= $order[0]['amount'] ?>">
            <label class="font-bold" for="price">Total</label>
            <input class="w-80 h-10 rounded-lg px-3 py-3 " type="number" name="price" id="price" required value="<?= $order[0]['total'] ?>">
            <button class="bg-slate-500 py-3 px-7 rounded-lg text-white" type="submit" name="submit" id="submit">submit</button>
        </form>
    </div>
</body>

</html>