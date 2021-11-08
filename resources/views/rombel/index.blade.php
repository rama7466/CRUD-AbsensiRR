@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Absensi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rombel.create') }}"> Create</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Rombel</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($rombel as $rmb)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$rmb->rombel}}</td>
            <td>
                <form action="{{route('rombel.destroy',$rmb->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('rombel.edit',$rmb->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $rombel->links() !!}
        
@endsection