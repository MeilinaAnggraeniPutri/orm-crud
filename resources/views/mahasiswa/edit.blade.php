@extends('mahasiswa.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
        Edit Mahasiswa
        </div>
        <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
        @endif
        <form method="post" action="{{ route('mahasiswa.update', $Mahasiswa->nim) }}" id="myForm">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="nim">Nim</label>
        <input type="text" name="nim" class="form-control" id="nim" value="{{ $Mahasiswa->nim }}" aria-describedby="nim" >
        </div>
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="{{ $Mahasiswa->nama }}" aria-describedby="nama" >
        </div>
        <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" class="form-control" id="kelas" value="{{ $Mahasiswa->kelas }}" aria-describedby="kelas" >
        </div>
        <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{ $Mahasiswa->jurusan }}" aria-describedby="jurusan" >
        </div>
        <div class="form-group">
            <label for="e_mail">E-mail</label>
            <input type="text" name="e_mail" class="form-control" id="e_mail" value="{{ $Mahasiswa->e_mail }}" aria-describedby="e_mail" >
            </div>
         <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $Mahasiswa->alamat }}" aria-describedby="alamat" >
                </div>
        <div class="form-group">
                 <label for="tanggal_lahir">Tanggal Lahir</label>
                 <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $Mahasiswa->tanggallahir }}" aria-describedby="tanggal_lahir" >
                 </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
        </div>
       </div>
       @endsection
