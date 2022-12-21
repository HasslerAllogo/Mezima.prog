<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style1.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>Creation d'un nouveau projet</h1>
    <h2>Defintion du proget </h2><h2>Defintion des différentes taches</h2><h2>Confirmation des taches</h2>
    <form action="{{ route('projet.store') }}" method="post">
	@csrf
	<div class="container-mc">
			<div class="container-mc-1"> <h3> Identifier votre proget</h3></div>
			<div class="container-mc-2">
				<input name=nomProjet type="text" placeholder="Projet" required ><br/>
				<input name=nomClient type="text" placeholder="Client" required ><br/>
				<input name=nomResponsable type="text" placeholder="Responsable" required ><br/>
				<textarea name=description  placeholder="Description..." cols="40" rows="4" required ></textarea><br/>
			</div>
			<div class="container-mc-3">
				<button type="submit">valider</button>
			</div>
	</div>

	</form>

</body>
</html>