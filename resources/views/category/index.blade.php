@extends('layout.main')

@section('content')
<section class="card">
  <h3 class="card-header bg-light">Categories</h3>
  <div class="card-body">
    <div class="table-responsive">
      
    <table class="table table-sm">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
        </tr>
      </thead>

      <tbody>
        @foreach($categories as $category)
        <tr>
          <td class="bg-warning">{{ $category->name }}</td>
          <td class="bg-danger">{{ $category->description }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
      
    </div>
  </div>
</section>
@endsection