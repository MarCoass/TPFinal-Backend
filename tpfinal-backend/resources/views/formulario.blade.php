<form action="/formulario/enviar" method="POST">
    @csrf

    <label for="telefonos">Números de teléfono:</label>
    <input type="text" name="telefonos" multiple>

    <button type="submit">Enviar</button>

    @if (session('response'))
    <div class="alert alert-success">
        {{ session('response.success') }}
    </div>
    <pre>{{ json_encode(session('response.telefonos'), JSON_PRETTY_PRINT) }}</pre>
    @endif

</form>