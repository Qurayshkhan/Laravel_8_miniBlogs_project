<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>
<div class="container mt-5 bg-light">
   <b>Create Post</b>
    <form action="" method="POST">

@csrf
@method('PUT')

<div class="mb-3 mt-3">
    <label for="Title" class="form-label text-light">Title</label>
    <input type="text"  name="title" class="form-control" id="" placeholder="Enter Blog Title">
  </div>
  <div class="mb-3">
    <label for="Description" class="form-label text-light">Description</label>
    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3" placeholder="Add Description"></textarea>

    <button type="submit" name="submit" class="btn btn-primary mt-4 mb-1">Post</button>
  </div>

   </form>

    @if (session()->has('status'))
    <div class="container mt-4 alert alert-success">
    {{session('status')}}
      </div>
@endif
 

</div>
</x-app-layout>

