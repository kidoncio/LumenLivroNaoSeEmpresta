<div ng-controller="autorsCtrl" ng-scope>

    <form class="form-horizontal">
        <fieldset data-ng-init="getId()">
            <!-- Form Name -->
            <legend>Editar Autor</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" class="form-control input-md" type="text" ng-model="autor.nome">
                </div>
            </div>
            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="autorUpdate()"><span class="glyphicon glyphicon-saved" aria-hidden="true"></span></button>
                    <a class="btn btn-danger" ng-href="/autor" onclick="highlightSearch()"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </div>
            </div>
        </fieldset>
    </form>
    
</div>