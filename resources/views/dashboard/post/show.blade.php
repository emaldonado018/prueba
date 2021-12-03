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
            
            <div class="form-group">
                <label for="content">Url Limpia</label>
                <textarea readonly class="form-control" name="content" id="content" cols="30" rows="10">{{$p->content}}</textarea> 

                @error('content')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>

            

    
@endsection

