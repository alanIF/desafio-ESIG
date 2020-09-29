@extends('layout.app')
@section('content')
<table class="table  table-hover">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
@foreach ($tasks as $t)
    <tr>
        <td>{{$t->name}}</td>
        <td>{{$t->situation}}</td>
        <td>
        <a  class="btn btn-warning"  href="{{route('tasks.edit', $t->id)}}">Atualizar</a>
            <form action="{{route('tasks.delete', $t->id)}} " method="POST">   
                @csrf
                @method("DELETE")
                <button class="btn btn-danger" type="submit">Deletar</button>
             </form>

        </td>
    </tr>
    
@endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"><a class="btn btn-primary" href="{{route('tasks.create')}}">Cadastrar</a>
            </td>
        </tr>
        <tr>
            <td colspan="3">{!! $tasks->links() !!}</td>
            </tr>
    </tfoot>
</table>
@endsection
