@extends('layouts.layout_admin')

@section('title')
    Pesan Form Contact
@endsection

@section('content')
    <a href="{{ route('admin.contact.index') }}" type="button" class="mb-3 btn btn-primary ">
        Kembali
    </a>

    <div class="row">
        <div class="col-md-12">
            <div class="mb-4 card">
                <h5 class="card-header">Detail Data Contact</h5>

                <hr class="my-0" />
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 rounded table-bordered table-centered table-nowrap">
                            <tbody>
                                <tr>
                                    <td style="width: 15%" class="fw-bold">
                                        Nama
                                    </td>
                                    <td class="">
                                        {{ $data->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 15%" class="fw-bold">
                                        Email
                                    </td>
                                    <td class="">
                                        {{ $data->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 15%" class="fw-bold">
                                        Telepon
                                    </td>
                                    <td class="">
                                        {{ $data->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 15%" class="fw-bold">
                                        Subject
                                    </td>
                                    <td class="">
                                        {{ $data->subject }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 15%" class="fw-bold">
                                        Pesan
                                    </td>
                                    <td class="">
                                        {{ $data->message }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
