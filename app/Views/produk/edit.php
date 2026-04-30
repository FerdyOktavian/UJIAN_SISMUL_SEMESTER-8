<?php if (!isset($produk)): ?>
    <h1>Data produk tidak ditemukan</h1>
    <a href="/produk">Kembali ke daftar produk</a>
    <?php exit; ?>
<?php endif; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk - SembakoKu</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-inner">
            <a href="/produk" class="logo">Sembako<span>Ku</span></a>

            <div class="nav-menu">
                <a href="/produk">Home</a>
                <a href="/produk#cerita">Cerita Toko</a>
                <a href="/produk#produk">Produk</a>
                <a href="/produk" class="nav-btn">Kembali</a>
            </div>
        </div>
    </nav>

    <main class="page-wrapper form-page">

        <div class="form-card">
            <span class="hero-label">Edit Produk</span>

            <h1>Perbarui detail barang sembako.</h1>

            <p class="subtitle">
                Ubah nama barang, harga, deskripsi, atau gambar produk agar katalog
                tetap terlihat fresh dan profesional.
            </p>

            <form action="/produk/update/<?= $produk['id']; ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nama Barang</label>
                    <input 
                        type="text" 
                        name="nama_barang" 
                        class="form-control" 
                        value="<?= $produk['nama_barang']; ?>" 
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Harga Barang</label>
                    <input 
                        type="number" 
                        name="harga" 
                        class="form-control" 
                        value="<?= $produk['harga']; ?>" 
                        required
                    >
                    <p class="small-note">Isi angka saja, tanpa titik atau Rp.</p>
                </div>

                <div class="form-group">
                    <label>Kategori Barang</label>
                    <select name="kategori" class="form-control" required>
                        <option value="Beras" <?= $produk['kategori'] == 'Beras' ? 'selected' : ''; ?>>Beras</option>
                        <option value="Minyak" <?= $produk['kategori'] == 'Minyak' ? 'selected' : ''; ?>>Minyak</option>
                        <option value="Gula" <?= $produk['kategori'] == 'Gula' ? 'selected' : ''; ?>>Gula</option>
                        <option value="Mie Instan" <?= $produk['kategori'] == 'Mie Instan' ? 'selected' : ''; ?>>Mie Instan</option>
                        <option value="Minuman" <?= $produk['kategori'] == 'Minuman' ? 'selected' : ''; ?>>Minuman</option>
                        <option value="Bumbu" <?= $produk['kategori'] == 'Bumbu' ? 'selected' : ''; ?>>Bumbu</option>
                        <option value="Kebutuhan Rumah" <?= $produk['kategori'] == 'Kebutuhan Rumah' ? 'selected' : ''; ?>>Kebutuhan Rumah</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Deskripsi Barang</label>
                    <textarea 
                        name="deskripsi" 
                        class="form-control" 
                        required
                    ><?= $produk['deskripsi']; ?></textarea>
                </div>

                <div class="form-group">
                    <label>Gambar Saat Ini</label>

                    <div class="file-box">
                        <img src="/uploads/<?= $produk['gambar']; ?>" class="current-image">

                        <label>Ganti Gambar</label>
                        <input 
                            type="file" 
                            name="gambar" 
                            id="gambarInput"
                            accept="image/*"
                        >

                        <p class="small-note">
                            Kosongkan jika tidak ingin mengganti gambar produk.
                        </p>

                        <img id="previewGambar" class="preview-image" style="display:none;">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">Update Produk</button>
                    <a href="/produk" class="btn-secondary">Batal</a>
                </div>

            </form>
        </div>

    </main>

    <script>
        const gambarInput = document.getElementById('gambarInput');
        const previewGambar = document.getElementById('previewGambar');

        gambarInput.addEventListener('change', function () {
            const file = this.files[0];

            if (file) {
                previewGambar.src = URL.createObjectURL(file);
                previewGambar.style.display = 'block';
            }
        });
    </script>

</body>
</html>