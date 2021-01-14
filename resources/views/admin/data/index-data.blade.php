@extends('layouts.master')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Halaman Data Penduduk</h1>
    
</div>

<div class="">

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <button id="btn-add-data" class="btn btn-primary"><i class="bi bi-plus-square"></i></button>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="table-data" width="100%">
            <thead>
                <tr>
                    <th style="display:none"></th>
                    <th></th>
                    <th>NIK</th>
                    <th>No. Kartu Keluarga</th>
                    <th>Nama</th>
                    <th>Agama</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th style="display:none"></th>
                    <th></th>
                    <th>NIK</th>
                    <th>No. Kartu Keluarga</th>
                    <th>Nama</th>
                    <th>Agama</th>
                    <th>Status</th>
                </tr>
            </tfoot>
            <tbody>
                
            </tbody>
        </table>
    </div>
    </div>
    </div>
    
</div>

@include('admin.data.form-add-data')
@include('admin.data.form-edit-data')

@endsection

@push('js')

<script>

    $(document).ready(function () {

        tb = $('#table-data').DataTable({
            serverSide: true,
            method : "GET",
            ajax: {
                url: "{{route('data.data')}}",
            },
            columns: [
                {data: 'id',name:'id',visible:false,searchable:false},
                {data: '',name:'',orderable: false, searchable: false,
                    render:function(a,b,c,d){
                        return '<div class="btn-group"><button class="btn btn-secondary btn-sm" id="btn-edit-data"><i class="bi bi-pencil-square"></i></button></div>';
                    }
                },
                {data: 'nik',name:'nik'},
                {data: 'no_kk',name:'no_kk'},
                {data: 'nama',name:'nama'},
                {data: 'agama',name:'agama',
                    render:function(a,b,c,d){
                        if(c.agama == 0){
                            return 'Lainnya';
                        }else if(c.agama == 1){
                            return 'Islam';
                        }else if(c.agama == 2){
                            return 'Kristen';
                        }else if(c.agama == 3){
                            return 'Hindu';
                        }else if(c.agama == 4){
                            return 'Budha';
                        }
                    }
                },
                {data: 'status',name:'status', 
                    render:function(a,b,c,d){
                        if(c.status == 0){
                            return 'Belum Menikah';
                        }else{
                            return 'Menikah';
                        }
                    }
                },
            ] 
            
            
        });


        $("#btn-add-data").click(function () {
            $("#modal-add-data").modal("show");
        });

        $('#table-data tbody').on('click', '#btn-edit-data', function () {
            $.ajax({
                type: "POST",
                url: "{{route('data.edit')}}",
                data: {
                    "id" : tb.row($(this).parents('tr')).data().id,
                    "_token": "{{ csrf_token() }}",
                },
                dataType: 'json',
                success :function(response) {
                    console.log(response)
                    $("#id-nik-edit").val(response.id);
                    $("#nik-edit").val(response.nik);
                    $("#kk-edit").val(response.no_kk);
                    $("#nama-edit").val(response.nama);
                    $("#tempat_lahir_edit").val(response.tempat_lahir);
                    $("#tanggal_lahir_edit").val(response.tanggal_lahir);
                    $("#alamat-edit").val(response.alamat);
                    $("#agama-edit").val(response.agama);
                    $("#status-edit").val(response.status);

                    $('#modal-edit-data').modal('show');
                    

                },
                error: function(e) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Data tidak ditemukan!',
                        icon: 'error',
                        confirmButtonText: 'Kembali'
                    })
                }
            
            });
            
                // $("#id-pengajuan").val(tb.row($(this).parents('tr')).data().id);
                // $("#nik-edit").val(tb.row($(this).parents('tr')).data().nik);
                // $("#tanggal_pengajuan_edit").val(tb.row($(this).parents('tr')).data().tanggal_pengajuan);
                // $("#jenis-pelayanan-edit").val(tb.row($(this).parents('tr')).data().jenis_pelayanan);
            
        });

        $("#btn-save-data").click(function () {
            $.ajax({
                type: "POST",
                url: "{{route('data.store')}}",
                data: $("#form-add-data").serialize(),
                dataType: 'json',
                success :function(response) {
                    $('#modal-add-data').modal('hide');
                    Swal.fire({
                        title: 'Success',
                        text: 'Data berhasil disimpan!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    })

                    $('#table-data').DataTable().ajax.reload();
                    $('form :input').val('');
                },
                error: function(e) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Silahkan periksa kembali atau data sudah ada!',
                        icon: 'error',
                        confirmButtonText: 'Kembali'
                    })
                }
            
            });
        });

        $("#btn-update-data").click(function () {
            $.ajax({
                type: "POST",
                url: "{{route('data.update')}}",
                data: $("#form-edit-data").serialize(),
                dataType: 'json',
                success :function(response) {
                    $('#modal-edit-data').modal('hide');
                    Swal.fire({
                        title: 'Success',
                        text: 'Data berhasil diubah!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    })

                    $('#table-data').DataTable().ajax.reload();
                    $('form :input').val('');
                },
                error: function(e) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Silahkan periksa kembali atau data sudah ada!',
                        icon: 'error',
                        confirmButtonText: 'Kembali'
                    })
                }
            
            });
        });

        $("#btn-delete-data").click(function () {
            $.ajax({
                type: "POST",
                url: "{{route('data.destroy')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id" : $("#id-nik-edit").val(),
                },
                dataType: 'json',
                success :function(response) {
                    $('#modal-edit-data').modal('hide');
                    Swal.fire({
                        title: 'Success',
                        text: 'Data berhasil dihapus!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    })

                    $('#table-data').DataTable().ajax.reload();
                    $('form :input').val('');
                },
                error: function(e) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Silahkan periksa kembali atau data sudah ada!',
                        icon: 'error',
                        confirmButtonText: 'Kembali'
                    })
                }
            
            });
        });

    });

</script>

@endpush