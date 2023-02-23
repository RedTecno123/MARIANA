<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">



<nav class="flex py-3 bg-blue-500 text-white">
    <div class="w-1/3 px-20 mr-auto">
        <p class="text-2xl font-bold">CarRental<sup>UT</sup></p>
    </div>
</nav>

<div class="bg-gray-100">

<h1 class="text-2xl ml-20 py-2">{{ $modo}} auto</h1>

<div class="w-12 w-full px-20 mb-6 md:mb-0 mx-auto">
<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" for="Marca"> Marca </label>
<input type="text" class="appearance-none block w-full bg-indigo-50 text-gray-700 border border-blue-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Marca" value="{{ isset($auto->Marca)?$auto->Marca:''}}" id="Marca">
</div>

<div class="w-full px-20 mb-6 md:mb-0 mx-auto">
<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" for="Modelo"> Modelo </label>
<input type="text" class="appearance-none block w-full bg-indigo-50 text-gray-700 border border-blue-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Modelo" value="{{ isset($auto->Modelo)?$auto->Modelo:''}}" id="Modelo"> 
</div>

<div class="w-full px-20 mb-6 md:mb-0 mx-auto">
<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" for="Año"> Año </label>
<input type="text" class="appearance-none block w-full bg-indigo-50 text-gray-700 border border-blue-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Año" value="{{ isset($auto->Año)?$auto->Año:''}}" id="Año"> 
</div>

<div class="w-full px-20 mb-6 md:mb-0 mx-auto">
<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" for="Tipo"> Tipo </label>
<input type="text" class="appearance-none block w-full bg-indigo-50 text-gray-700 border border-blue-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Tipo"  value="{{ isset($auto->Tipo)?$auto->Tipo:''}}" id="Tipo">
</div>

<div class="w-full px-20 mb-6 md:mb-0 mx-auto">
<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" for="Transmicion"> Transmicion </label>
<input type="text" class="appearance-none block w-full bg-indigo-50 text-gray-700 border border-blue-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Transmicion" value="{{ isset($auto->Transmicion)?$auto->Transmicion:''}}" id="Transmicion"> 
</div>

<div class="w-full px-20 mb-6 md:mb-0 mx-auto">
<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" for="Precio"> Precio </label>
<input type="text" class="appearance-none block w-full bg-indigo-50 text-gray-700 border border-blue-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Precio" value="{{ isset($auto->Precio)?$auto->Precio:''}}" id="Precio">
</div>

<div class="w-full px-20 mb-6 md:mb-0 mx-auto">
<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" for="Estado"> Estado </label>
<input type="text" class="appearance-none block w-full bg-indigo-50 text-gray-700 border border-blue-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Estado" value="{{ isset($auto->Estado)?$auto->Estado:''}}" id="Estado"> 
</div>



<div class="w-full px-20 mb-6 md:mb-0 mx-auto">
<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" for="Foto"> Foto </label>
 @if(isset($auto->Foto))
 <img class="img-thumbbail img-fluid" src="{{ asset('storage').'/'.$auto->Foto}}" width="100" alt="">
 @endif
<input type="file" class="appearance-none block w-full bg-indigo-50 text-gray-700 border border-blue-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Foto" value="" id="Foto"> 
</div>

<input class="ml-20 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" value="{{ $modo}} datos"> 

<a class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{ url('auto/')}}">Regresar</a>
<br>

</div>

