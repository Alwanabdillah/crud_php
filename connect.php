<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "food_db";



$koneksi = mysqli_connect($server, $user, $pass, $database);

if (!$koneksi) {
    echo "Kamu gagal terhubung ke database : " . mysqli_connect_error();
}

// Frist Table 

function getData($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function showDataMenu($id)
{
    global $koneksi;
    $query = "SELECT * FROM menu WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function insertDataMenu($data)
{
    global $koneksi;
    // var_dump($data);
    $name = htmlspecialchars($data["name"]);
    $price = htmlspecialchars($data["price"]);
    $description = htmlspecialchars($data["description"]);

    $query = "INSERT INTO menu VALUES (null, '$name', '$price', '$description')";

    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
    alert('data berhasil diupdate');
    document.location.href = 'index.php';
    </script>";
    } else {
        echo "<script>
    alert('data gagal diupdate');
    document.location.href = 'index.php';
    </script>";
    }
}
function updateDataMenu($data, $id)
{
    global $koneksi;
    // var_dump($data);
    $name = $data["nama"];
    $price = $data["price"];
    $description = $data["description"];

    $query = "UPDATE menu SET name = '$name', price = '$price', description = '$description' WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function deleteMenu($id)
{
    global $koneksi;
    $query = "DELETE FROM menu WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

// Seccond Table

function showDataOrder($id)
{
    global $koneksi;
    $query = "SELECT * FROM orders WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function insertDataOrder($data)
{
    global $koneksi;
    // var_dump($data);
    $name_cust = htmlspecialchars($data["name_cust"]);
    $food = htmlspecialchars($data["food"]);
    $amount = htmlspecialchars($data["amount"]);
    $total = htmlspecialchars($data["total"]);

    $query = "INSERT INTO orders VALUES (null, '$name_cust', '$food', '$amount', '$total')";

    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
    alert('data berhasil diupdate');
    document.location.href = 'index.php';
    </script>";
    } else {
        echo "<script>
    alert('data gagal diupdate');
    document.location.href = 'index.php';
    </script>";
    }
}
function updateDataOrder($data, $id)
{
    global $koneksi;
    var_dump($data);
    $name_cust = $data["name_cust"];
    $food = $data["food"];
    $amount = $data["amount"];
    $total = $data["total"];

    $query = "UPDATE orders SET name_cust = '$name_cust', food = '$food', amount = '$amount', total = '$total' WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function deleteOrder($id)
{
    global $koneksi;
    $query = "DELETE FROM orders WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}


// Third Table 

function showDataDesk($id)
{
    global $koneksi;
    $query = "SELECT * FROM desk WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function insertDataDesk($data)
{
    global $koneksi;
    // var_dump($data);
    $number = htmlspecialchars($data["number"]);
    $status = htmlspecialchars($data["status"]);

    $query = "INSERT INTO desk VALUES (null, '$number', '$status')";

    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
    alert('data berhasil diupdate');
    document.location.href = 'index.php';
    </script>";
    } else {
        echo "<script>
    alert('data gagal diupdate');
    document.location.href = 'index.php';
    </script>";
    }
}
function updateDataDesk($data, $id)
{
    global $koneksi;
    // var_dump($data);
    $number = $data["number"];
    $status = $data["status"];

    $query = "UPDATE desk SET number = '$number', status = '$status' WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function deleteDesk($id)
{
    global $koneksi;
    $query = "DELETE FROM desk WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
