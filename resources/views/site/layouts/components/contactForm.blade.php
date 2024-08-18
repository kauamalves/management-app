{{ $slot }}

<form action={{ route('site.contact') }} method='post'>
    @csrf {{-- Token that ensures the form is true (Mandatory to POST actions) --}}
    <input type="text" placeholder="Nome" class="{{ $borderClass }}" name='name'>
    <br>
    <input type="text" placeholder="Telefone" class=" {{ $borderClass }}" name='phone'>
    <br>
    <input type="text" placeholder="E-mail" class=" {{ $borderClass }}" name='email'>
    <br>
    <select class=" {{ $borderClass }}" name='contactReason'>
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name='message' class=" {{ $borderClass}} ">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class=" {{ $borderClass }}">ENVIAR</button>
</form>
