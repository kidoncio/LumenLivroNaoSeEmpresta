<div ng-controller="emprestadosCtrl" ng-scope  data-ng-init="getId_()">

    <form class="form-horizontal" data-ng-init="getOptions()">
        <fieldset>

            <legend>Editar Empréstimo</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="titulo">Título</label>
                <div class="col-md-4">
                    <input id="titulo" name="titulo" class="form-control input-md" type="text" ng-model="livro.titulo">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="categoria_id">Categoria</label>
                <div class="col-md-4">
                    <select id="categoria_id" name="categoria_id" class="form-control" ng-model="livro.categoria_id">
                        <option ng-repeat="categoria in categorias" value="{{ categoria.id }}">{{ categoria.categoria }}</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="autor_id">Autor</label>
                <div class="col-md-4">
                    <select id="autor_id" name="autor_id" class="form-control" ng-model="livro.autor_id">
                        <option ng-repeat="autor in autors" value="{{ autor.id }}">{{ autor.nome }}</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="livroUpdate();">Save</button>
                    <a class="btn btn-danger" onclick="highlightSearch()" ng-href="/livro">Cancel</a>
                </div>
            </div>
        </fieldset>
    </form>
</div>