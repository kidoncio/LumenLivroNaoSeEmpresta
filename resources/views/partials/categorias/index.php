<div ng-controller='categoriasCtrl' data-ng-init="getCategorias()">

<table class="table">
	<thead>
		<tr>
			<th>Categoria</th>
		</tr>
	</thead>
	<tbody ng-scope>
		<tr data-ng-repeat="categoria in categorias">
			<td>{{ categoria.categoria }}</td>
			<td><a class="btn btn-success" ng-href='{{ "/categoria/"+categoria.id }}'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
			<td><button class="btn btn-danger" ng-click="categoriaDelete(categoria.id)"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
		</tr>
	</tbody>
</table>

</div>