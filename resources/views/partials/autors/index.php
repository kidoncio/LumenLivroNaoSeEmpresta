<div ng-controller='autorsCtrl' data-ng-init="getAutors()">

<table class="table">
	<thead>
		<tr>
			<th>Nome</th>
		</tr>
	</thead>
	<tbody ng-scope>
		<tr data-ng-repeat="autor in autors">
			<td>{{autor.nome}}</td>
			<td><a class="btn btn-success" ng-href='{{"/autor/"+autor.id}}'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
			<td><button class="btn btn-danger" ng-click="autorDelete(autor.id)"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
		</tr>
	</tbody>
</table>
</div>