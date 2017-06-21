<div ng-controller="emprestadoCtrl" data-ng-init="getEmprestados()">

    <form>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-search"></i></div>
                <input type="text" class="form-control" placeholder="Pesquisar Livro" ng-model="searchTitulo">
            </div>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>
                Livro
            </th>
            <th>
                Emprestado para
            </th>
            <th>Ações</th>
        </tr>
        </thead>

        <tbody ng-scope>
        <tr data-ng-repeat="emprestado in emprestados | filter:searchTitulo">
            <td>{{ emprestado.livro.titulo }}</td>
            <td>{{ emprestado.nome }}</td>
            <td>
                <a class="btn btn-success" ng-href='{{"/emprestado/"+emprestado.id}}'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                <button class="btn btn-danger" ng-click="emprestadoDelete(emprestado.id)"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            </td>
        </tr>
        </tbody>
    </table>

</div>