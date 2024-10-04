<div class="container-edit">
    <h2>Edit Barang</h2>
    <form action="<?= BASEURL; ?>index.php?url=admin/update" method="POST">
        <input type="hidden" name="id" value="<?= $data['item']['id']; ?>">
        
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?= $data['item']['nama']; ?>" required>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" value="<?= $data['item']['stok']; ?>" required>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="<?= $data['item']['harga']; ?>" required>

        <button type="submit">Update</button>
    </form>
</div>
