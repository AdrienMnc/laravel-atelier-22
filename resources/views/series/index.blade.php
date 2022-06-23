<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series TV</title>
</head>

<body>
    
    
    @foreach ($series as $id => $array)
    <p> Serie {{ $array }} </p>
    <a href="{{ route('showSeries.show', ['id' => $id]) }}">click</a>
    @endforeach



</body>

</html>