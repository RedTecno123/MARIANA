<title>Agregar Auto</title>

<form action="{{ url('/auto')}}" method="post" enctype="multipart/form-data">
@csrf
@include('auto.form',['modo'=>'Crear'])


</form>