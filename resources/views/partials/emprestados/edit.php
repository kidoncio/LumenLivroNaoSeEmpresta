<div ng-controller="emprestadoCtrl" ng-scope data-ng-init="getId()">

    <form class="form-horizontal">
        <fieldset data-ng-init="getOptions()">

            <legend>Editar Empréstimo</legend>

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
                        <option ng-repeat="livro in livros" ng-if="livro.disponivel == '1'" value="{{ livro.id }}">{{ livro.titulo }}</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="emprestadoUpdate()"><span class="glyphicon glyphicon-saved" aria-hidden="true"></span></button>
                    <a id="button2id" class="btn btn-danger" ng-href="/emprestado" onclick="highlightSearch()"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </div>
            </div>
        </fieldset>
    </form>

</div>