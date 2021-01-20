@extends('layouts.master')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Pengajuan Diterima</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pditerima}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengajuan Ditolak
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$pditolak}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pengajuan Pending</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pdipending}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr style="padding-bottom:15px;">

<div class="">

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        @if(Auth::user()->role == 1 or Auth::user()->role == 0)
            <button id="btn-add-pengajuan" class="btn btn-primary"><i class="bi bi-plus-square"></i></button>
        @endif
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="table-pengajuan" width="100%">
            <thead>
                <tr>
                    <th style="display:none"></th>
                    <th></th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>No. Pengajuan</th>
                    <th>NIK</th>
                    <th>Jenis</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th style="display:none"></th>
                    <th></th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>No. Pengajuan</th>
                    <th>NIK</th>
                    <th>Jenis</th>
                </tr>
            </tfoot>
            <tbody>
                
            </tbody>
        </table>
    </div>
    </div>
    </div>
    
</div>

@include('admin.pengajuan.form-add-pengajuan')
@include('admin.pengajuan.form-edit-pengajuan')
@include('admin.pengajuan.form-ttd-pdf')

@endsection

@push('js')

<script>
        var tb;
    $(document).ready( function () {
        tb = $('#table-pengajuan').DataTable({
            serverSide: true,
            method : "GET",
            ajax: {
                url: "{{route('pengajuan.data')}}",
            },
            columns: [
                {data: 'id',name:'id',visible:false,searchable:false},
                {data: '',name:'',orderable: false, searchable: false,
                    render:function(a,b,c,d){
                        if(c.status_pengajuan == 4){
                            return '<div class="btn-group"><button class="btn btn-secondary btn-sm" id="btn-edit-pengajuan"><i class="bi bi-pencil-square"></i></button><button class="btn btn-success btn-sm" id="btn-print-pengajuan"><i class="bi bi-pencil-square"></i></button></div>';
                        }else{
                            return '<div class="btn-group"><button class="btn btn-secondary btn-sm" id="btn-edit-pengajuan"><i class="bi bi-pencil-square"></i></button></div>';
                        }
                    }
                },
                {data: 'status_pengajuan',name:'status_pengajuan', 
                    render:function(a,b,c,d){
                        if(c.status_pengajuan == 1){
                            return 'Waiting';
                        }else if(c.status_pengajuan == 1){
                            return 'Acc 1';
                        }else if(c.status_pengajuan == 2){
                            return 'Acc 2';
                        }else if(c.status_pengajuan == 3){
                            return 'Acc 3';
                        }else if(c.status_pengajuan == 4){
                            return 'Diterima';
                        }else if(c.status_pengajuan == 0){
                            return 'Ditolak';
                        }
                    }
                },
                {data: 'tanggal_pengajuan',name:'tanggal_pengajuan'},
                {data: 'no_pengajuan',name:'no_pengajuan'},
                {data: 'nik',name:'nik'},
                {data: 'jenis_pelayanan',name:'jenis_pelayanan'},
                
            ] 
            
            
        });

        $('select#select2nik').select2({
            allowClear: true,
            dropdownParent: $("#modal-add-pengajuan"),
            placeholder: 'Masukkan NIK',
            minimumInputLength: 1,
            ajax: {
            url: '{{route("data.select2")}}',
            dataType: 'json',
            data: function (params) {
                return {
                q: $.trim(params.term),
                page: params.page || 1
                };
            },
            processResults: function (data) {
                data.page = data.page || 1;
                return {
                results: data.items.map(function (item) {
                    return {
                    id: item.nik,
                    text: item.nik
                    };
                }),
                pagination: {
                    more: data.pagination
                }
                }
            },
            cache: true
            }
        });

        $('select#select2ttd').select2({
            allowClear: true,
            dropdownParent: $("#modal-ttd-pdf"),
            placeholder: 'Pilih Penanda Tangan',
            minimumInputLength: 1,
            ajax: {
            url: '{{route("users.select2")}}',
            dataType: 'json',
            data: function (params) {
                return {
                q: $.trim(params.term),
                page: params.page || 1
                };
            },
            processResults: function (data) {
                data.page = data.page || 1;
                return {
                results: data.items.map(function (item) {
                    return {
                    id: item.id,
                    text: item.name
                    };
                }),
                pagination: {
                    more: data.pagination
                }
                }
            },
            cache: true
            }
        });

        $('#table-pengajuan tbody').on('click', '#btn-edit-pengajuan', function () {
            $('#modal-edit-pengajuan').modal('show');
            console.log(tb.row($(this).parents('tr')).data().id);
            $("#id-pengajuan").val(tb.row($(this).parents('tr')).data().id);
            $("#nik-edit").val(tb.row($(this).parents('tr')).data().nik);
            $("#tanggal_pengajuan_edit").val(tb.row($(this).parents('tr')).data().tanggal_pengajuan);
            $("#jenis-pelayanan-edit").val(tb.row($(this).parents('tr')).data().jenis_pelayanan);
            
        });

        $('#table-pengajuan tbody').on('click', '#btn-print-pengajuan', function () {
            $('#modal-ttd-pdf').modal('show');
            $("#id-pdf").val(tb.row($(this).parents('tr')).data().id);
            // $("#nik-edit").val(tb.row($(this).parents('tr')).data().nik);
            // $("#tanggal_pengajuan_edit").val(tb.row($(this).parents('tr')).data().tanggal_pengajuan);
            // $("#jenis-pelayanan-edit").val(tb.row($(this).parents('tr')).data().jenis_pelayanan);
            
        });
  
        $('#btn-approve-pengajuan').click(function () {
            // function button approve pengajuan
            $.ajax({
                type: "POST",
                url: "{{route('pengajuan.update')}}",
                data: {
                    "id" : $("#id-pengajuan").val(),
                    "_token": "{{ csrf_token() }}",
                    "type" : "1"
                },
                dataType: 'json',
                success :function(response) {
                    $('#modal-edit-pengajuan').modal('hide');
                    Swal.fire({
                        title: 'Success',
                        text: 'Data berhasil diubah!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    })

                    $('#table-pengajuan').DataTable().ajax.reload()
                },
                error: function(e) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Data gagal diubah!',
                        icon: 'error',
                        confirmButtonText: 'Kembali'
                    })
                }
                
            });
        });

        $('#btn-tolak-pengajuan').click(function () {
            // function button approve pengajuan
            $.ajax({
                type: "POST",
                url: "{{route('pengajuan.update')}}",
                data: {
                    "id" : $("#id-pengajuan").val(),
                    "_token": "{{ csrf_token() }}",
                    "type" : "3"
                },
                dataType: 'json',
                success :function(response) {
                    $('#modal-edit-pengajuan').modal('hide');
                    Swal.fire({
                        title: 'Success',
                        text: 'Data berhasil diubah!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    })

                    $('#table-pengajuan').DataTable().ajax.reload()
                },
                error: function(e) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Data gagal diubah!',
                        icon: 'error',
                        confirmButtonText: 'Kembali'
                    })
                }
                
            });
        });

        $('#btn-ubah-pengajuan').click(function () {
            // function button ubah pengajuan
            console.log("test");
        });

        $('#btn-add-pengajuan').click(function () {
            $('#modal-add-pengajuan').modal('show');
        });

        $('#btn-save-pengajuan').click(function () {
        $.ajax({
            type: "POST",
            url: "{{route('pengajuan.store')}}",
            data: $("#form-add-pengajuan").serialize(),
            dataType: 'json',
            success :function(response) {
                $('#modal-add-pengajuan').modal('hide');
                Swal.fire({
                    title: 'Success',
                    text: 'Data berhasil disimpan!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                })

                $('#table-pengajuan').DataTable().ajax.reload()
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