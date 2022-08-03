<br>Usuários<br>
@foreach ($usuarios as $usuarios)
    {{ $usuarios }}
@endforeach

<br>Endereços:<br>
@foreach ($enderecos as $enderecos)
    {{ $enderecos }}
@endforeach

<br>Tipos:<br>
@foreach($tipos_usuario as $tipos_usuario)
    <p>{{ $tipos_usuario['tipo']."-".$tipos_usuario['id'] }}</p>
@endforeach