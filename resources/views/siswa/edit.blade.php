@extends('template.index')

@section('title', 'Edit Data Siswa')

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
          <i class="fa fa-table"></i> {{ $judul }}
        </div>
          
        <div class="card-body">
          <form method="post" action="{{ url('siswa/'.$siswa->id_siswa) }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id_siswa" value="{{ $siswa->id_siswa }}">
            <div class="form-group col-md-12">
                <label class="control-label">NISN :</label>
                <input type="text" name="nisn" class="form-control" style="text-transform: uppercase" placeholder="NISN" value="{{ $siswa->nisn }}" >
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Nama Depan :</label>
                <input type="text" name="nama_depan" class="form-control" style="text-transform: uppercase" placeholder="Nama Depan" value="{{ $siswa->nama_depan }}">
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Nama Akhir :</label>
                <input type="text" name="nama_akhir" class="form-control" style="text-transform: uppercase" placeholder="Nama Akhir" value="{{ $siswa->nama_akhir }}">
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" class="form-control" style="text-transform: uppercase" placeholder="Tempat Lahir" value="{{ $siswa->tempat_lahir }}">
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Tanggal Lahir :</label>
                <input type="text" name="tanggal_lahir" class="form-control" style="text-transform: uppercase" placeholder="Tanggal Lahir" value="{{ $siswa->tanggal_lahir }}">
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Jenis Kelamin :</label>
                <select class="form-control select2" select2="" name="jenis_kelamin">
                  <option value="">Select ...</option>
                  @if($siswa->jenis_kelamin == 'L')
                    <option value="L" selected="selected">Laki Laki</option>
                  @else
                    <option value="L" >Laki Laki</option>
                  @endif
                  @if($siswa->jenis_kelamin == 'P')
                    <option value="P" selected="selected">Perempuan</option>
                  @else
                    <option value="P">Perempuan</option>
                  @endif
                </select>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary btn-circle"> Simpan </button>
                <a href="{{ url('siswa') }}" >
                  <button type="button" class="btn btn-circle btn-warning">Cancel</button>
                </a>
            </div>
          </form>
        </div>
      </div>
    </div>
@stop

@section('footer')
	@include('template.footer')
@stop