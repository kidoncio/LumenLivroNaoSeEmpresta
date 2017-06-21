<div ng-controller="livrosCtrl" ng-scope data-ng-init="getId_()">

    <form class="form-horizontal" data-ng-init="getOptions()">
        <fieldset>

            <legend>Editar Livro</legend>

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
                <label class="col-md-4 control-label" for="disponivel">Disponível para empréstimo?</label>
                <div class="col-md-4">
                    <select id="disponivel" name="disponivel" class="form-control" ng-model="livro.disponivel">
                        <option  value="1">Sim</option>
                        <option  value="0">Não</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="livroUpdate();"><span class="glyphicon glyphicon-saved" aria-hidden="true"></span></button>
                    <a class="btn btn-danger" onclick="highlightSearch()" ng-href="/livro"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </div>
            </div>
        </fieldset>
    </form>
</div>