@extends('layouts.app')

@section('content')

<form action="{{ route('request') }}" method="post">
    @csrf
    <label>Seleccion</label>
    <select name="Seleccion" id="Seleccion">
        <option value="">SELECCIONE</option>
        <option value="A">A</option>
        <option value="B">B</option>
    </select>

    @error('Seleccion')
    <p style="color:red">{{$message}}</p>    
    @enderror
<br>
<br>
    <label>Dependientes A</label>
    <select name="SoloA" id="SoloA">
        <option value="">SELECCIONE</option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
    </select>

    @error('SoloA')
    <p style="color:red">{{$message}}</p>    
    @enderror
<br>
<br>
    <label>Dependientes B</label>
    <select name="SoloB" id="SoloB">
        <option value="">SELECCIONE</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
    </select>

    @error('SoloB')
    <p style="color:red">{{$message}}</p>    
    @enderror
<br>
<br>
    <label>NOMBRES A</label>
    <select name="NombresA" id="NombresA">
        <option value="">SELECCIONE</option>
        <option value="Armando">Armando</option>
        <option value="Alejandro">Alejandro</option>
    </select>
    @error('NombresA')
    <p style="color:red">{{$message}}</p>    
    @enderror
<br>
<br>
    <label>NOMBRES B</label>
    <select name="NombresB" id="NombresB">
        <option value="">SELECCIONE</option>
        <option value="Benito">Benito</option>
        <option value="Benjamin">Benjamin</option>
    </select>
    @error('NombresB')
    <p style="color:red">{{$message}}</p>    
    @enderror
<br>
<br>

    <button type="submit">Enviar</button>
</form>

@endsection