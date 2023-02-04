@extends('layout.layoutPrincipal')

@section('titulo')
    Register
@endsection

@section('contenido')
<form action="/register" method="POST">
    @csrf
<div class="col">


<div class="input-group mb-3">
<input
    type="text"
    class="form-control"
    placeholder="name"
    aria-label="name"
    aria-describedby="basic-addon1"
    name="name"
/>
@error ('name')
<p style = "color:red ">{{$message}}</p>
@enderror
</div>
<div class="input-group mb-3">
<input
    type="text"
    class="form-control"
    placeholder="Username"
    aria-label="Username"
    aria-describedby="basic-addon1"
    name="username"
/>
@error ('username')
<p style = "color:red ">{{$message}}</p>
@enderror
</div>
<div class="input-group mb-3">
<input
    type="email"
    class="form-control"
    placeholder="email"
    aria-label="email"
    aria-describedby="basic-addon1"
    name="email"
/>
@error ('email')
<p style = "color:red ">{{$message}}</p>
@enderror
</div>

<div class="input-group mb-3">
<input
    type="password"
    class="form-control"
    placeholder="Contraseña"
    aria-label="Contraseña"
    aria-describedby="basic-addon2"
    name="password"
/>
@error ('password')
    <p style = "color:red">{{$message}}</p>
@enderror
</div>

<br>
<button type="submit" class="btn btn-primary">Registrar</button>
</div>

</form>

@endsection
