<div ng-controller="categoriasCtrl" ng-scope>

    <form class="form-horizontal">
        <fieldset>

            <legend>Adicionar Categoria</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="categoria">Nome da Categoria</label>
                <div class="col-md-4">
                    <input id="categoria" name="categoria" class="form-control input-md" type="text" ng-model="categoria.categoria">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="categoriaSave()"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                    <a class="btn btn-danger" ng-href="/categoria" onclick="highlightSearch()"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </div>
            </div>
        </fieldset>
    </form>

</div>