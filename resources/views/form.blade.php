@extends('layouts.app')
<title>form練習</title>
@section('content')

 <div class="container">
     
     @if (count($errors) > 0)
         <div class="alert alert-danger">
             <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
             </ul>
         </div>
     @endif
     <form action="{{url('/send')}}" method="post">
         {{ csrf_field() }}
         <div class="form-group">
             <label>Name</label>
             <input type="text" class="form-control" name="name" value="{{old('name')}}"placeholder="name">
         </div>
         <div class="form-group">
             <label>Level</label>
             <input type="text" class="form-control" name="level" value="{{old('level')}}"placeholder="level">
         </div>
         <input type="submit" value="submit">
     </form>
 </div>
@endsection