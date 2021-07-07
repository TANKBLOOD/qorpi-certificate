<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('certificate.store.excel')}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <label for="excel">import excel</label>
        <input type="file" name="excel" id="excel">
        <input type="submit" value="submit">
    </form>
</body>
</html>
