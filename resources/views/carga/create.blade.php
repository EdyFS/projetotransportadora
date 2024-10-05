<x-app-layout>

    <h5>Nova Categoria</h5>

    <form action="/categoria" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe a carga:</label>
                <input type="text" name="nome" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="peso" class="form-label">Informe o peso:</label>
                <input type="text" name="peso" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="tamanho" class="form-label">Informe o tamanho:</label>
                <input type="text" name="nome" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="fragilidade" class="form-label">Informe a fragilidade:</label>
                <input type="text" name="fragilidade" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>