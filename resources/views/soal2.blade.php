@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                <div class="">
                   <form class="form-horizontal" method="POST" action="{{ url('2') }}" accept-charset="UTF-8">
                    {{ csrf_field() }}
                      <div class="box-body">
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="fax">Persistance</label>
                          <div class="col-sm-4">
                              <input type="text" class="form-control" id="Fax" placeholder="persistance" name="persistance">
                          </div>
                        </div>
                        <div class="box-footer">
                        <div class="col-sm-2"></div><button type="submit" class="btn btn-primary col-sm-2">Run</button>
                      </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


