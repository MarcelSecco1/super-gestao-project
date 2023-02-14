<h2>Fornecedores</h2>
@php $loop = 1; @endphp
@isset($fornecedor)
    @for ($i = 0; isset($fornecedor[$i]); $i++)
        <h4>Nome:</h4>{{ $fornecedor[$i]['nome'] }}
        <br>
        <h4>Status:</h4>{{ $fornecedor[$i]['status'] }}
        <br>
        <h4>CNPJ: </h4> {{ $fornecedor[$i]['cnpj'] ?? 'Isso aqui foi feito com valor padrão' }}
        <!--
        $váriavel testada não tiver definida(isset)
            ou
        $váriavel testada for igual a null
                                                
         O valor depois do ??, será utilizada no lugar campo atribuido
        -->
        <br>
        <h4>Telefone: </h4>({{ $fornecedor[$i]['ddd'] ?? '' }}) {{ $fornecedor[$i]['telefone'] ?? '' }}
    @endfor

@endisset
