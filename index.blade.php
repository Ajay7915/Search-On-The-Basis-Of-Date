<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1>Student Table</h1>
                    <button class="btn"><a href="{{ route('student') }}">All</a></button>
                    <button class="btn"><a href="{{ route('student', 3) }}">Three Month</a></button>
                    <button class="btn"><a href="{{ route('student', 6) }}">Six Month</a></button>
                    <button class="btn"><a href="{{ route('student', 9) }}">Nine Month</a></button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Enrolled</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $detail)
                            <tr>
                                <td>{{$detail->id}}</td>
                                <td>{{$detail->name}}</td>
                                <td>{{$detail->email}}</td>
                                <td>{{Str::limit($detail->password,20)}}</td>
                                <td>{{$detail->enroll}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
