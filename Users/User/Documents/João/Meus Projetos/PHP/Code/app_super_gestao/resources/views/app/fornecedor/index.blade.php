<h3>Fornecedor</h3>

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
  <p>Existem até 10 fornecedores cadastrados</p>
@elseif(count($fornecedores) > 10)  
  <p>Existem mais que 10 fornecedores cadastrados</p>
@else
  <p>Não existem fornecedores cadastrados</p>
@endif

@isset($fornecedores)
  Fornecedor:{{ $fornecedores[0]['nome'] }}
  Status:{{ $fornecedores[0]['status']}}
  CNPJ:{{$fornecedores[0]['cnpj']}}
  <br>
  Fornecedor:{{ $fornecedores[1]['nome'] }}
  Status:{{ $fornecedores[1]['status']}}
  @isset($fornecedores[1]['cnpj' ])
    CNPJ:{{ $fornecedores[01]['cnpj' ]}}
    @empty($fornecedores[1]['cnpj'])
      - Vazio
    @endempty
  @endisset
@endisset

@unless($fornecedores[1]['status'] == 'ativo')
  <p>Fornecedor ativo</p>
@endunless
