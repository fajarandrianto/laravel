@extends('layouts.admin')
@section('sidebar')
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('admin/docs/images/profil.png')}}" alt="User Image" height="50px" width="50px">
    <div>
      <p class="app-sidebar__user-name">Hi Admin</p>
      <p class="app-sidebar__user-designation">Argia Academy</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item" href="/home"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li><a class="app-menu__item" href="/magang"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data</span></a></li>
    <li><a class="app-menu__item active" href="/formulir"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Formulir</span></a></li>
  </ul>
</aside>
@endsection
@section('content')
<main class="app-content">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Data Siswa Magang</div>
        <div class="card-body">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
          <form action="{{route('post.magang')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="nis"><b>NIS</b></label>
              <input type="number" name="nis" class="form-control" id="nis" value="{{ old('nis') }}">
              @if ($errors->has('nis'))
                <span class="text-danger">{{ $errors->first('nis') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama</b></label>
              <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}">
              @if ($errors->has('nama'))
                <span class="text-danger">{{ $errors->first('nama') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label for="jurusan"><b>Jurusan</b></label>
              <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{ old('jurusan') }}">
              @if ($errors->has('jurusan'))
                <span class="text-danger">{{ $errors->first('jurusan') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label for="asal_sekolah"><b>Asal sekolah</b></label>
              <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" value="{{ old('asal_sekolah') }}">
              @if ($errors->has('asal_sekolah'))
                <span class="text-danger">{{ $errors->first('asal_sekolah') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label for="Jenis_kelamin"><b>Jenis kelamin</b></label>
              <select name="jenis_kelamin" id="Jenis_kelamin" class="form-control" id="jenis_kelamin">
                <option value="">--Pilih--</option>
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
              </select>
              @if ($errors->has('jenis_kelamin'))
                <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label for="telp_siswa"><b>No.telp siswa</b></label>
              <input type="number" name="telp_siswa" class="form-control" id="telp_siswa" value="{{ old('telp_siswa') }}">
              @if ($errors->has('telp_siswa'))
                <span class="text-danger">{{ $errors->first('telp_siswa') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label for="napem"><b>Nama pembimbing sekolah</b></label>
              <input type="text" name="napem" class="form-control" id="napem" value="{{ old('napem') }}">
              @if ($errors->has('napem'))
                <span class="text-danger">{{ $errors->first('napem') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label for="telp_pem"><b>No.Telp pembimbing sekolah</b></label>
              <input type="number" name="telp_pem" class="form-control" id="telp_pem" value="{{ old('telp_pem') }}">
              @if ($errors->has('telp_pem'))
                <span class="text-danger">{{ $errors->first('telp_pem') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label for="mulai"><b>Mulai magang</b></label>
              <input type="date" name="mulai" class="form-control" id="mulai" value="{{ old('mulai') }}">
              @if ($errors->has('mulai'))
                <span class="text-danger">{{ $errors->first('mulai') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label for="akhir"><b>Akhir magang</b></label>
              <input type="date" name="akhir" class="form-control" id="akhir" value="{{ old('akhir') }}">
              @if ($errors->has('akhir'))
                <span class="text-danger">{{ $errors->first('akhir') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label for="divisi"><b>Divisi</b></label>
              <select name="divisi" id="divisi" class="form-control" id="divisi" value="{{ old('divisi') }}">
                <option value="">--Pilih--</option>
                <option value="1">Multimedia</option>
                <option value="2">Rekayasa Perangkat Lunak</option>
              </select>
              @if ($errors->has('divisi'))
                <span class="text-danger">{{ $errors->first('divisi') }}</span>
              @endif
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
</main>
@endsection