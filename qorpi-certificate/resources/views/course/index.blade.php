<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course|index</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{$course->name}}</td>
                    <td>{{$course->course_date}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
