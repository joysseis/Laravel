<h3> Fornecedor </h3>


@php

//{{ 'texto de teste1' }}

/*<?= ' texto de teste2' ?>*/

@endphp

{{-- @dd($fornecedores) --}}


{{--
                            --if/else--
    @if(count($fornecedores) > 0 && count($fornecedores) < 10)
        <h3> Existem alguns fornecedores cadastrados </h3>
    @elseif(count($fornecedores) > 10)
        <h3> Existem vários fornecedores cadastrados</h3>
    @else
        <h3> Ainda não existem fornecedores cadastrados</h3>
    @endif
                                                    ----unles----
    @if( !($fornecedores[0]['status'] =='S'))
    Fornecedor inativo if
    @endif
    <br>
    @unless($fornecedores[0]['status'] == 'S')
        Fornecedor inativo unless
    @endunless
--}}

{{-- @dd($fornecedores) --}}

@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)

        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset



