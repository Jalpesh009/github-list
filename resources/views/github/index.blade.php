@extends('layout.app')

@section('content')

<div class="container">
      <table class="table table-striped">
         <thead>
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
         </tr>
         </thead>
         <tbody>
            @foreach($repo as $user)
            <tr>
               <td>{{ $user['id'] }}</td>
               <td>{{ $user['name']}}</td>
               <td>{{ $user['default_branch']}}</td>
            </tr>
            @endforeach
         </tbody>
      
      </table>
   </div>

@endsection
