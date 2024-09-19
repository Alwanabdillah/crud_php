<?php
require 'connect.php';

// $id = $_GET['id'];

if (isset($_GET["id_menu"])) {
    if (deleteMenu($_GET["id_menu"]) > 0) {
        echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php';
    </script>";
    } else {
        echo "<script>
    alert('data gagal dihapus');
    document.location.href = 'index.php';
    </script>";
    }
} else if (isset($_GET["id_order"])) {
    if (deleteOrder($_GET["id_order"]) > 0) {
        echo "<script>
    document.location.href = 'index.php';
    alert('data berhasil dihapus');
    </script>";
    } else {
        echo "<script>
    document.location.href = 'index.php';
    alert('data gagal dihapus');
    </script>";
    }
} else {
    if (deleteDesk($_GET["id_desk"]) > 0) {
        echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php';
    </script>";
    } else {
        echo "<script>
    alert('data gagal dihapus');
    document.location.href = 'index.php';
    </script>";
    }
} 