<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$leretec->title_historia}}</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body">

        <div class="title_history">
            <h3>{{$leretec->title_historia}}</h3>
        </div>
        <hr>
        <div class="history_container">
            <p>{{str_ireplace("<p>", "\n", str_ireplace("<c>", "\n\n", $leretec->historia))}}</p>
        </div>
</body>
</html>