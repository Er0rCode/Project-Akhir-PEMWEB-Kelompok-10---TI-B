<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>

  <div class="container mt-5">
    <h2>Form Data Mahasiswa</h2>
    <form action="proses.php" method="POST">
      
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" id="nim" name="nim" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="offering" class="form-label">Offering</label>
        <select id="offering" name="offering" class="form-select">
          <option value="TI A">TI A</option>
          <option value="TI B">TI B</option>
          <option value="TI C">TI C</option>
          <option value="TI INTER">TI INTER</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="test1234.php" class="btn btn-secondary">Lihat Tabel</a>

    </form>
  </div>
  
</body>
</html>
