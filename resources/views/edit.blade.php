<a href="{{route('index')}}">Volver</a>
<form   method="POST" action="{{route('update',['user'=>$user])}}">
    @method("PUT")
    @csrf
    <label> Nombre:</label>
    <input type="text" name="name" value="{{$user->name}}"
    {{$user->name}}


    <labeL> Apellido:</labeL>
    <input type="text" name="lastname" value="{{$user->lastname}}"/>


    <labeL> Edad:</labeL>
    <input type="number" name="age" value="{{$user->age}}"/>


    <input type="submit" value="Update"/>
</form>
