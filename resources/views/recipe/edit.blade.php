<?php 
if(strpos(URL::previous(), 'admin')!=false && Auth::check()){
	
	if(Auth::user()->isAdmin() ){
		$var = true;
	}else{
		$var = false;
	}
}else{
	$var = false;
}
?>
@extends($var ? 'layouts/admin' : 'layouts/app') 

@section('content')
    
    	<div class="container">
			<div class="row">
				<h1>Edit the Recipe</h1>
				{!! Form::open(['method'=>'PUT','id'=>'recipe_form', 'name'=>'create_recipe','route' => array('recipe.update', $recipe->id),'enctype' => 'multipart/form-data']) !!}
       			 <div class="form-group col-sm-8">
       			     <label class="control-label" for="title"><--Looks like this</label>
       			     <div class="col-sm-8">
       			     	@if (file_exists('assets/img/recipe/'.$recipe->id.'.jpg'))
                            <img src="{{asset('assets/img/recipe/'.$recipe->id.'.jpg')}}" alt="recipe image" class="img-responsive img-thumbnail" />
                        @else
                            <img src="{{asset('assets/img/recipe/default.png')}}" alt="recipe image" class="img-responsive img-thumbnail" />
                        @endif
       			        
       			     </div>
       			     <hr>
       			 	 <div class="col-sm-4">
       			 	  <label class="control-label" for="title">Title</label>
        			 <input type="text" class="form-control" id="title" name="title" value="{{$recipe->title}}" placeholder="Title" required>
        			 </div>
        			 <div class="col-sm-4">
        			   <label class="control-label" for="caregory">Categories</label>
						  
						    <select id="category" name="category" class="form-control">
						    	@foreach ($categories as $category)
						    	<option value="{{$category->id}}" 
						    	@if($category->name == $recipe->category->name)
						    	selected
						    	@endif
						    	>{{ucfirst($category->name)}}</option>
						      	@endforeach
						    </select>
					</div>
					<div class="col-sm-4">
        			   <label class="control-label" for="difficult">Difficulty Level:&agrave;</label>
						  
						    <select id="difficult" name="difficult" class="form-control">
						      <option value="facile"
						      @if($recipe->difficult == 'easy')
						      selected
						      @endif
						      >Easy</option>
						      <option value="medium"
						      @if($recipe->difficult == 'medium')
						      selected
						      @endif
						      >Medium</option>
						      <option value="difficult"
						      @if($recipe->difficult == 'difficult')
						      selected
						      @endif
						      >Difficult</option>
						    </select>
					</div>
					<div class="form-group col-sm-12">
						<label class="control-label" for="description">Description of the recipe
						</label>
					 <textarea class="form-control" rows="8" id="description" name="description" required>{{$recipe->description}}</textarea>
					 </div>
										
					  <div class="col-sm-12" >
					  	<label class="control-label" for="title">List of the ingredients</label>

					  	<input type="text" class="form-control" id="ingredient" name="ingredient" placeholder="Ingredients" value="@foreach ($ingredients_to_recipes as $ingredient){{ $ingredient->ingredient->name.', ' }}@endforeach">
						<p id="ingredients"></p>
					  </div>
					  
					    
					 <div class="form-group col-sm-12">
					 	<label class="control-label" for="imageToUpload">Change image
						</label>
					 	  <input  type="file" name="imageToUpload" id="imageToUpload">

					  {!! Form::submit('Modify', ['id'=>'submit','class' => 'btn btn-primary col-sm-2 pull-right ']) !!}
                       
					 <h6 class="pull-right counter">
						 Number of characters : 6000</h6>
					 </div>
					 
				 </form>
				 @if (Auth::check() && Auth::id()==$recipe->user_id)
				  <div class="form-group col-sm-12">
				 {{ Form::open(['route' => ['recipe.destroy', $recipe->id], 'method' => 'delete', 'id' => 'delete-form']) }}
             		<button class="btn btn-danger pull-right" id="#delete" type="submit">Delete</button>
           		 {{ Form::close() }}
					 </div>
				 @endif
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					
					
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif

				</div>
			</div>
		</div>
		
@endsection