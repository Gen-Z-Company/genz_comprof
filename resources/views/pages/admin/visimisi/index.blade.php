@extends('layouts.layout_admin')

@section('title')
    Visi Misi
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Visi Misi</h4>

    <a href="{{ route('admin.visimisi.create') }}" type="button" class="btn btn-primary mb-3 ">
        <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Tambah
    </a>

    <div class="card">
        <h5 class="card-header">Data Visi Misi</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table nowrap w-100">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    {{-- form delete --}}
    <form id="delete-form" method="post">
        @csrf
        @method('DELETE')
    </form>
@endsection

@push('scripts')
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.visimisi.index') }}",
                columns: [{
                    data: 'DT_RowIndex'
                }, {
                    data: 'visi',
                    name: 'visi'
                },{
                    data: 'misi',
                    name: 'misi'
                },{
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }, ]
            });

        });

        // fun delete
        function hapus(uuid) {

            var url = '{{ route('admin.visimisi.index') }}/' + uuid;
            $('#delete-form').attr('action', url);

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Ingin Menghapus Data Ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete-form').submit();
                }
            })

        }
    </script>
@endpush
