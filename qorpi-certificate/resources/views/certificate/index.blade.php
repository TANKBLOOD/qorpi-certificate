<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Student Name</th>
                <th>Student Code</th>
                <th>Course Name</th>
                <th>Course Date</th>
                <th>Qr code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($certs as $cert)
                <tr>
                    <td>{{$cert->id}}</td>
                    <td>{{$cert->student_name}}</td>
                    <td>{{$cert->student_code}}</td>
                    <td>{{$cert->course->name}}</td>
                    <td>{{$cert->course->course_date}}</td>
                    <td><img src="{{asset($cert->course->qr_code_path)}}" alt=""></td>
                    <td><a href="/certificate/export/{{$cert->id}}">View</a> <a href="/certificate/download/{{$cert->id}}">export</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
