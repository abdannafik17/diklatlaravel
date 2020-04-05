@extends('template.index')

@section('title', 'Halaman About')

@section('main')
	<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">About</a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Halaman About</div>
        <div class="card-body">
          <h1>Halaman About</h1>
        </div>
      </div>
    </div>
@stop

@section('footer')
	@include('template.footer')
@stop