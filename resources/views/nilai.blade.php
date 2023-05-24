
@php
    $nama = "Budi";
    $nilai = 60;
@endphp

@if ($nilai >= 60)
    @php
        $ket = "lulus";
    @endphp
@else
    @php
        $ket = "tidak lulus";
    @endphp
@endif

Siswa yang bernama {{ $nama }}
<br>Dengan Nilai {{ $nilai }}
<br>Dinyatakan {{ $ket }}
