@extends('layout.template')

<!-- START FORM -->
@section('konten')

<form action='{{ url('member/'.$data->id)}}' method='post'>
@csrf 
@method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{url('member')}}" class="btn btn-secondary"> Back </a>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                {{ $data->id }}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Tipe Member</label>
            <div class="col-sm-10">
                <select type="text" class="form-select" aria-label="Default select example" name='type' value="{{ $data->type }}" id="type">
                    <option selected>Select Member Type</option>
                    <option value="Silver">Silver</option>
                    <option value="Gold">Gold</option>
                    <option value="Diamond">Diamond</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Tipe Member" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
    </form>
    <!-- AKHIR FORM -->
    
@endsection
