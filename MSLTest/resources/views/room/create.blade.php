<!DOCTYPE html>
<html>
    <head>
    <title>Room</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
            html, body {
                background-color: #BBD1E4;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
    </style>
    </head>
    <body>
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="title m-b-md">
                Create room
            </div>
            <form class="form-inline" method="POST" action="/addRoom">
                {{ csrf_field() }}
                <div class="form-group">
                    <label >Room type name:</label>
                    <input class="form-control" type="text" id="roomType" name="roomType" placeholder="Enter Room type name">
                </div>
                <div class="form-group">
                    <label>Room Type id:</label>
                    <input class="form-control" type="text" id="roomId" name="roomId" placeholder="Enter Room type id">
                </div>
                <input class="btn btn-default" type="submit" value="Make Room">
            </form>
            <div>
            </br>
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Room type name</th>
                        <th>Room Type id</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $row)
                    <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['room_type_name']}}</td>
                        <td>{{$row['room_type_id']}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>  
        </div>
    </div>
    </body>
</html>
