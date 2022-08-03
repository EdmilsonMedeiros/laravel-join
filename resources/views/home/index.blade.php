<br>Usuários<br>
@foreach ($usuarios as $usuarios)
    <p>{{ $usuarios }}</p>
@endforeach

<br>Endereços:<br>
@foreach ($enderecos as $enderecos)
    <p>{{ $enderecos }}</p>
@endforeach

<br>Tipos:<br>
@foreach($tipos_usuario as $tipos_usuario)
    <p>{{ $tipos_usuario }}</p>
@endforeach