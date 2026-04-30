<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk - SembakoKu</title>
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
            <span class="hero-label">Tambah Produk Baru</span>

            <h1>Masukkan barang sembako terbaikmu.</h1>

            <p class="subtitle">
                Tambahkan nama barang, harga, deskripsi, dan gambar produk agar katalog
                SembakoKu terlihat rapi, profesional, dan menarik.
            </p>

            <form action="/produk/store" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nama Barang</label>
                    <input 
                        type="text" 
                        name="nama_barang" 
                        class="form-control" 
                        placeholder="Contoh: Beras Ramos 5kg" 
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Harga Barang</label>
                    <input 
                        type="number" 
                        name="harga" 
                        class="form-control" 
                        placeholder="Contoh: 75000" 
                        required
                    >
                    <p class="small-note">Isi angka saja, tanpa titik atau Rp.</p>
                </div>

                <div class="form-group">
                    <label>Kategori Barang</label>
                    <select name="kategori" class="form-control" required>
                        <option value="">Pilih kategori barang</option>
                        <option value="Beras">Beras</option>
                        <option value="Minyak">Minyak</option>
                        <option value="Gula">Gula</option>
                        <option value="Mie Instan">Mie Instan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Bumbu">Bumbu</option>
                        <option value="Kebutuhan Rumah">Kebutuhan Rumah</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Deskripsi Barang</label>
                    <textarea 
                        name="deskripsi" 
                        class="form-control" 
                        placeholder="Contoh: Beras pulen kualitas premium cocok untuk kebutuhan harian keluarga." 
                        required
                    ></textarea>
                </div>

                <div class="form-group">
                    <label>Gambar Barang</label>

                    <div class="file-box">
                        <input 
                            type="file" 
                            name="gambar" 
                            id="gambarInput"
                            accept="image/*" 
                            required
                        >

                        <p class="small-note">
                            Gunakan gambar yang jelas agar produk terlihat lebih premium.
                        </p>

                        <img id="previewGambar" class="preview-image" style="display:none;">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">Simpan Produk</button>
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