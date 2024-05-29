<form action="/biodata/tambahBiodata" method="post">
    @csrf 
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="txNama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="txAlamat"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>