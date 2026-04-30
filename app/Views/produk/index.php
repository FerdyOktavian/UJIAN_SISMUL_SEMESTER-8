<!DOCTYPE html>
<html>
<head>
    <title>SembakoKu - Premium Grocery Store</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-inner">
            <a href="/produk" class="logo">Sembako<span>Ku</span></a>

            <div class="nav-menu">
                <a href="#home">Home</a>
                <a href="#cerita">Cerita Toko</a>
                <a href="#produk">Produk</a>
                <a href="/produk/create" class="nav-btn">Tambah Barang</a>
            </div>
        </div>
    </nav>

    <main class="page-wrapper">

        <section class="hero" id="home">
            <div class="hero-content">
                <span class="hero-label">Premium Local Grocery Store</span>

                <h1>Sembako harian dengan rasa toko <span>kelas premium.</span></h1>

                <p>
                    SembakoKu adalah website pengelolaan produk sembako modern untuk
                    menampilkan barang kebutuhan harian seperti beras, minyak, gula,
                    telur, mie instan, dan produk rumah tangga lainnya.
                </p>

                <div class="hero-actions">
                    <a href="/produk/create" class="btn-primary">+ Tambah Produk</a>
                    <a href="#produk" class="btn-secondary">Lihat Produk</a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-card">
                    <h3>Fresh daily essentials</h3>
                    <p>
                        Produk sederhana, tampilan elegan, dan pengalaman kelola barang
                        yang lebih rapi.
                    </p>
                </div>
            </div>
        </section>

        <section class="story-section" id="cerita">
            <div class="story-card">
                <div class="story-badge"></div>

                <div class="story-content">
                    <span>Cerita SembakoKu</span>
                    <h2>Dari toko kebutuhan harian, jadi katalog digital yang lebih rapi.</h2>

                    <p>
                        SembakoKu dibuat untuk membantu pengelolaan produk sembako agar
                        terlihat lebih modern dan mudah digunakan. Setiap produk bisa
                        ditambahkan dengan gambar, nama barang, harga, dan deskripsi.
                    </p>

                    <p>
                        Konsepnya sederhana: barang kebutuhan sehari-hari tetap bisa
                        punya tampilan premium, bersih, dan menarik seperti e-commerce
                        profesional.
                    </p>
                </div>
            </div>
        </section>

        <section id="produk">
            <div class="section-header">
            <div>
                <h2>Katalog Produk</h2>
                <p>Temukan produk berdasarkan nama atau kategori barang.</p>
            </div>

            <a href="/produk/create" class="btn-primary">+ Tambah Barang</a>
        </div>

        <div class="filter-bar">
            <input 
                type="text" 
                id="searchInput" 
                class="search-input" 
                placeholder="Cari produk, contoh: beras, gula, minyak..."
            >

            <select id="categoryFilter" class="filter-select">
                <option value="all">Semua Kategori</option>
                <option value="beras">Beras</option>
                <option value="minyak">Minyak</option>
                <option value="gula">Gula</option>
                <option value="mie instan">Mie Instan</option>
                <option value="minuman">Minuman</option>
                <option value="bumbu">Bumbu</option>
                <option value="kebutuhan rumah">Kebutuhan Rumah</option>
            </select>
        </div>

        <p id="emptyFilterMessage" class="empty-filter-message" style="display:none;">
            Produk yang kamu cari belum ada.
        </p>

            <?php if (!empty($produk)): ?>
                <div class="product-grid">
                    <?php foreach ($produk as $p): ?>
                        <div class="product-card" data-name="<?= strtolower($p['nama_barang']); ?>" data-category="<?= strtolower($p['kategori']); ?>">

                            <div class="product-img-wrap">
                                <img src="/uploads/<?= $p['gambar']; ?>" class="product-img">
                                <span class="product-category"><?= $p['kategori']; ?></span>
                            </div>

                            <div class="product-body">
                                <h3><?= $p['nama_barang']; ?></h3>

                                <div class="price">
                                    Rp <?= number_format($p['harga'], 0, ',', '.'); ?>
                                </div>

                                <p class="desc">
                                    <?= $p['deskripsi']; ?>
                                </p>

                                <div class="action-row">
                                    <a href="/produk/edit/<?= $p['id']; ?>" class="btn-secondary">Edit</a>

                                    <form action="/produk/delete/<?= $p['id']; ?>" method="post">
                                        <button type="submit" class="btn-danger" onclick="return confirm('Yakin mau hapus barang ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="empty-state">
                    <h3>Belum ada produk</h3>
                    <p>Tambahkan produk pertamamu dulu agar katalog SembakoKu mulai terisi.</p>
                    <a href="/produk/create" class="btn-primary">Tambah Produk Pertama</a>
                </div>
            <?php endif; ?>
        </section>

    </main>

    <footer class="footer">
        <p>© 2026 SembakoKu. Premium grocery catalog for daily essentials.</p>
    </footer>
<script>
    const searchInput = document.getElementById('searchInput');
    const categoryFilter = document.getElementById('categoryFilter');
    const productCards = document.querySelectorAll('.product-card');
    const emptyFilterMessage = document.getElementById('emptyFilterMessage');

    function filterProducts() {
        const searchValue = searchInput.value.toLowerCase();
        const categoryValue = categoryFilter.value;
        let visibleCount = 0;

        productCards.forEach(card => {
            const productName = card.dataset.name;
            const productCategory = card.dataset.category;

            const matchName = productName.includes(searchValue);
            const matchCategory = categoryValue === 'all' || productCategory === categoryValue;

            if (matchName && matchCategory) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (emptyFilterMessage) {
            emptyFilterMessage.style.display = visibleCount === 0 ? 'block' : 'none';
        }
    }

    if (searchInput && categoryFilter) {
        searchInput.addEventListener('input', filterProducts);
        categoryFilter.addEventListener('change', filterProducts);
    }
</script>
</body>
</html>