<h2>supplier home page</h2>

Fornecedores: 

@isset($suppliers)
<br>
<br>
    {{ $suppliers[0]['nome']}}
<br>
Status: {{ $suppliers[0]['status']}}
<br>
    @isset($suppliers[0]['CNPJ'])
        CNPJ: {{ $suppliers[0]['CNPJ']}}
    @endisset
@endisset