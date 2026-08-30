<h1>Tambah Produk</h1>

<?php if (session('errors')): ?>
    <ul style="color: red;">
        <?php foreach (session('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<form action="/produk" method="post">
    <?= csrf_field() ?>
    <label for="nama_produk">Nama Produk:</label>
    <input type="text" name="nama_produk" id="nama_produk" value="<?= old('nama_produk') ?>" required><br>

    <label for="harga">Harga:</label>
    <input type="number" name="harga" id="harga" value="<?= old('harga') ?>" step="0.01" required><br>

    <label for="stok">Stok:</label>
    <input type="number" name="stok" id="stok" value="<?= old('stok') ?>" required><br>

    <button type="submit">Tambah Produk</button>
</form>



<a href="/produk">Kembali ke daftar</a>