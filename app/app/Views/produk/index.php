<h1>Daftar Produk</h1>

<a href="/produk">Daftar Produk</a>
<a href="/produk/new">Tambah Produk</a>

<table border="1" cellpadding="8" style="border-collapse: collapse; margin-top: 12px;">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <?php foreach ($produk as $produk): ?>
        <tr>
            <td><?= esc($produk['nama_produk']) ?></td>
            <td><?= number_format((float)$produk['harga'], 0, ',', '.') ?></td>
            <td><?= esc($produk['stok']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>