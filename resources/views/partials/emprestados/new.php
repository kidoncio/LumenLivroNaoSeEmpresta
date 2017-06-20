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
                        <option ng-repeat="livro in livros" value="{{ livro.id }}">{{ livro.titulo }}</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="date_start">Data Inicial</label>
                <div class="col-md-4">
                    <input id="datepicker" name="date_start" class="form-control input-md" type="text" ng-model="emprestado.date_start">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="date_end">Data de Devolução</label>
                <div class="col-md-4">
                    <input id="datepicker" name="date_end" class="form-control input-md" type="text" ng-model="emprestado.date_end">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="emprestadoSave();">Save</button>
                    <a class="btn btn-danger" onclick="highlightSearch()" ng-href="/emprestado">Cancel</a>
                </div>
            </div>
        </fieldset>
    </form>
</div>