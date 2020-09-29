@extends('template.app')
@section('content')
<h2>Cadastrar Nova Task</h2>

<form class="form" action="{{route('produtos.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group"> <input type="text" class="form-control"  name="nome" id="nome" placeholder="Nome" value="{{old('nome')}}"> 
     </div>
    
    <div class="form-group"> 
    <button class="btn btn-primary" type="submit">Cadastrar </button>
    </div>
</form>
@include('includes.alerts')
@endsection
