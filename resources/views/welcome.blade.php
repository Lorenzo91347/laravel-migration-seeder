<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Migration Seeder</title>
</head>
<body>
    <ul>
        @foreach($trains as $train)
        <li>{{$train -> id}}</li>
        <li>{{$train -> company}}</li>
        <li>{{$train -> start_station}}</li>
        <li>{{$train -> stop_station}}</li>
        <li>{{$train -> start_time}}</li>
        <li>{{$train -> stop_time}}</li>
        <li>{{$train -> start_date}}</li>
        <li>{{$train -> stop_date}}</li>
        <li>{{$train -> code}}</li>
        <li>{{$train -> coach_count}}</li>
        <li>{{$train -> on_time}}</li>
        <li>{{$train -> cancelled}}</li>
        
        @endforeach
    </ul>
</body>
</html>