<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @yield('css')
</head>
<body>
    <div class="container-fluid" style="margin-top:0px;">
        <div class="row">
            <!-- Logo -->
            <div class="col-md-3" style="">
                <img src="{{asset('/image/LOGO_KOTA_PALEMBANG.png')}}" width="70px;" height="80px;">
            </div> 

            <!-- Header -->
            <div class="col-md-9">
                <center>
                    <h6 style="font-size:12pt;">PEMERINTAH KOTA PALEMBANG <br> KECAMATAN KALIDONI</h6>
                    <h4 style="margin-top:-5px;">KANTOR LURAH KALIDONI</h4>
                    <h6 style="font-size:10pt; margin-top:-10px;">Jl. Letkol. H.M. Effendi, No.01 Rt. 34 Rw. 07 Palembang 30118</h6>
                </center>
            </div>
        </div>

        <hr style="border-top: 3px solid #8c8b8b; border-bottom: 5px solid #fff; margin-top:-70px;">

        @yield('content')

    </div>

</body>
</html>