@extends('layouts.admin')

@section('content')
    <div class="container-fluid" >
        <table class="table">
          <thead class="thead-inverse" style="background-color:#373a3c; color:white;">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Purpose</th>
              <th>Date</th>
              <th>Modify</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
               @foreach ($ingredients as $ingredient)
                <tr>
                  <th scope="row">{{ $ingredient->id }}</th>
                  <td>{{ $ingredient->name }}</td>
                  <td>{{ App\Ingredient_to_recipe::where('ingredient_id',$ingredient->id)->count() }}</td>
                  <td>{{ date('d-m-Y',strtotime($ingredient->created_at)) }}</td>
                  <td><a class="btn btn-warning pull" href="{{ route('ingredient.edit', ['id' => $ingredient->id]) }}">Modify</a></td>
                  <td>{{ Form::open(['route' => ['ingredient.destroy', $ingredient->id], 'method' => 'delete', 'class' => 'delete-ingredient']) }}
                     <button class="btn btn-danger pull" type="submit">Delete</button>
                      {{ Form::close() }}
                  </td>
                </tr>
               @endforeach
          </tbody>
      </table>
        {!! $ingredients->render() !!}
        <div class="row">
        	    <div class="col-sm-12">
				<h3>Add an Ingredient</h3>
				</div>
				{!! Form::open(['method'=>'POST','id'=>'ingredient_create_form', 'name'=>'create_ingredient','route' => array('ingredient.store'),'enctype' => 'multipart/form-data']) !!}
       			 <div class="form-group col-sm-4">
       			     <div class="col-sm-12">
           			 	 <label class="control-label font-15-b" for="title">Nome: </label>
            			 <input type="text" class="form-control"  name="name"  placeholder="Name" required><br>
        			 </div>
        			
        			 <div class="col-sm-4">
        			     <br>
        			     {!! Form::submit('Add', ['id'=>'add_ingredient','class' => 'btn btn-primary  ']) !!}
        			 </div>
			</div>
    </div>
  
    
@endsection