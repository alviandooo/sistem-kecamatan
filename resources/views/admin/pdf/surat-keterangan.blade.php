@extends('layouts.kopsurat')
@section('title')
Surat Keterangan
@endsection
@section('content')
<!-- isi surat -->
<div class="col-md-12" style="margin-top:20px;" >
    
    <div class="col-md-12" style="margin-left:22%;" >
        <h5 style="text-decoration:underline;margin-right:60px;">SURAT KETERANGAN</h5>
        <p style="font-family:Arial;margin-top:-15px;margin-right:60px;font-size:12pt;">Nomor :</p>
    </div>

    <div>
        <p style="font-family:Arial;">1. Yang bertanda tangan dibawah ini :</p>
        
        <div style="margin-left:30px;font-family:Arial;">
            <table style="margin-left:30px;width:1%;white-space: nowrap;">
                <tr>
                    <td>a.&nbsp;&nbsp;</td><td>Nama</td><td>&nbsp;&nbsp; : &nbsp;&nbsp; {{$ttd->name}}</td><td></td>
                </tr>
                <tr>
                    <td>b.&nbsp;&nbsp;</td><td>Jabatan</td><td>&nbsp;&nbsp; : &nbsp;&nbsp; {{$ttd->jabatan}}</td><td></td>
                </tr>
             </table>
        </div>
        <br>
    </div>

    <div style="font-family:Arial;margin-left:25px">
        <p>Dengan ini menerangkan bahwa :</p>

        <table style="margin-left:30px">
            <tr>
                <td>a.&nbsp;&nbsp;</td><td>Nama</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td> {{$data[0]->nama}}</td><td></td>
            </tr>
            <tr>
                <td style="width:1%;white-space: nowrap;">b.&nbsp;&nbsp;</td><td style="width:1%;white-space: nowrap;">Tempat/Tanggal lahir</td><td style="width:1%;white-space: nowrap;">&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>{{$data[0]->tempat_lahir}}/{{$data[0]->tanggal_lahir}}</td><td></td>
            </tr>
            <tr>
                <td>c.&nbsp;&nbsp;</td><td>Jenis Kelamin</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>@if($data[0]->jenis_kelamin == 1)Laki-laki  @else Perempuan @endif</td><td></td>
            </tr>
            <tr>
                <td>d.&nbsp;&nbsp;</td><td>Bangsa/Agama</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>{{$data[0]->kewarganegaraan}}/{{$data[0]->agama}}</td><td></td>
            </tr>
            <tr>
                <td>e.&nbsp;&nbsp;</td><td>Pekerjaan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>{{$data[0]->pekerjaan}}</td><td></td>
            </tr>
            <tr>
                <td>f.&nbsp;&nbsp;</td><td>Alamat</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>{{$data[0]->alamat}}</td><td></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">g.&nbsp;&nbsp;</td><td style="vertical-align: top;">Bermaksud</td><td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>{{$data[0]->bermaksud}}</td><td></td>
            </tr>
        </table>
    </div>

    <div style="font-family:Arial;margin-left:25px;margin-top:20px;">
        <p>Demikian surat ini dibuat untuk dipergunakan sebagaimana mestinya.</p> 
    </div>

    <div style="float:right;margin-right:120px; col-md-4">
        <div style="font-family:Arial;text-align:center">
            Palembang, &nbsp;&nbsp;<br> 
            <b>LURAH KALIDONI KOTA PALEMBANG</b>
        </div>

        <div style="font-family:Arial;margin-top:80px;text-align:center">
        <b>{{$ttd->name}}</b><br><b>NIP. {{$ttd->nip}}</b>
        </div>
    </div>

   
</div>


@endsection