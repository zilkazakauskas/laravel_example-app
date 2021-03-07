<html>

<head>
    <h1>Test file</h1>
</head>

<body>

    <div>
        start
    </div>
    {{ $var = 8 }}
    {{ date('Y-m-d') }} {{ $var }}
    <div>
        @if ($var > 4)
            kintamasis daugiau uz 4
        @else
            kintamasis maziau uz 4
        @endif
        <br>
        @for ($i = 0; $i < 2; $i++)
            Number {{ $i }}
        @endfor
    </div>
</body>

</html>
