@extends('dashboard.Master')

@section('content')
    

        <form action="{{route('post.store')}}" method="POST">

           @include('dashboard.post._form')
        
        </form>

    
@endsection

