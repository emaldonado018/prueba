@extends('dashboard.Master')

@section('content')
    

        <form action="{{route('category.store')}}" method="POST">

           @include('dashboard.category._form')
        
        </form>

    
@endsection

