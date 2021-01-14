@extends('layouts.master')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Halaman Users</h1>
    
</div>

<!-- Content Row -->
<div class="">

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <button id="btn-add-users" class="btn btn-primary"><i class="bi bi-plus-square"></i></button>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="table-users" width="100%">
            <thead>
                <tr>
                    <th style="display:none"></th>
                    <th></th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th style="display:none"></th>
                    <th></th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Jabatan</th>
                </tr>
            </tfoot>
            <tbody>
                
            </tbody>
        </table>
    </div>
    </div>
    </div>
    
</div>

@include('admin.users.form-add-users')
@include('admin.users.form-edit-users')

@endsection

@push('js')

<script>
        var tb;
    $(document).ready( function () {
        tb = $('#table-users').DataTable({
            serverSide: true,
            method : "GET",
            ajax: {
                url: "{{route('users.data')}}",
            },
            columns: [
                {data: 'id',name:'id',visible:false,searchable:false},
                {data: '',name:'',orderable: false, searchable: false,
                    render:function(a,b,c,d){
                        return '<div class="btn-group"><button class="btn btn-secondary btn-sm" id="btn-edit-users"><i class="bi bi-pencil-square"></i></button></div>';
                    }
                },
                {data: 'name',name:'name'},
                {data: 'email',name:'email'},
                {data: 'role',name:'role'},
                {data: 'jabatan',name:'jabatan'},
            ] 
            
            
        });
    } );

    $('#btn-add-users').click(function () {
        $('#modal-add-users').modal('show');
    });

    $('#table-users tbody').on('click', '#btn-edit-users', function () {
        $('#modal-edit-users').modal('show');
        $("#id-users").val(tb.row($(this).parents('tr')).data().id);
        $("#edit-nama").val(tb.row($(this).parents('tr')).data().name);
        $("#edit-email").val(tb.row($(this).parents('tr')).data().email);
        // $("#edit-jabatan").val(tb.row($(this).parents('tr')).data().jabatan);
        
    });

    // function button hapus users
    $('#btn-hapus-users').click(function () {
        $.ajax({
            type: "POST",
            url: "{{route('users.delete')}}",
            data: {
                "_token": "{{ csrf_token() }}",
                "id" : $('#id-users').val(),
            },
            dataType: 'json',
            success :function(response) {
                $('#modal-edit-users').modal('hide');
                Swal.fire({
                    title: 'Success',
                    text: 'Data berhasil dihapus!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                })

                $('#table-users').DataTable().ajax.reload()
                
            },
            error: function(e) {
                Swal.fire({
                    title: 'Error',
                    text: 'Data gagal dihapus!',
                    icon: 'error',
                    confirmButtonText: 'Kembali'
                })
            }
            
        });
    });

    // function button ubah users
    $('#btn-update-users').click(function () {
        $.ajax({
            type: "POST",
            url: "{{route('users.update')}}",
            data: $("#form-edit-users").serialize(),
            dataType: 'json',
            success :function(response) {
                $('#modal-edit-users').modal('hide');
                Swal.fire({
                    title: 'Success',
                    text: 'Data berhasil diubah!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                })

                $('#table-users').DataTable().ajax.reload()
                $('#edit-password').val('');
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

    // function button simpan users
    $('#btn-save-users').click(function () {
        $.ajax({
            type: "POST",
            url: "{{route('users.store')}}",
            data: $("#form-add-users").serialize(),
            dataType: 'json',
            success :function(response) {
                $('#modal-add-users').modal('hide');
                Swal.fire({
                    title: 'Success',
                    text: 'Data berhasil disimpan!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                })

                $('#table-users').DataTable().ajax.reload()
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


</script>

@endpush