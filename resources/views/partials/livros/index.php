<div ng-controller="livrosCtrl" data-ng-init="getlivros()">

    <table class="table">
        <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Categoria</th>
        </tr>
        </thead>

        <tbody ng-scope>
        <tr data-ng-repeat="livro in livros">
            <td>{{ livro.titulo }}</td>
            <td>{{ livro.autor.nome }}</td>
            <td>{{ livro.categoria.categoria }}</td>
            <td><a class="btn btn-success" ng-href='{{ "/livro/"+livro.id }}'>Editar</a></td>
            <td><button class="btn btn-danger" ng-click="livroDelete(livro.id)">Eliminar</button></td>
        </tr>
        </tbody>
    </table>

</div>