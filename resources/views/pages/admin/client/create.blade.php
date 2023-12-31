@extends('layouts.layout_admin')

@section('title')
    Create client
@endsection

@section('content')
    <a href="{{ route('admin.client.index') }}" type="button" class="mb-3 btn btn-primary ">
        Kembali
    </a>

    <div class="row">
        <div class="col-md-12">
            <div class="mb-4 card">
                <h5 class="card-header">Create client</h5>

                <hr class="my-0" />
                <div class="card-body">
                    <form action="{{ route('admin.client.store') }}" id="formAccountSettings" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="mb-3 col-md-12">
                                <label for="formFile" class="form-label @error('file') is-invalid @enderror">Upload
                                    Foto</label>
                                <input class="form-control" type="file" id="formFile" name="file"
                                    value="{{ old('file') }}" />
                                @error('file')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
