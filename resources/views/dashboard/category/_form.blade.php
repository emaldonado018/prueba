
            @csrf

            <div class="form-group">
                <label for="title">Titulo</label>
                <input class="form-control" type="text" name="title" id="title" value="{{old('title',$category->title)}}">

                @error('title')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            

            <div class="form-group">
                <label for="url_clean">Url Limpia</label>
                <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{old('url_clean',$category->url_clean)}}">
            </div>
            
        

            <input type="submit" class="btn btn-outline-success" value="ENVIAR">
 
