<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form action=""method="get">
    <div class="form-group">
  <label for="nama">Nama:</label>
  <input type="text" class="form-control" id="nama" name="nama" maxlength="50">
</div>

<div class="form-group">
  <label for="email">Email:</label>
  <input type="email" class="form-control" id="email" name="email">
</div>

<div class="form-group">
  <label for="kota">Kota/ Kabupaten:</label>
  <select id="kota" name="kota" class="form-control">
    <option value="Semarang">Semarang</option>
    <option value="Jakarta">Jakarta</option>
    <option value="Bandung">Bandung</option>
    <option value="Surabaya">Surabaya</option>
  </select>
</div>

<label>Jenis Kelamin:</label>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="jenis_kelamin" value="pria">Pria
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="jenis_kelamin" value="wanita">Wanita
  </label>
</div>

<br>
<label>Peminatan:</label>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="minat[]" value="coding">Coding
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="minat[]" value="ux_design">UX Design
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="minat[]" value="data_science">Data Science
  </label>
</div>

<!-- submit, reset dan button -->
<button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
<button type="reset" class="btn btn-danger">Reset</button>
</body>
</html>