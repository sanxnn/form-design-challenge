<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4 text-center">
            <h1 class="text-success mb-4">Data Pendaftaran</h1>
            <?php if(isset($_POST['nama'])): ?>
            <div class="alert alert-success">Data berhasil dikirim!</div>
            <ul class="list-group text-start">
                <li class="list-group-item"><strong>Nama:</strong> <?= htmlspecialchars($_POST['nama']); ?></li>
                <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($_POST['email']); ?></li>
                <li class="list-group-item"><strong>Jenis Kelamin:</strong> <?= htmlspecialchars($_POST['jenis_kelamin']); ?></li>
                <li class="list-group-item"><strong>Jurusan:</strong> <?= htmlspecialchars($_POST['jurusan']); ?></li>
                <li class="list-group-item"><strong>Hobi:</strong> <?= isset($_POST['hobi']) ? implode(', ', $_POST['hobi']) : 'Tidak ada'; ?></li>
                <li class="list-group-item"><strong>Alamat:</strong> <?= htmlspecialchars($_POST['alamat']); ?></li>
            </ul>
            <?php else: ?>
            <p class="alert alert-warning">Tidak ada data yang dikirim.</p>
            <?php endif; ?>
            <a href="form_daftar.html" class="btn btn-primary mt-3">Kembali ke Form</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
