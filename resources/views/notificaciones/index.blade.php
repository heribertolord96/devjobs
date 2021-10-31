@extends ('layouts.app')

@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10">Notificaciones</h1>

    @if(count($notificaciones) > 0)
        <ul class="max-w-md mx-auto mt-10">
            @foreach ($notificaciones as $notificacion)
                @php
                    $data = $notificacion->data
                @endphp

                <li class="p-5 border border-gray-400 mb-5">


                    <p class="mb-4">
                        Tienes un nuevo candidato en:
                        <span class="font-bold"> {{ $data['vacante'] }}</span>
                    </p>

                    <p class="mb-4">
                        Te escribió:
                        <span class="font-bold"> {{ $notificacion->created_at->diffForHumans() }}</span>
                    </p>

                    <a
                        href="{{ route('candidatos.index', ['id' => $data['id_vacante']]) }}"
                        class="bg-teal-500 p-3 inline-block text-xs font-bold uppercase text-white mb-4">
                        Ver Candidatos
                    </a>


                </li>
            @endforeach
        </ul>
    @else
        <p class="text-center mt-5"> No hay Notificaciones</p>

    @endif


@endsection
