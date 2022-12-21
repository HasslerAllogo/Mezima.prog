<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('tache.store') }}" method="post">
    @csrf
        <input id="nom" type="hidden" name="ID">
        <input type="submit" value="Subscribe!">
    </form>
    <script>
        // function envoyer(){
            var nom=document.querySelector("#nom")

            nom.value=JSON.stringify( {
                        make: 'Ford',
                        model: 'Mustang',
                        year: 1969
                        })
            
            
            // ["Teebo",
			// 	"Eaulive",
			// 	"Asevere",
			// 	"Kalamit",
			// 	"Serge",
			// 	"Chat_Teigne",
			// 	"BmV"];
            console.log(document.querySelector("#nom").value);

        // }

    </script>
        

</body>
</html>