<a href="{{ route('vacantes.index') }}"
    class="text-white text-sm uppercase font-bold p-3 {{ Request::is('vacantes') ? 'bg-green-400' : '' }} ">Ver
    vacantes</a>
<a href="{{ route('vacantes.create') }}"
    class="text-white text-sm uppercase font-bold p-3 {{ Request::is('vacantes/create') ? 'bg-green-400' : '' }}">Nueva
    vacante</a>
