<h2>Listado de Post</h2>
<table class="table" >
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th collspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->titulo}}</td>
            <td>{{$post->body}}</td>
            <td>
                <button  class="btn btn-primary">
                    Editar
                </button>
            </td>
             <td>
                <button wire:click="destroy({{ $post->id }})" class="btn btn-danger">
                    Eliminar
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $posts->links() }}
