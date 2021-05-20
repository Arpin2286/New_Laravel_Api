<center>
    <h1>List Produk</h1>

    <table>
    <tr>
        <th>Nama</th>
        <th>deskripsi</th>
        <th>Harga</th>
        <th>img_url</th>
    </tr>
    <tr>
        @foreach($inputs as $input)
        <td>{{$input->namabrg}}</td>
        <td>{{$input->deskripsi}}1</td>
        <td>{{$input->harga}}</td>
        <td>{{$input->image_url}}</td>
        <td>
        <a href="/barang/{{$input->id}}/edit">ubah</a>
        <form action="/barang/{{$input->id}}" method="POST">  //detele masih ada masalah
        @method('DELETE')
        <input type="submit" value="Delete">
        </form>
        </td>
        @endforeach
    </tr>
</table>

<a href="/barang/create">create</a>
</center>
