@extends('layout.template')

<!-- START FORM -->
@section('konten')

<div class="text-center">
    <h1>Form Member</h1>
</div>

<form action='{{ url('member')}}' method='post'>
@csrf 
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{url('member')}}" class="btn btn-secondary"> Back </a>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id' value="{{ Session::get('id')}}" id="id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ Session::get('id')}}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Tipe Member</label>
            <div class="col-sm-10">
                {{-- <input type="text" class="form-control" name='type' id="type">  --}}
                <select type="text" class="form-select" aria-label="Default select example" name='type' value="{{ Session::get('id')}}" id="type">
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
