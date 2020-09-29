@extends('layout.app')
@section('content')
<h2>Atualizar Task</h2>
<form action="{{route('tasks.update')}}" method="post">
    @csrf
    <input type="hidden" name="id"   value="{{$task->id}}"> 

    <input type="text" name="nome" id="nome" placeholder="Nome" value="{{$task->nome}}"> 
    <button class="btn btn-primary" type="submit">Atualizar </button>
    <a class="btn btn-warning" href="{{route('task.index')}}"> Voltar</a>

</form>
@endsection
