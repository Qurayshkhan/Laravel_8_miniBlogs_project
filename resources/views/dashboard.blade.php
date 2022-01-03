<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session()->has('status_update'))
            <div class="alert alert-success">
                {{session('status_update')}}
            </div>
        @endif
        @if (session()->has('delete'))
            <div class="alert alert-danger">
                {{session('delete')}}
            </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table text-center">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">User</th>
                            <th scope="col">Body</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->body}}</td>
                               
                                    @can('isAdmin')
                                    <td>   
                                        <a href="{{url('/post/edit',$post->id)}}"><button class="btn btn-primary">Edit</button></a> || <a href="{{url('delete',$post->id)}}""><button class="btn btn-danger"> Delete</button></a></td>
                                    @endcan
                                   
                              </tr>
                         
                            @endforeach
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
