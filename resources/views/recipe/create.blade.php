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
				<h1>Create a Recipe</h1>
				{!! Form::open(['method'=>'POST','id'=>'recipe_form', 'name'=>'create_recipe','route' => 'recipe.store','enctype' => 'multipart/form-data']) !!}
       			 <div class="form-group col-sm-8">
       			 	 <div class="col-sm-4">
       			 	  <label class="control-label" for="title">Title</label>
        			 <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
        			 </div>
        			 <div class="col-sm-4">
        			   <label class="control-label" for="caregory">Categories</label>
						  
						    <select id="category" name="category" class="form-control">
						    	@foreach ($categories as $category)
						    	<option value="{{$category->id}}">{{ucfirst($category->name)}}</option>
						      	@endforeach
						    </select>
					</div>
					<div class="col-sm-4">
        			   <label class="control-label" for="difficult">Difficulity Level&agrave;</label>
						  
						    <select id="difficult" name="difficult" class="form-control">
						      <option value="facile">Easy</option>
						      <option value="medio">Medium</option>
						      <option value="difficile">Difficult</option>
						    </select>
					</div>
					<div class="form-group col-sm-12">
						<label class="control-label" for="description">Describe Recipe</label>
					 <textarea class="form-control" rows="8" id="description" name="description" required></textarea>
					 </div>
										
					  <div class="col-sm-12" >
					  	
					  	<label class="control-label" for="title">List Ingredients</label>


						<input type="text" class="form-control" id="ingredient" name="ingredient" placeholder="Ingredients">
						<p id="ingredients"></p>
					  </div>
					  
					    
					 <div class="form-group col-sm-12">
					 	<label class="control-label" for="imageToUpload">Image</label>
					 	  <input  type="file" name="imageToUpload" id="imageToUpload">

					  {!! Form::submit('Create', ['id'=>'submit','class' => 'btn btn-primary col-sm-2 pull-right ']) !!}
					  <span class="validate">*Title Required!</span>
					 <h6 class="pull-right counter">Number of Characters: 6000</h6>
					 </div>
					 
				 </form>
					 
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					
				

				</div>
			</div>
		</div>
		
@endsection

