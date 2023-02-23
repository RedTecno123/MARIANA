<title>Editar Auto</title>
<form action="{{ url('/auto/'.$auto->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('auto.form',['modo'=>'Editar'])
</form>