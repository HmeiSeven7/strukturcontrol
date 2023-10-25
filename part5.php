<!DOCTYPE html>
<html>
<head>
  <title>Penghitungan Gaji</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: #B0C4DE;
    }

    h1 {
      color: #3498db;
    }

    .container {
      width: 40%;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px #888888;
    }

    label {
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
    }

    select {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
    }

    input[type="submit"] {
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
    }

    .result {
      margin-top: 20px;
      font-size: 24px;
      color: 	#FF0000; 
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Penghitungan Gaji</h1>
  <div class="container">
    <form method="post">
      <label for="jabatan">Jabatan:</label>
      <select name="jabatan" required>
        <option value="manajer">Manajer</option>
        <option value="karyawan">Karyawan</option>
        <option value="staf">Staf</option>
        <option value="direktur">Direktur</option>
        <option value="pengawas">Pengawas</option>
        <option value="kepala_bagian">Kepala Bagian</option>
      </select>
      <br>
      <label for="gaji">Gaji Pokok (Rp):</label>
      <input type="text" name="gaji" required>
      <br>
      <label for="bonus">Bonus (Rp):</label>
      <input type="text" name="bonus" required>
      <br>
      <input type="submit" value="Hitung Gaji">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jabatan = $_POST["jabatan"];
        $gaji = $_POST["gaji"];
        $bonus = $_POST["bonus"];

        if ($jabatan === "manajer") {
          $total_gaji = $gaji + $bonus + ($gaji * 0.1); // Manajer mendapatkan bonus 10% dari gaji
        } elseif ($jabatan === "karyawan") {
          $total_gaji = $gaji + $bonus + ($gaji * 0.05); // Karyawan mendapatkan bonus 5% dari gaji
        } elseif ($jabatan === "staf") {
          $total_gaji = $gaji + $bonus + ($gaji * 0.03); // Staf mendapatkan bonus 3% dari gaji
        } elseif ($jabatan === "direktur") {
          $total_gaji = $gaji + $bonus + ($gaji * 0.15); // Direktur mendapatkan bonus 15% dari gaji
        } elseif ($jabatan === "pengawas") {
          $total_gaji = $gaji + $bonus + ($gaji * 0.08); // Pengawas mendapatkan bonus 8% dari gaji
        } elseif ($jabatan === "kepala_bagian") {
          $total_gaji = $gaji + $bonus + ($gaji * 0.07); // Kepala Bagian mendapatkan bonus 7% dari gaji
        }

        echo "<p class='result'>Total Gaji: Rp " . number_format($total_gaji, 2) . "</p>";
      }
    ?>
  </div>
</body>
</html>
