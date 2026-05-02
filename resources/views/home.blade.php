<!DOCTYPE html>
<head>
</head>
<body>
    <h1> welcome to home page</h1>
    <p>olá {{$nome}}</p>
    <p>seus habitos são:</p>

    <ul>
        @foreach($habitos as $item)
            <li>
                {{$item}}
            </li>

        @endforeach
    </ul>
</body>
</html>