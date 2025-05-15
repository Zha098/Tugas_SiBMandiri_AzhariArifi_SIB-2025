<!DOCTYPE html>
<html>
<head>
    <title>Formulir dan Hasil Ujian</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #007bff;
            margin-bottom: 30px;
            font-size: 2.5em;
            font-weight: 700;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1em;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 14px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result-box {
            margin-top: 30px;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 8px;
            text-align: left;
        }

        .result-box h2 {
            color: #28a745;
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 2em;
        }

        .status-lulus {
            color: #28a745;
            font-weight: bold;
        }

        .status-remedial {
            color: #dc3545;
            font-weight: bold;
        }

        .status-batas-lulus {
            color: #ffc107;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Formulir Pendaftaran Ujian</h2>
        <form method="post" action="">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="nilai_ujian">Nilai Ujian:</label>
            <input type="number" id="nilai_ujian" name="nilai_ujian" required>

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $nilai_ujian = $_POST["nilai_ujian"];

            echo "<div class='result-box'>";
            echo "<h2>Hasil Ujian</h2>";
            echo "Nama: " . htmlspecialchars($nama) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
            echo "Nilai Ujian: " . htmlspecialchars($nilai_ujian) . "<br>";
            echo "Status: ";
            if ($nilai_ujian > 70) {
                echo "<span class='status-lulus'>Lulus</span>";
            } elseif ($nilai_ujian < 70) {
                echo "<span class='status-remedial'>Remedial</span>";
            } else {
                echo "<span class='status-batas-lulus'>Batas Lulus</span>";
            }
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>