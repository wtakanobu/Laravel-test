@extends('layout')

@section('content')
 <h1>郵便番号検索</h1>
 <table class="table table-striped task-table">
   <thead>
     <th>都道府県名</th><th>市区町村名</th><th>町域名</th>
   </thead>
   <tbody>
     @foreach ($postdata as $row)
     <tr>
       <td>{{ $row->pref }}</td>
       <td>{{ $row->city }}</td>
       <td>{{ $row->address }}</td>
     </tr>
     @endforeach
   </tbody>
 </table>
@endsection