<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course|create</title>
</head>
<body>
    <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="course-name">Course Name</label>
            <input type="text" name="courseName" id="course-name">
        </div>
        <div>
            <label for="course-date">Course Date</label>
            <input type="date" name="courseDate" id="course-date">
        </div>
        <div>
            <label for="course-qr-code">Course Qr Code</label>
            <input type="file" name="courseQrCode" id="course-qr-code">
        </div>
        <div>
            <input type="submit" value="create course">
        </div>
    </form>
</body>
</html>
