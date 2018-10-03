@extends('admin.layouts.master')

@section('content')
 <div class="main-panel">
        <div class="content-wrapper">

          <div class="card">
            <div class="card-header">
              Add Category
            </div>
            <div class="card-body">
              <form action=" {{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
               @csrf

                @include('admin.partials.message')
                
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea name="description" cols="80" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Parent Category(optional)</label>
                  <select class="form-control" name="parent_id">
                    <option value="">Please select a Parent Category</option>
                    @foreach ($main_categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
               
                 <div class="form-group">
                  <label for="image">Category Image(optional)</label>
                 <input type="file" class="form-control" name="image" id="image"  >
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
