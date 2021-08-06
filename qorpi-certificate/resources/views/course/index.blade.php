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
                <th>id</th>
                <th>course name</th>
                <th>course date</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{$course->id}}</td>
                    <td>{{$course->name}}</td>
                    <td>{{$course->course_date}}</td>
                    <td><button><a href="" style="text-decoration: none;">delete</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button"><a href="/course/create" style="text-decoration: none;">Create Course</a></button>
</body>
</html>
