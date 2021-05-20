<h1>Buat Produk</h1>

<form action="/barang" method="POST">
    @csrf
    Nama : <input type="text" name="namabrg"> <br><br>
    Deskripsi : <input type="text" name="deskripsi"><br><br>
    Harga : <input type="text" name="harga"><br><br>
    URL Foto : <input type="longText" name="image_url"><br><br><br><br>

    <input type="submit" value="Simpan">
</form>