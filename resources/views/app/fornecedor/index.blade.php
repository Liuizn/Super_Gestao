<h3>fornecedor</h3>

{{-- Comentario Blade --}}

{{-- IF/ELSE estrutura --}}
@if (count($fornecedor) >= 1 && count($fornecedor) <= 9)
    <h3>Existem 1 ou 9 fornecedores</h3>
@elseif(count($fornecedor) >= 10)
    <h3>Existem 10 ou mais fornecedores listados</h3>
@else
    <h3>Não existem fornecedores listados</h3>
@endif

{{-- IF caso a condição dê negativo --}}
@unless (count($fornecedor) > 22)
    <h3>Temos menos de 22 fornecedores listados</h3>
@endunless

{{-- verificando se o parametro foi passado --}}
@isset($fornecedor)
    <h3>Existem fornecedores listados</h3>
@endisset

{{-- verificando se o parametro não foi passado --}}
@empty($clientes)
    <h3>Não temos clientes listados</h3>
@endempty

