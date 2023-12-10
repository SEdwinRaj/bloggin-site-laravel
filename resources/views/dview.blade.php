<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            margin:0;
            padding: 0;
        }
        body {
            
            background-color: rgb(241, 241, 255);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            font-size: 24px;
            color:black;
            text-align: center;
            padding: 30px 25px;
            text-decoration: none;
        }

        nav h2{
            float: right;
            display: block;
            padding: 18px 35px;
            font-size: 40px;
        }

        nav a:hover {
            color: rgb(0,137,255);
        }
        button{
            display: block;
            border:none;
            background-color: transparent;
            padding: 30px 25px;
            font-size: 24px;
        }
        .btn{
            display: inline-block;
        }
        button:hover{
            color: rgb(0,137,255);
            cursor: pointer;
        }
        hr{
            width:97%;
            margin:auto;
            height: 1.5px;
            background-color: grey;
        }
        .container{
            background-color:rgba(255,255,255,0.8);
            text-align: center;
            width: 70%;
            min-height:82vh;
            margin: 30px auto 20px auto;
            border-radius: 4px;
            padding:1px;
        }
        img{
            width: 80%;
            height: 50vh;
            margin: 20px auto 20px auto;
        }
        .title{
            border: 2px solid grey;
            width: 77%;
            margin:10px auto 10px auto;
            padding:6px;
            border-radius: 3px;
            font-size: 25px;
        }
        .content{
            white-space: pre-line;
            text-align: left;
            border: 2px solid grey;
            width: 77%;
            margin:30px auto 20px auto;
            padding:10px;
            border-radius: 3px;
            font-size: 25px;
        }
    </style>
</head>
<body>

        <nav>
            <div class="btn">
                <form action="/dboard/{{$username}}" method="post">
                    @csrf
                    <button type="submit">Dashboard</button>
                </form>
            </div>
            <a href="/home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <h2>BloomBard</h2>
        </nav>
        <hr>

    <div class="container">
    @if( $data->id != 0 )
        <div class="image">
            <img src="{{ asset('/storage/' . $data->image) }}" >
        </div>

        <div class="title">
            <h2>{{ $data->title }}</h2>
        </div>

        <div class="content">
            <p>{{ $data->description }}</p>
        </div>
        @endif
    </div>
</body>
</html>