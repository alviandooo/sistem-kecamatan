<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Menikah</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        tr { line-height: 18px; }
    </style>
</head>
<body>

<div class="container-fluid" style="font-family:Arial;">
    
    <div style="font-size:10pt">
        LAMPIRAN IV <br>
        KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN <br>
        MASYARAKAT ISLAM NOMOR 473 TAHUN 2021 <br>
    </div>
    <br>
    <div style="text-align:center;margin-bottom:20px;">
        FORMULIR PERSETUJUAN CALON PENGANTIN
    </div>
    <div style="font-size:9pt;float:right;">
        Model N4
    </div>

    <div style="text-align:center;margin-top:20px;">
        <p style="text-decoration:underline;">PERSETUJUAN CALON PENGANTIN</p>
    </div>
    <br>

    <div>
        Yang bertanda tangan dibawah ini: <br>
        A. Calon Suami
        <table style="margin-left:30px">
            <tr>
                <td>1.&nbsp;&nbsp;</td><td>Nama Lengkap dan Alias</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->nama}}</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:1%;white-space: nowrap;">2.&nbsp;&nbsp;</td><td style="width:1%;white-space: nowrap;">Bin</td><td style="width:1%;white-space: nowrap;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->bin}}</td><td></td>
            </tr>
            <tr>
                <td>3.&nbsp;&nbsp;</td><td>Nomor Induk Kependudukan (NIK)</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->nik}}</td><td></td>
            </tr>
            <tr>
                <td>4.&nbsp;&nbsp;</td><td>Tempat dan Tanggal Lahir</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->tempat_lahir}},{{$suami->tanggal_lahir}}</td><td></td>
            </tr>
            <tr>
                <td>5.&nbsp;&nbsp;</td><td>Kewarganegaraan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->kewarganegaraan}}</td><td></td>
            </tr>
            <tr>
                <td>6.&nbsp;&nbsp;</td><td>Jenis Kelamin</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->jenis_kelamin}}</td><td></td>
            </tr>
            <tr>
                <td>7.&nbsp;&nbsp;</td><td>Agama</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->agama}}</td><td></td>
            </tr>
            <tr>
                <td>8.&nbsp;&nbsp;</td><td>Pekerjaan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->pekerjaan}}</td><td></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">9.&nbsp;&nbsp;</td><td style="vertical-align: top;">Alamat</td><td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->alamat}}</td><td></td>
            </tr>
        </table>
        <br>

        B. Calon Istri
        <table style="margin-left:30px">
            <tr>
                <td>1.&nbsp;&nbsp;</td><td>Nama Lengkap dan Alias</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$istri->nama}}</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:1%;white-space: nowrap;">2.&nbsp;&nbsp;</td><td style="width:1%;white-space: nowrap;">Bin</td><td style="width:1%;white-space: nowrap;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$istri->bin}}</td><td></td>
            </tr>
            <tr>
                <td>3.&nbsp;&nbsp;</td><td>Nomor Induk Kependudukan (NIK)</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$istri->nik}}</td><td></td>
            </tr>
            <tr>
                <td>4.&nbsp;&nbsp;</td><td>Tempat dan Tanggal Lahir</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$istri->tempat_lahir}},{{$istri->tanggal_lahir}}</td><td></td>
            </tr>
            <tr>
                <td>5.&nbsp;&nbsp;</td><td>Kewarganegaraan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$istri->kewarganegaraan}}</td><td></td>
            </tr>
            <tr>
                <td>6.&nbsp;&nbsp;</td><td>Jenis Kelamin</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$istri->jenis_kelamin}}</td><td></td>
            </tr>
            <tr>
                <td>7.&nbsp;&nbsp;</td><td>Agama</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$istri->agama}}</td><td></td>
            </tr>
            <tr>
                <td>8.&nbsp;&nbsp;</td><td>Pekerjaan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$istri->pekerjaan}}</td><td></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">9.&nbsp;&nbsp;</td><td style="vertical-align: top;">Alamat</td><td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$istri->alamat}}</td><td></td>
            </tr>
        </table>
    </div>
    <br>
    <div>
        Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa ada paksaan dari siapapun juga, setuju untuk
        melangsungkan perkawinan. <br><br>
        Demikian surat persetujuan ini dibuat untuk digunakan seperlunya.
    </div>
    <br><br>
    <div class="col-sm-7" style="float:right;text-align:center;">
        Palembang,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2021
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-sm-6" style="text-align:center;">
            <b>Calon Suami</b>
            <br><br><br>
            <b>{{$suami->nama}}</b>
        </div>

        <div class="col-sm-6" style="text-align:center;float:right">
            <b>Calon Istri</b>
            <br><br><br>
            <b>{{$istri->nama}}</b>
        </div>
    </div>

    <!-- Halaman lampiran selanjutnya -->
    <div style="page-break-before:always"></div>

    <div style="font-size:10pt">
        LAMPIRAN V <br>
        KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN <br>
        MASYARAKAT ISLAM NOMOR 473 TAHUN 2021 <br>
        TENTANG PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN <br>
    </div>
    <div style="font-size:9pt;float:right;">
        Model N1
    </div>
    <div style="margin-top:10px;">
        <table style="font-size:10pt;">
            <tr>
                <td>KANTOR DESA/KELURAHAN</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>KALIDONI</td><td></td>
            </tr>
            <tr>
                <td style="width:1%;white-space: nowrap;">KECAMATAN</td><td style="width:1%;white-space: nowrap;">&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>KALIDONI</td><td></td>
            </tr>
            <tr>
                <td>KABUPATEN/KOTA</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td>PALEMBANG</td><td></td>
            </tr>
        </table>
    </div>
    <br>
    <div style="text-align:center;margin-bottom:20px;">
        SURAT PENGANTAR NIKAH  <br>
        NOMOR : 474.2/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /KD/I/2021
    </div>
    <div>
        Yang bertanda tangan dibawah ini menjelaskan dengan sesungguhnya bahwa:

        <table style="margin-left:10px">
            <tr>
                <td>1.&nbsp;&nbsp;</td><td>Nama Lengkap dan Alias</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->nama}}</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:1%;white-space: nowrap;">2.&nbsp;&nbsp;</td><td style="width:1%;white-space: nowrap;">Bin</td><td style="width:1%;white-space: nowrap;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->bin}}</td><td></td>
            </tr>
            <tr>
                <td>3.&nbsp;&nbsp;</td><td>Nomor Induk Kependudukan (NIK)</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->nik}}</td><td></td>
            </tr>
            <tr>
                <td>4.&nbsp;&nbsp;</td><td>Tempat dan Tanggal Lahir</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->tempat_lahir}},{{$suami->tanggal_lahir}}</td><td></td>
            </tr>
            <tr>
                <td>5.&nbsp;&nbsp;</td><td>Kewarganegaraan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->kewarganegaraan}}</td><td></td>
            </tr>
            <tr>
                <td>6.&nbsp;&nbsp;</td><td>Jenis Kelamin</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->jenis_kelamin}}</td><td></td>
            </tr>
            <tr>
                <td>7.&nbsp;&nbsp;</td><td>Agama</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->agama}}</td><td></td>
            </tr>
            <tr>
                <td>8.&nbsp;&nbsp;</td><td>Pekerjaan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->pekerjaan}}</td><td></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">9.&nbsp;&nbsp;</td><td style="vertical-align: top;">Alamat</td><td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$suami->alamat}}</td><td></td>
            </tr>
            <tr>
                <td>10.</td>
                <td>Status Perkawinan</td>
            </tr>
            <tr>
                <td></td>
                <td>a.&nbsp;&nbsp;Laki-laki : Jejaka, Duda atau Beristri ke..</td>
                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>b.&nbsp;&nbsp;Perempuan : Perawan, Janda</td>
                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td></td>
            </tr>
            <tr>
                <td>11.</td>
                <td>Nama Suami/Istri terdahulu</td>
                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td></td>
            </tr>
        </table>

        <p style="margin-top:10px;margin-bottom:15px;margin-left:30px;">Adalah benar anak dari perkawinan seorang pria :</p>
       
        <table style="margin-left:10px">
            <tr>
                <td>1.&nbsp;&nbsp;</td><td>Nama Lengkap dan Alias</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ayah->nama}}</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:1%;white-space: nowrap;">2.&nbsp;&nbsp;</td><td style="width:1%;white-space: nowrap;">Bin</td><td style="width:1%;white-space: nowrap;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ayah->bin}}</td><td></td>
            </tr>
            <tr>
                <td>3.&nbsp;&nbsp;</td><td>Nomor Induk Kependudukan (NIK)</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ayah->nik}}</td><td></td>
            </tr>
            <tr>
                <td>4.&nbsp;&nbsp;</td><td>Tempat dan Tanggal Lahir</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ayah->tempat_lahir}},{{$ayah->tanggal_lahir}}</td><td></td>
            </tr>
            <tr>
                <td>5.&nbsp;&nbsp;</td><td>Kewarganegaraan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ayah->kewarganegaraan}}</td><td></td>
            </tr>
            <tr>
                <td>6.&nbsp;&nbsp;</td><td>Agama</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ayah->agama}}</td><td></td>
            </tr>
            <tr>
                <td>7.&nbsp;&nbsp;</td><td>Pekerjaan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ayah->pekerjaan}}</td><td></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">8.&nbsp;&nbsp;</td><td style="vertical-align: top;">Alamat</td><td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ayah->alamat}}</td><td></td>
            </tr>
        </table>
        <div>
            <p>Dengan seorang wanita :</p>
        </div>
        <table style="margin-left:10px">
            <tr>
                <td>1.&nbsp;&nbsp;</td><td>Nama Lengkap dan Alias</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ibu->nama}}</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:1%;white-space: nowrap;">2.&nbsp;&nbsp;</td><td style="width:1%;white-space: nowrap;">Bin</td><td style="width:1%;white-space: nowrap;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ibu->bin}}</td><td></td>
            </tr>
            <tr>
                <td>3.&nbsp;&nbsp;</td><td>Nomor Induk Kependudukan (NIK)</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ibu->nik}}</td><td></td>
            </tr>
            <tr>
                <td>4.&nbsp;&nbsp;</td><td>Tempat dan Tanggal Lahir</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ibu->tempat_lahir}},{{$ibu->tanggal_lahir}}</td><td></td>
            </tr>
            <tr>
                <td>5.&nbsp;&nbsp;</td><td>Kewarganegaraan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ibu->kewarganegaraan}}</td><td></td>
            </tr>
            <tr>
                <td>6.&nbsp;&nbsp;</td><td>Agama</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ibu->agama}}</td><td></td>
            </tr>
            <tr>
                <td>7.&nbsp;&nbsp;</td><td>Pekerjaan</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ibu->pekerjaan}}</td><td></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">8.&nbsp;&nbsp;</td><td style="vertical-align: top;">Alamat</td><td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                <td>{{$ibu->alamat}}</td><td></td>
            </tr>
        </table>
    </div>

    <div>
        Demikian surat pengantar ini dibuat dengan mengingat sumpah jabatan dan untuk dipergunakan sebagaimana mestinya.
    </div>

    <div class="col-sm-6" style="float:right;text-align:center;font-size:11pt;">
        Palembang,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2021<br>
        <b>LURAH KALIDONI KOTA PALEMBANG</b> <br><br><br>
        <b>{{$ttd->name}}</b> <br>
        <b>NIP. {{$ttd->nip}}</b>
    </div>

</div>
    
</body>
</html>