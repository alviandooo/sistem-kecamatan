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
                {data: 'nama',name:'nama'},
                {data: 'agama',name:'agama'},
                {data: 'pekerjaan',name:'pekerjaan'},
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
                    $("#edit-nik").val(response.nik);
                    $("#edit-nama").val(response.nama);
                    $("#edit-tempat_lahir").val(response.tempat_lahir);
                    $("#edit-tanggal_lahir").val(response.tanggal_lahir);
                    $("#edit-alamat").val(response.alamat);
                    $("#edit-agama").val(response.agama);
                    $("#edit-pekerjaan").val(response.pekerjaan);
                    $("#edit-jenis_kelamin").val(response.jenis_kelamin);
                    $("#edit-kewarganegaraan").val(response.kewarganegaraan);

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
                    $("#form-add-data").reset();
                    
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
                    $('#form-edit-data').reset();
                    $("#form-edit-data").reset();

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
                    $("#form-edit-data").reset();

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