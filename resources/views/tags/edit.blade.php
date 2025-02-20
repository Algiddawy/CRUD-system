@extends('layout.app')

@section('content')
    <div class="col-12">
        <h1 class="my-3 text-center">Update Tag Info</h1>
    </div>
            <div class="col-6 mx-auto"> 
                <form action="{{route('tags.update' , $tag->id)}}" class="form border p-3" method="POST">
                    @csrf
                    @include('inc.message')
                    @method('PUT')
                    <div class="mb3">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{$tag->name}}" class="form-control">
                    </div>
                    <div class="mb3">
                        <input type="submit" value="Save" class="form-control bg-success text-white">
                    </div>
                </form>


        </div>
    @endsection
