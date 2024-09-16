<!DOCTYPE html>
<html lang="id">
<head>
<title>Form Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>    
    <div class="container mt-5 border rounded p-0">
    <div class="bg-secondary rounded-top p-2 text-white text-center">Form Input Siswa</div>
    <form method="POST" autocomplete="on" action="">
        <div> <div class="form-group m-2">
        <label for="nis">NIS:</label><br />
            <input type="text" class="form-control" id="nis" name="nis" maxlength="10">
            <span class="error" id="nisError"></span>
        </div>
        <br>
        <div> <div class="form-group m-2">
        <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" maxlength="50">
            <span class="error" id="namaError"></span>
        </div>
        <br>
        <div> <div class="check m-2">
            <label>Jenis Kelamin:</label><br />
            <input type="radio" id="pria" name="jenisKelamin" value="Pria">
            <label for="pria">Pria</label><br />
            <input type="radio" id="wanita" name="jenisKelamin" value="Wanita">
            <label for="wanita">Wanita</label>
            <span class="error" id="genderError"></span>
        </div>
        <br>
        <div> <div class="form-group m-2">
            <label for="kelas">Kelas:</label><br /> 
            <select id="kelas" name="kelas" class="form-control" onchange="toggleEkstrakurikuler()">
                <option value="">Pilih Kelas</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
            <span class="error" id="kelasError"></span>
        </div>
        <br>
        <div id="ekstrakurikuler" style="display: none;">
            <label>Ekstrakurikuler:</label>
            <br>
            <input type="checkbox" id="pramuka" name="ekstrakurikuler" value="Pramuka">
            <label for="pramuka">Pramuka</label>
            <br>
            <input type="checkbox" id="seniTari" name="ekstrakurikuler" value="Seni Tari">
            <label for="seniTari">Seni Tari</label>
            <br>
            <input type="checkbox" id="sinematografi" name="ekstrakurikuler" value="Sinematografi">
            <label for="sinematografi">Sinematografi</label>
            <br>
            <input type="checkbox" id="basket" name="ekstrakurikuler" value="Basket">
            <label for="basket">Basket</label>
            <span class="error" id="ekstrakurikulerError"></span>
        </div>
        <br>
        <!-- submit, reset dan button -->
        <div class="m-2 text-center">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>

    <script>
        function toggleEkstrakurikuler() {
            const kelas = document.getElementById("kelas").value;
            const ekstrakurikuler = document.getElementById("ekstrakurikuler");

            if (kelas === "X" || kelas === "XI") {
                ekstrakurikuler.style.display = "block";
            } else {
                ekstrakurikuler.style.display = "none";
                clearEkstrakurikulerSelection();
            }
        }

        function clearEkstrakurikulerSelection() {
            const checkboxes = document.querySelectorAll('input[name="ekstrakurikuler"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
        }

        function validateForm() {
            let isValid = true;

            // Validasi NIS
            const nis = document.getElementById("nis").value;
            const nisError = document.getElementById("nisError");
            if (!/^[1-9]{10}$/.test(nis)) {
                nisError.textContent = "NIS harus terdiri dari 10 karakter angka (1-9).";
                isValid = false;
            } else {
                nisError.textContent = "";
            }

            // Validasi Nama
            const nama = document.getElementById("nama").value;
            const namaError = document.getElementById("namaError");
            if (nama === "") {
                namaError.textContent = "Nama harus diisi.";
                isValid = false;
            } else {
                namaError.textContent = "";
            }

            // Validasi Jenis Kelamin
            const jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked');
            const genderError = document.getElementById("genderError");
            if (!jenisKelamin) {
                genderError.textContent = "Jenis kelamin harus dipilih.";
                isValid = false;
            } else {
                genderError.textContent = "";
            }

            // Validasi Kelas
            const kelas = document.getElementById("kelas").value;
            const kelasError = document.getElementById("kelasError");
            if (kelas === "") {
                kelasError.textContent = "Kelas harus dipilih.";
                isValid = false;
            } else {
                kelasError.textContent = "";
            }

            // Validasi Ekstrakurikuler
            if (kelas === "X" || kelas === "XI") {
                const checkedEkstrakurikuler = document.querySelectorAll('input[name="ekstrakurikuler"]:checked');
                const ekstrakurikulerError = document.getElementById("ekstrakurikulerError");
                if (checkedEkstrakurikuler.length < 1 || checkedEkstrakurikuler.length > 3) {
                    ekstrakurikulerError.textContent = "Pilih minimal 1 dan maksimal 3 ekstrakurikuler.";
                    isValid = false;
                } else {
                    ekstrakurikulerError.textContent = "";
                }
            }

            // Jika form valid
            if (isValid) {
                alert("Form berhasil disubmit!");
            }
        }
    </script>
</body>
</html>
