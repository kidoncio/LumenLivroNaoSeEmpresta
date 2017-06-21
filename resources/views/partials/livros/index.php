<div ng-controller="livrosCtrl" data-ng-init="getlivros()">

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
                <a href="#" ng-click="sortType = 'titulo'; sortReverse = !sortReverse">
                    Título
                    <span ng-show="sortType == 'titulo' && !sortReverse" class="fa fa-caret-down"></span>
                    <span ng-show="sortType == 'titulo' && sortReverse" class="fa fa-caret-up"></span>
                </a>
            </th>
            <th>
                <a href="#" ng-click="sortType = 'livro.autor.nome'; sortReverse = !sortReverse">
                    Autor
                    <span ng-show="sortType == 'livro.autor.nome' && !sortReverse" class="fa fa-caret-down"></span>
                    <span ng-show="sortType == 'livro.autor.nome' && sortReverse" class="fa fa-caret-up"></span>
                </a>
            </th>
            <th>
                <a href="#" ng-click="sortType = 'livro.categoria.categoria'; sortReverse = !sortReverse">
                    Categoria
                    <span ng-show="sortType == 'livro.categoria.categoria' && !sortReverse" class="fa fa-caret-down"></span>
                    <span ng-show="sortType == 'livro.categoria.categoria' && sortReverse" class="fa fa-caret-up"></span>
                </a>
            </th>
            <th>
                <a href="#" ng-click="sortType = 'livro.disponivel'; sortReverse = !sortReverse">
                    Disponível para Empréstimo
                    <span ng-show="sortType == 'livro.disponivel' && !sortReverse" class="fa fa-caret-down"></span>
                    <span ng-show="sortType == 'livro.disponivel' && sortReverse" class="fa fa-caret-up"></span>
                </a>
            </th>
            <th>
                <a href="#" ng-click="sortType = 'livro.emprestado.nome'; sortReverse = !sortReverse">
                    Emprestado Para
                    <span ng-show="sortType == 'livro.emprestado.nome' && !sortReverse" class="fa fa-caret-down"></span>
                    <span ng-show="sortType == 'livro.emprestado.nome' && sortReverse" class="fa fa-caret-up"></span>
                </a>
            </th>
            <th>Ações</th>
        </tr>
        </thead>

        <tbody ng-scope>
        <tr data-ng-repeat="livro in livros | orderBy:sortType:sortReverse | filter:searchTitulo">
            <td>{{ livro.titulo }}</td>
            <td>{{ livro.autor.nome }}</td>
            <td>{{ livro.categoria.categoria }}</td>
            <td ng-if="livro.disponivel == '1'">Sim</td>
            <td ng-if="livro.disponivel == '0'">Não</td>
            <td ng-if="livro.emprestado.nome != null">{{ livro.emprestado.nome }}</td>
            <td ng-if="livro.emprestado.nome == null">---</td>
            <td>
                <a class="btn btn-success" ng-href='{{ "/livro/"+livro.id }}'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                <button class="btn btn-danger" ng-click="livroDelete(livro.id)"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            </td>
        </tr>
        </tbody>
    </table>

</div>