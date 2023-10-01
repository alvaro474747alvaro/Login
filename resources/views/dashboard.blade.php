<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <form method="POST" action="{{ route('documentar') }}">      
                    <div id="Netflix">
                    <div>
                    <p>Plan estandar con anuncios elegido</p>
Ve todo lo que quieras.
Recomendaciones exclusivas para ti.
Puedes cambiar de plan o cancelar cuando quieras
Selecciona el plan que más te guste
<div>
    <p>Calidad de video</p>
    <p>Resolución</p>
    <p>Ve Netflix en tu TV, computadora, celular y tablet</p>
    <p>Descargas</p>
    <p>Precio mensual $ 99</p>
    <p>Promocion por 30 minutos cuenta gratis por tres mes</p>

    <br>

         <a href="{{ route('documentar') }}" class="font-semibold text-gray-600  ">Continuar</a>
<br>

</div>
    
                        </div>  
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
