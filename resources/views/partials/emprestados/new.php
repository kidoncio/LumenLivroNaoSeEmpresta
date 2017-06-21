<div ng-controller="emprestadoCtrl" ng-scope>

    <form class="form-horizontal" data-ng-init="getOptions()">
        <fieldset>

            <legend>Emprestar Livro</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Emprestar Livro Para</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" class="form-control input-md" type="text" ng-model="emprestado.nome">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="livro_id">Livro</label>
                <div class="col-md-4">
                    <select id="livro_id" name="livro_id" class="form-control" ng-model="emprestado.livro_id">
                            <option ng-repeat="livro in livros" ng-if="livro.disponivel == '1' && livro.emprestado.nome == null" value="{{ livro.id }}">{{ livro.titulo }}</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="emprestadosSave();"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                    <a class="btn btn-danger" onclick="highlightSearch()" ng-href="/emprestado"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </div>
            </div>
        </fieldset>
    </form>
</div>