@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <form class="form-horizontal" method="POST" action="{{ url('todo') }}" accept-charset="UTF-8">
  {{ csrf_field() }}
    <div class="box-body">
      <div class="form-group">
        <div class="col-sm-4">
            <input type="text" class="form-control col-sm-4" id="Fax" placeholder="todo" name="todo">
        </div>
        <button type="submit" class="btn btn-primary col-sm-2">Simpan</button>
      </div>
    </div>
  </form>
                </div>

                <div class="panel-body">
                    <table class="table">
    <thead>
      <tr>
      </tr>
    </thead>
    <tbody>
        @foreach($todo as $list)
      <tr>
        <td>{{$list->kebutuhan}} 
            <a href="{{ url('todo/update/'.$list->id) }}"><span class="glyphicon glyphicon-minus"></span></a> 
            <a href="{{ url('todo/delete/'.$list->id) }}"><span style="color: red; font-style: bold;">X</span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
