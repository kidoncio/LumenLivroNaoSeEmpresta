<div ng-controller="emprestadoCtrl" data-ng-init="getEmprestados()">

    <table class="table">
        <thead>
        <tr>
            <th>Livro</th>
            <th>Emprestado para</th>
            <th>Ações</th>
        </tr>
        </thead>

        <tbody ng-scope>
        <tr data-ng-repeat="emprestado in emprestados">
            <div ng-if="emprestado.livro.disponivel == '1'">
                <td>{{ emprestado.livro.titulo }}</td>
                <td>{{ emprestado.nome }}</td>
                <td>
                    <a class="btn btn-success" ng-href='{{"/emprestado/"+emprestado.id}}'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <button class="btn btn-danger" ng-click="emprestadoDelete(emprestado.id)"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                </td>
            </div>
        </tr>
        </tbody>
    </table>

</div>