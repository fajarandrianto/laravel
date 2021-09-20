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
        <li><a class="app-menu__item active" href="/magang"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data</span></a></li>
        <li><a class="app-menu__item" href="/formulir"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Formulir</span></a></li>
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
                  <form action="/edit" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">   
                   
                    <div class="form-group">
                      <label for="nis"><b>NIS</b></label>
                      <input type="number" name="nis" class="form-control" value="{{$data['nis']}}">
                      </div>
                      
                    <div class="form-group">
                      <label for="nama"><b>Nama</b></label>
                      <input type="text" name="nama" class="form-control" value="{{$data['nama']}}">
                    </div>   

                    <div class="form-group">
                      <label for="jurusan"><b>Jurusan</b></label>
                      <input type="text" name="jurusan" class="form-control" value="{{$data['jurusan']}} ">
                    </div>               

                    <div class="form-group">
                      <label for="asal_sekolah"><b>Asal sekolah</b></label>
                      <input type="text" name="asal_sekolah" class="form-control" value="{{$data['asal_sekolah']}}">
                    </div>

                    <div class="form-group">
                      <label for="Jenis_kelamin"><b>Jenis kelamin</b></label>
                      <select name="jenis_kelamin" id="Jenis_kelamin" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuanv</option>
                      </select>
                    </div>

                      <div class="form-group">
                        <label for="telp_siswa"><b>No.telp siswa</b></label>
                        <input type="number" name="telp_siswa" class="form-control" value="{{$data['telp_siswa']}}">
                      </div>

                      <div class="form-group">
                        <label label for="napem"><b>Nama pembimbing sekolah</b></label>
                        <input type="text" name="napem" class="form-control" value="{{$data['napem']}}">
                      </div>

                      <div class="form-group">
                        <label for="telp_pem"><b>No.telp pembimbing sekolah</b></label>
                        <input type="number" name="telp_pem" class="form-control" value="{{$data['telp_pem']}}">
                      </div>

                      <div class="form-group">
                        <label for="mulai"><b>Mulai magang</b></label>
                        <input type="date" name="mulai" class="form-control" value="{{$data['mulai']}}">
                      </div>

                      <div class="form-group">
                        <label for="akhir"><b>Akhir magang</b></label>
                        <input type="date" name="akhir" class="form-control" value="{{$data['akhir']}}">
                      </div>

                      <div class="form-group">
                      <label for="divisi"><b>Divisi</b></label>
                      <select name="divisi" id="divisi" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="1">Multimedia</option>
                        <option value="2">Rekayasa Perangkat Lunak</option>
                      </select>
                    </div>
                     
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                   </form>
                </div>
            </div>
</main>
@endsection
