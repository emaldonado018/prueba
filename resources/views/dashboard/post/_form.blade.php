
            @csrf

            <div class="form-group">
                <label for="title">Titulo</label>
                <input class="form-control" type="text" name="title" id="title" value="{{old('title',$post->title)}}">

                @error('title')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            

            <div class="form-group">
                <label for="url_clean">Url Limpia</label>
                <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{old('url_clean',$post->url_clean)}}">
            </div>

            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" id="category_id" name="category_id">
                    @foreach ($categories as $title =>$id)
                        <option value="{{$id}}">{{$title}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="posted">Posted</label>
                <select class="form-control" id="posted" name="posted">
                    @include('dashboard.partials.opcion-yes-not')
                </select>
            </div>





            <div class="form-group">
                <label for="content">Url Limpia</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{old('content',$post->content)}}</textarea> 

                @error('content')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>

            <input type="submit" class="btn btn-outline-success" value="ENVIAR">
 
