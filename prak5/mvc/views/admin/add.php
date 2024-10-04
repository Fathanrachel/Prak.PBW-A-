<div class="container-add">
    <h2>Tambah Barang</h2>
    <form action="<?= BASEURL; ?>index.php?url=admin/store" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" required>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required>

        <button type="submit">Simpan</button>
    </form>
</div>
