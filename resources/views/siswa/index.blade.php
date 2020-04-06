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
          <i class="fa fa-table"></i> Halaman Siswa
          <p>Jumlah Siswa : {{ $jml_siswa }}</p>
          <a href="{{ url('siswa/create') }} " >
            <button type="button" class="btn btn-circle btn-danger">Tambah Data</button>
          </a>
        </div>
          
        <div class="card-body">
          <div class="table-responsive">            
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>Nama Depan Siswa</th>
                  <th>Tanggal Lahir</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($siswa_list as $anak)
                <tr>
                  <td>{{ $anak->id_siswa }}</td>
                  <td>{{ $anak->nisn }}</td>
                  <td>{{ $anak->nama_depan }}</td>
                  <td>{{ $anak->nama_akhir }}</td>
                  <td>{{ $anak->tempat_lahir }}</td>
                  <td>{{ $anak->tanggal_lahir }}</td>
                  <td>
                    <a href="{{ url('siswa/'.$anak->id_siswa) }}" >
                      <button type="button" class="btn btn-circle btn-primary">Detail</button>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@stop

@section('footer')
	@include('template.footer')
@stop