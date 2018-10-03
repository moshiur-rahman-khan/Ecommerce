@extends('admin.layouts.master')

@section('content')
 <div class="main-panel">
        <div class="content-wrapper">

          <div class="card">
            <div class="card-header">
              Update Your Category
            </div>
            <div class="card-body">
              <form action=" {{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
               @csrf

                @include('admin.partials.message')
                
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Description(optional)</label>
                  <textarea name="description" cols="80" rows="10">{{ $category->name }}</textarea>
                </div>

               <div class="form-group">
              <label for="exampleInputPassword1">Parent Category (optional)</label>
              <select class="form-control" name="parent_id">
                <option value="">Please select a Primary category</option>
                @foreach ($main_categories as $cat)
                  <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
              </select>
               </div>
               
                 <div class="form-group">
              <label for="oldimage">Category Old Image(optional)</label> <br>
              <img src="{!! asset('images/categories/'.$category->image) !!}" width="100"> <br>
              <label for="image">Category New  Image (optional)</label>
               <input type="file" class="form-control" name="image" id="image" >
            </div>

                </div>
                <button type="submit" class="btn btn-primary">Add Category</button>
              </form>
            </div>
          </div>

         </div>
      </div>
      <!-- main-panel ends --> 
@endsection
