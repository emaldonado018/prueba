@extends('dashboard.Master')

@section('content')
    
<a class="btn btn-success mt-3 mb-3" href="{{route('post.create')}}">CREAR</a>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>TITULO</td>
            <td>POSTEADO</td>
            <td>CREACION</td>
            <td>ACTUALIZACION</td>
            <td>ACCCIONES</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($posts as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->title}}</td>
            <td>{{$p->posted}}</td>
            <td>{{$p->created_at->format('d-M-y')}}</td>
            <td>{{$p->updated_at->format('d-M-y')}}</td>
            <td><a class="btn btn-primary" href="{{route('post.show',$p->id)}}">VER</a>
                <a class="btn btn-primary" href="{{route('post.edit',$p->id)}}">Actualizar</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{$p->id}}">Eliminar</button></td>
            <td> </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Seguro que desea borrar el registro?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

          <form id="formDelete" action="{{route('post.destroy',0)}}" data-action="{{route('post.destroy',0)}}" method="POST">
            @method('DELETE')
            @csrf
                <button type="submit" class="btn btn-danger">Borrar</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>



  <script>
      window.onload = function(){
            $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.


            action = $('#formDelete').attr('data-action').slice(0,-1)
            action +=id
            console.log(action);

            $('#formDelete').attr('action',action)

            var modal = $(this)
            modal.find('.modal-title').text('Borrando el POST: ' + id)
            
            })
      };

  </script>
@endsection
