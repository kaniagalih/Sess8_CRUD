@extends('layout.template')

<!-- START FORM -->
@section('konten')

<div class="text-center">
    <h1>{{ __('form.judul') }}</h1>
</div>

<form action='{{ url('member')}}' method='post'>
@csrf 
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{url('member')}}" class="btn btn-secondary"> {{ __('form.back') }} </a>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">{{ __('form.id') }}</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id' value="{{ Session::get('id')}}" id="id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">{{ __('form.nama') }}</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ Session::get('id')}}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">{{ __('form.type') }}</label>
            <div class="col-sm-10">
                {{-- <input type="text" class="form-control" name='type' id="type">  --}}
                <select type="text" class="form-select" aria-label="Default select example" name='type' value="{{ Session::get('id')}}" id="type">
                    <option selected>{{ __('form.select') }}</option>
                    <option value="Silver">{{ __('form.sil') }}</option>
                    <option value="Gold">{{ __('form.gol') }}</option>
                    <option value="Diamond">{{ __('form.di') }}</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Tipe Member" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">{{ __('form.sub') }}</button></div>
        </div>
    </div>
    </form>
    <!-- AKHIR FORM -->
    
@endsection
