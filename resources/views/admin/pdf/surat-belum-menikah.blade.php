@extends('layouts.kopsurat')
@section('title')
Surat Keterangan Belum Menikah
@endsection

@section('content')

<div class="col-md-12" style="margin-top:20px;">
    
    <div class="col-md-12" style="margin-left:22%;">
        <h5 style="text-decoration:underline;margin-right:60px;">Surat Keterangan Belum Menikah</h5>
        <p style="font-family:Arial;margin-top:-15px;margin-right:60px;font-size:12pt;">Nomor :</p>
    </div>

    <div>
        <p style="font-family:Arial;">Yang bertanda tangan dibawah ini, kami Kepala Kecamatan Tadika Mesra dengan ini menyatakan bahwa sebenarnya :</p>
    </div>

    <div style="margin-left:20px;">
        <table class="" style="font-family:Arial;">
            <tr>
                <td><p>Nama</p></td>
                <td><p style="margin-left:20px;margin-right:20px;">:</p></td>
                <td><p>{{$data[0]->nama}}</p></td>
            </tr>
            <tr >
                <td><p>Tempat, Tanggal Lahir</p></td>
                <td><p style="margin-left:20px;margin-right:20px;">:</p></td>
                <td><p>{{$data[0]->tempat_lahir}}, {{$data[0]->tanggal_lahir}}</p></td>
            </tr>
            <tr>
                <td><p>Agama</p></td>
                <td><p style="margin-left:20px;margin-right:20px;">:</p></td>
                <td><p>
                @if($data[0]->agama == "1")
                    Islam
                @elseif($data[0]->agama == "2")
                    Kristen
                @elseif($data[0]->agama == "3")
                    Hindu
                @elseif($data[0]->agama == "4")
                    Budha
                @else 
                    Lainnya
                @endif
                
                </p></td>
            </tr>
            <tr>
                <td><p>Alamat</p></td>
                <td><p style="margin-left:20px;margin-right:20px;">:</p></td>
                <td><p>{{$data[0]->alamat}}</p></td>
            </tr>
        </table>
    </div>
    
    <div style="font-family:Arial;">
        <p>Dengan ini menerangkan bahwa orang tersebut diatas memang benar-benar penduduk kecamatan Tadika Mesra dan benar-benar belum pernah menikah.</p>
        <p>Surat keterangan ini dipergunakan untuk syarat melamar pekerjaan di perusahaan.</p>
        <p>Demikian surat keterangan ini kami buat dan keluarkan dengan sebenarnya dan agar dapat dipergunakan sebagaimana mestinya.</p>
    </div>

    <div style="float:right;">
        <div style="font-family:Arial;">
            Palembang,
        </div>

        <div style="font-family:Arial;">
            {{$ttd->jabatan}} Tadika Mesra <br><br><br> {{$ttd->name}}
        </div>
    </div>

   
</div>


@endsection