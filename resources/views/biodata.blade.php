

<table border="1">
    <tr>
        <td><b>Nama</b></td>
        <td><b>Alamat</b></td>
        <td><b>Aksi</b></td>
    </tr>
    @foreach ($biodata as $bio )
    <tr>
        <td>{{ $bio->nama }}</td>
        <td>{{ $bio->alamat }}</td>
        
        <td>
            <a href="/biodata/edit/{{ $bio->id }}">Edit</a> 
            :: 
            <a href="/biodata/hapus/{{ $bio->id }}">Hapus</a>
        </td>
    
    </tr>
    @endforeach
</table>

<hr>
<a href="/biodata/tambahBiodata">Tambah Biodata</a>