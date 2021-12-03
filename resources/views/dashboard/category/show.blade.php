@extends('dashboard.Master')

@section('content')
    

            <div class="form-group">
                <label for="title">Titulo</label>
                <input readonly class="form-control" type="text" name="title" id="title" value="{{$p->title}}">

                @error('title')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            

            <div class="form-group">
                <label for="url_clean">Url Limpia</label>
                <input readonly class="form-control" type="text" name="url_clean" id="url_clean" value="{{$p->url_clean}}">
            </div>
            
    
@endsection

