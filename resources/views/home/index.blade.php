<p>Usuários/Endereço</p>

@foreach ($usuarios_enderecos as $usuarios_enderecos)
    Nome:
        {{ $usuarios_enderecos->nome}}
    @php
        echo "<br>";
    @endphp

        {{ $usuarios_enderecos->cep . ', ' . $usuarios_enderecos->rua. ', ' . $usuarios_enderecos->numero. ', ' . $usuarios_enderecos->bairro. ', ' . $usuarios_enderecos->cidade. ', ' . $usuarios_enderecos->estado}}
    @php
        echo "<br><br>";
    @endphp

@endforeach
