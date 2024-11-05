<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($con as $data)
        <div>
            {{ $data->comment }}
        </div>
    @endforeach
</body>
</html>