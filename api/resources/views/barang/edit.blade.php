<h1>Edit Produk</h1>

<form action="/barang/{{$input->id}}" method="POST">
    @method('PUT')
    @csrf
    Nama : <input type="text" name="namabrg" value="{{$input->namabrg}}"> <br><br>
    Deskripsi : <input type="text" name="deskripsi" value="{{$input->deskripsi}}"><br><br>
    Harga : <input type="text" name="harga" value="{{$input->harga}}"><br><br>
    URL Foto : <input type="longText" name="image_url" value="{{$input->image_url}}"><br><br><br><br>

    <input type="submit" value="Simpan">
</form>