@extends('dashboard.Master')

@section('content')
    

        <form action="{{route('post.update',$post->id)}}" method="POST">
          
           @method('PUT')
           @include('dashboard.post._form')
        
        </form>

    
@endsection

