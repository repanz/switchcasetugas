<?php
<!-- filepath: c:\xampp\htdocs\folder.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Program PHPKAU</title>
    <style>
        body {
            background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            color: #1565c0;
            margin-top: 38px;
            letter-spacing: 2px;
            font-size: 2.2em;
            font-weight: 700;
        }
        .list-container {
            max-width: 600px;
            margin: 32px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 6px 32px rgba(21,101,192,0.13);
            padding: 32px 38px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 18px 0;
        }
        a {
            display: block;
            background: linear-gradient(90deg, #1565c0 60%, #29b6f6 100%);
            color: #fff;
            text-decoration: none;
            padding: 16px 24px;
            border-radius: 8px;
            font-size: 1.15em;
            font-weight: bold;
            transition: background 0.2s, transform 0.1s;
            box-shadow: 0 2px 8px rgba(21,101,192,0.07);
            letter-spacing: 1px;
        }
        a:hover {
            background: linear-gradient(90deg, #0d47a1 60%, #4fc3f7 100%);
            transform: scale(1.03);
        }
    </style>
</head>
<body>
    <h2>Daftar Program PHPKAU</h2>
    <div class="list-container">
        <ul>
            <?php
            // Scan semua file PHP di folder ini
            $files = glob("*.php");
            foreach ($files as $file) {
                // Jangan tampilkan folder.php itu sendiri
                if ($file == basename(__FILE__)) continue;
                $name = ucfirst(str_replace(".php", "", $file));
                echo "<li><a href='$file' target='_blank'>$name</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>