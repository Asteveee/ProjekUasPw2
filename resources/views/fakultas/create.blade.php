@extends('layout.main')

@section('title','Halaman Tambah')
@section('subtitle','tambah')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Fakultas</h4>
                  <p class="card-description">
                    Formulir Tambah Fakultas
                  </p>
                  <form class="forms-sample" action="{{route('fakultas.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="nama_fakultas">Nama Fakultas</label>
                      <input type="text" name="nama_fakultas" class="form-control" id="nama_fakultas" placeholder="Nama Fakultas">
                      @error('nama_fakultas')
                            <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama_dekan">Nama Dekan</label>
                      <input type="text" name="nama_dekan" class="form-control" id="nama_dekan" placeholder="Nama Dekan">
                      @error('nama_dekan')
                            <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama_wakil_dekan">Nama Wakil Dekan</label>
                      <input type="text" name="nama_wakil_dekan" class="form-control" id="nama_wakil_dekan" placeholder="Nama Wakil Dekan   ">
                      @error('nama_wakil_dekan')
                            <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary me-2 btn-rounded">Submit</button>
                    <a href="{{route('fakultas.index')}}" class="btn btn-rounded btn-light"> batal</a>
                  </form>
                </div>
              </div>
            </div>
    
@endsection