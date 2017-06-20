<div ng-controller="emprestadoCtrl" data-ng-init="getEmprestados()">

    <table class="table">
        <thead>
        <tr>
            <th>Início do Empréstimo</th>
            <th>Livro</th>
            <th>Categoria</th>
            <th>Emprestado para</th>
        </tr>
        </thead>

        <tbody ng-scope>
        <tr data-ng-repeat="emprestado in emprestados">
            <td>{{ emprestado.date_start }}</td>
            <td>{{ emprestado.livro.id }}</td>
            <td>{{ emprestado.livro.categoria }}</td>
            <td>{{ emprestado.nome }}</td>
            <td><a class="btn btn-success" ng-href='{{"/emprestado/"+emprestado.id}}'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
            <td><button class="btn btn-danger" ng-click="emprestadoDelete(emprestado.id)"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
        </tr>
        </tbody>
    </table>

</div>