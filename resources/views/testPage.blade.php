<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @if (Session::has('success'))
        <div style="color:green; font-weight: bold;">
            {{ Session::get('success') }}
        </div>
    @endif

    <h1>This is test page</h1>
    <p>Name: <strong>{{ $data['name'] }}</strong></p>
    <p>Email: <strong>{{ $data['email'] }}</strong></p>
    <p>Phone: <strong>{{ $data['phone'] }}</strong></p>
    <p>Message: <strong>{{ $data['message'] }}</strong></p>

</body>

</html>
