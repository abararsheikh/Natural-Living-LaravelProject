@extends('layouts.admin')

@section('content')
    <div class="container-fluid" >
        <table class="table">
          <thead class="thead-inverse" style="background-color:#373a3c; color:white;">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Date</th>
              <th>Recipe</th>
              <th>Role</th>
              <th>Modify</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
               @foreach ($users as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td><a href="{{ route('user.show', ['id' => $user->id]) }}" >{{ $user->name }}</a></td>
                  <td>{{ $user->email }}</td>
                  <td>{{ date('d-m-Y',strtotime($user->created_at)) }}</td>
                  <td>{{ App\Recipe::where('user_id',$user->id)->count() }}</td>
                  <td>@if( $user->role == 2)
                        Admin
                       @else
                        User
                       @endif
               </td>
               <td><a class="btn btn-warning pull" href="{{ route('user.edit', ['id' => $user->id]) }}">Modify</a></td>
                </tr>
               @endforeach
          </tbody>
      </table>
        {!! $users->render() !!}
        <div class="row" >
            
        </div>
    </div>
  
    
@endsection