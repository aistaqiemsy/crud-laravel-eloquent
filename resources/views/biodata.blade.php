@foreach ($biodata as $bio )
{{ $bio->nama }} <br>
@endforeach

<hr>
<a href="/biodata/tambahBiodata">Tambah Biodata</a>