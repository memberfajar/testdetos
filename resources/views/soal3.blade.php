@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="">
                <div class="panel-heading">
                  <center>Split Chocolate</center>
                   <form class="form-horizontal" method="POST" action="{{ url('3') }}" accept-charset="UTF-8">
                  {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                        <label class="control-label col-sm-4" for="n">N</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="n" placeholder="N" name="n">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-4" for="n">M</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="m" placeholder="M" name="m">
                        </div>
                      </div>
                      <div class="box-footer">
                      <div class="col-sm-4"></div><button type="submit" class="btn btn-primary col-sm-4">Simpan</button>
                    </div>
                    </div>
                  </form> 
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

