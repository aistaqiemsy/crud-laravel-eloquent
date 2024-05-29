<form action="/biodata/simpanUpdate/{{$biodata->id}}" method="post">
    @csrf 
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="txUpNama" value="{{ $biodata->nama }}"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="txUpAlamat" value="{{ $biodata->alamat }}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
