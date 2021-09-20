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
        <li><a class="app-menu__item active" href="/home"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="/magang"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data</span></a></li>
        <li><a class="app-menu__item" href="/formulir"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Formulir</span></a></li>
      </ul>
    </aside>
@endsection
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      
<div class="col-md-100 col-lg-100">
    <div class=" shadow">
    <div class="widget-small primary coloured-icon"><i class="icon fa fa-user fa-003"></i>
        <div class="card-body">
            <div class="row ">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="/magang"  style="text-decoration: none; color: inherit;">Jumlah siswa magang</a> </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlahdatamagang}}</div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
    </main>
@endsection
