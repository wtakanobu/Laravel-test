@extends('layout')

@section('content')
 <h1>郵便番号検索</h1>
 <form action="yubins" method="POST" class="form-horizontal">
     {{ csrf_field() }}
     <div class="form-group">
         <label for="yubin" class="col-sm-3 control-label">郵便番号検索</label>
         <div class="col-sm-6">
             <input type="text" name="post" id="post" class="form-control">
         </div>
     </div>
     <div class="form-group">
         <div class="col-sm-offset-3 col-sm-6">
             <button type="submit" class="btn btn-default">
              <i class="fa fa-plus"></i> 検索
              </button>
         </div>
     </div>
 </form>
@endsection