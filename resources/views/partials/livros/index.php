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
			<td>{{livro.titulo}}</td>
			<td>{{livro.autor.nome}}</td>
			<td>{{livro.categoria.nome}}</td>
			<td><a class="btn btn-success" ng-href='{{"/livro/"+livro.id}}'>Editar</a></td>
			<td><button class="btn btn-danger" ng-click="livroDelete(livro.id)">Eliminar</button></td>
		</tr>

	<!--
		<tr>
			<td>Star Wars: Episode IV - A New Hope</td>
			<td>1977</td>
			<td>Sci-Fi Fantasy</td>
			<td>George Lucas</td>
			<td><button type="button">Edit</button></td>
			<td><button type="button">Delete</button></td>
		</tr>
		<tr>
			<td>Lord Of The Rings - The Fellowship of the Ring</td>
			<td>2001</td>
			<td>Fantasy</td>
			<td>Peter Jackson</td>
			<td><button type="button">Edit</button></td>
			<td><button type="button">Delete</button></td>
		</tr>
		<tr>
			<td>Titanic</td>
			<td>1997</td>
			<td>Romance, Drama</td>
			<td>James Cameron</td>
			<td><button type="button">Edit</button></td>
			<td><button type="button">Delete</button></td>
		</tr>
	-->
	</tbody>
</table>

</div>