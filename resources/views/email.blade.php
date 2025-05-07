<html>

<head>
    <style>
        p {
            margin: 0;
            padding: 0;
        }

        h5 {
            padding: 0;
            margin: 0;
        }

        .data {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            font-size: 17px;
            background-color: #f9f9f9;
            padding: 10px 30px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="data">
        <div class="header">
            <p>Mensaje de {{ $data['name'] }}!</p><br>
            <p>Email: {{ $data['email'] }}</p><br>
            <div>
                {!! $data['message'] !!}
            </div>
            <br>
        </div>
    </div>
</body>

</html>
