<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index 1</title>
</head>
<body>
    <div> Olá, {!! $nome. "<br>"!!}, tudo bem? </div>
    <div> {{ $ola }} </div>
        @forelse ($errors as $error)
            <ul style="color: red; ">
                <li>{{ $error }}</li>                                
            </ul>
        @empty           
            <p style="color: green;">Requisição tratada com sucesso!!!!!</p>
        @endforelse



    <form action="" method="post">
        @csrf
        <input type="text" name="telefone" id="telefone">
        <input type="submit" value="Enviar">
    </form>        
</body>
</html>