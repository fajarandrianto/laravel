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
<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
              <table id="example" class="display" style="width:100%">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Asal sekolah</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">No.Telp siswa</th>
      <th scope="col">Nama pembimbing</th>
      <th scope="col">No.Telp pembimbing</th>
      <th scope="col">Mulai magang</th>
      <th scope="col">Akhir magang</th>
      <th scope="col">divisi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    @php
    $no=1;
    @endphp
    @foreach ($data as $index => $magang)
    <tr>
      <th scope="magang">{{ $index + $data->firstItem()}}</th>
      <td>{{$magang->nis}}</td>
      <td>{{$magang->nama}}</td>
      <td>{{$magang->jurusan}}</td>
      <td>{{$magang->asal_sekolah}}</td>
      <td>
        @if($magang->jenis_kelamin == '1')
        Laki-laki
        @elseif($magang->jenis_kelamin == '2')
        Perempuan
        @endif
      </td>    
      <td>{{$magang->telp_siswa}}</td>
      <td>{{$magang->napem}}</td>
      <td>{{$magang->telp_pem}}</td>
      <td>{{$magang->mulai}}</td>
      <td>{{$magang->akhir}}</td>
      <td>
          @if($magang->divisi== '1')
          Multimedia
          @elseif($magang->divisi=='2')
          Rekayasa Perangkat Lunak
          @endif
       </td>
      <td class="text-center">
        <form action="{{route('delete.magang',$magang->id)}}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus bagian ini?');"><i class="fa fa-trash"></i></button>
        </form>
        <a href={{"edit/".$magang['id']}} class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      </td>
    </tr>
    
</td>
</td>
    </tr>
  @endforeach
    
  </tbody>
</table>
{{ $data->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
</main>
@endsection
