<?php
require 'connect.php';

$menus = getData("SELECT * FROM menu");
$orders = getData("SELECT * FROM orders");
$desks = getdata("SELECT * FROM desk");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alwan Restaurant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="container mx-auto">
        <h1 class="font-bold text-3xl pt-10 text-center">AlWan Restaurant</h1>
        <div class="flex flex-row float-right gap-20 pt-10 pb-2 text-center">
            <button class="py-1 px-10 bg-slate-200 hover:bg-slate-300 border border-slate-400 rounded-lg">
                <a href="./create_menu.php">
                    <span>Add New Food</span>
                </a>
            </button>
        </div>
        <h1 class="text-2xl font-bold mb-4">Menu Makanan</h1>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">No.</th>
                    <th class="py-3 px-6 text-left">Nama Makanan</th>
                    <th class="py-3 px-6 text-left">Harga</th>
                    <th class="py-3 px-6 text-left">Deskripsi</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($menus as $menu) : ?>
                    <tr>
                        <td class="py-3 px-6 text-left"><?= $no ?></td>
                        <td class="py-3 px-6 text-left"><?= $menu['name'] ?></td>
                        <td class="py-3 px-6 text-left"><?= $menu['price'] ?></td>
                        <td class="py-3 px-6 text-left"><?= $menu['description'] ?></td>
                        <td class="flex flex-row justify-center items-center p-3 gap-2">
                            <div class="flex flex-row py-1 px-3 bg-green-500 hover:bg-green-800 text-slate-50 hover:text-slate-100 items-center justify-center rounded-lg ">
                                <a href="edit_menu.php?id=<?= $menu["id"] ?>">Edit</a>
                            </div>
                            <div class="flex flex-row py-1 px-3 bg-red-500 hover:bg-red-800 text-slate-50 hover:text-slate-100 items-center justify-center rounded-lg ">
                                <a href="delete.php?id_menu=<?= $menu["id"] ?>">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php $no++ ?>
                <?php endforeach; ?>
            </thead>
        </table>
        </div>
    </section>

    <section class="container mx-auto">
        <div class="my-8">
            <div class="flex flex-row float-right gap-20 pt-10 pb-2 text-center">
                <button class="py-1 px-10 bg-slate-200 hover:bg-slate-300 border border-slate-400 rounded-lg">
                    <a href="./create_order.php">
                        <span>Add New Customer</span>
                    </a>
                </button>
            </div>
            <h1 class="text-2xl font-bold mb-4">Pesanan Pelanggan</h1>
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No.</th>
                        <th class="py-3 px-6 text-left">Nama Pelanggan</th>
                        <th class="py-3 px-6 text-left">Makanan yang dipesan</th>
                        <th class="py-3 px-6 text-left">jumlah</th>
                        <th class="py-3 px-6 text-left">Total harga</th>
                        <th class="py-3 px-6 text-center">Action</th>
                    </tr>
                    <?php $no = 1; ?>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td class="py-3 px-6 text-left"><?= $no ?></td>
                            <td class="py-3 px-6 text-left"><?= $order['name_cust'] ?></td>
                            <td class="py-3 px-6 text-left"><?= $order['food'] ?></td>
                            <td class="py-3 px-6 text-left"><?= $order['amount'] ?></td>
                            <td class="py-3 px-6 text-left"><?= $order['total'] ?></td>
                            <td class="flex flex-row justify-center items-center p-3 gap-2">
                                <div class="flex flex-row py-1 px-3 bg-green-500 hover:bg-green-800 text-slate-50 hover:text-slate-100 items-center justify-center rounded-lg ">
                                    <a href="edit_order.php?id=<?= $order["id"] ?>">Edit</a>
                                </div>
                                <div class="flex flex-row py-1 px-3 bg-red-500 hover:bg-red-800 text-slate-50 hover:text-slate-100 items-center justify-center rounded-lg ">
                                    <a href="delete.php?id_order=<?= $order["id"] ?>">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php $no++ ?>
                    <?php endforeach; ?>
                </thead>
            </table>
        </div>
    </section>
    <section class="container mx-auto">
        <div class="my-8">
            <div class="flex flex-row float-right gap-20 pt-10 pb-2 text-center">
                <button class="py-1 px-10 bg-slate-200 hover:bg-slate-300 border border-slate-400 rounded-lg">
                    <a href="./create_desk.php">
                        <span>Add New Desk</span>
                    </a>
                </button>
            </div>
            <h1 class="text-2xl font-bold mb-4">Meja Makanan</h1>
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No.</th>
                        <th class="py-3 px-6 text-left">Nomor Meja</th>
                        <th class="py-3 px-6 text-left">Status</th>
                        <th class="py-3 px-6 text-center">Action</th>
                    </tr>
                    <?php $no = 1; ?>
                    <?php foreach ($desks as $desk) : ?>
                        <tr>
                            <td class="py-3 px-6 text-left"><?= $no ?></td>
                            <td class="py-3 px-6 text-left"><?= $desk['number'] ?></td>
                            <td class="py-3 px-6 text-left"><?= $desk['status'] ?></td>
                            <td class="flex flex-row justify-center items-center p-3 gap-2">
                                <div class="flex flex-row py-1 px-3 bg-green-500 hover:bg-green-800 text-slate-50 hover:text-slate-100 items-center justify-center rounded-lg ">
                                    <a href="edit_desk.php?id=<?php $desk["id"] ?>">Edit</a>
                                </div>
                                <div class="flex flex-row py-1 px-3 bg-red-500 hover:bg-red-800 text-slate-50 hover:text-slate-100 items-center justify-center rounded-lg ">
                                    <a href="delete.php?id_desk=<?= $desk["id"] ?>">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php $no++ ?>
                    <?php endforeach; ?>
                </thead>
            </table>
        </div>
    </section>
</body>

</html>