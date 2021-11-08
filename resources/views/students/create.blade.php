@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>
     
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
     
<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nis:</strong>
                <input type="text" name="nis" class="form-control" placeholder="NIS" autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama" autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Rombel:</strong>
          <select class="form-control" name="rombel">
              @foreach($rombel as $Rombel)
              <option value="{{$Rombel->rombel}}">{{$Rombel->rombel}}</option>
              @endforeach
          </select>
      </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Rayon:</strong>
          <select class="form-control" name="rayon">
              @foreach($rayon as $Rayon)
              <option value="{{$Rayon->rayon}}">{{$Rayon->rayon}}</option>
              @endforeach
          </select>
      </div>
  </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="radio" name="ket" value="Hadir"> Hadir
                <input type="radio" name="ket" value="Sakit"> Sakit
                <input type="radio" name="ket" value="Ijin"> Ijin
                <input type="radio" name="ket" value="Alfa"> Alfa
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection