@extends('template.index')

@section('title', 'Halaman Siswa')

@section('main')
	<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Siswa</a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Halaman Siswa</div>
        <div class="card-body">
          <h1>Halaman Siswa</h1>
        </div>
      </div>
    </div>
@stop

@section('footer')
	@include('template.footer')
@stop