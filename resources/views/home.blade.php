<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            padding:0;
            margin:0;
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

        nav h2{
            float: right;
            display: block;
            padding: 18px 35px;
            font-size: 40px;
        }

        nav a:hover {
            color: rgb(0,137,255);
        }
        hr{
            width:97%;
            margin:auto;
            height: 1.5px;
            background-color: grey;
        }
        .blog-content{
            margin:30px auto 30px auto;
            min-height:80vh;
            width:100vh;
            background-color:rgba(255,255,255,0.8);
            border-radius:2%;
        }
        .content{
            padding: 30px 0 30px 0;
        }
        .blog-content-img{
            display:inline-block;
        }
        .overview{
            display:inline-block;
            text-align:left;
            vertical-align:top;
            margin: 20px 30px 20px 20px;
            height:10vh;
            width:50vh;
        }
        .blog-title{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .overview a{
            text-decoration:none;
            color:black;
            font-size:35px;
        }
        .blog-context p{
            font-size:20px;
            color:grey;
            margin-top:10px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .thumbnail{
            margin:20px 10px 10px 40px;
            height:15vh;
            width:30vh;
            border-radius:3%;
        }
        .blog-content hr{
            width:90%;
            margin:auto;
        }
        /* width */
        ::-webkit-scrollbar {
        width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        border-radius:30px;
        background: #f1f1f1; 
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: #888; 
        border-radius:30px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #555; 
        }
    </style>
</head>
<body>

        <nav>
            
            <a href="#home">Home</a>
            <div class="btn">
                <form action="/dboard/{{$d2}}" method="post">
                    @csrf
                    <button type="submit">Dashboard</button>
                </form>
            </div>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="/">LogOut</a>
            <!-- <h2>BloomBard</h2><br> -->
            <h2>{{ $d2 }}</h2>
            
        </nav>
        <hr>

    <div class="blog-content">
        @foreach($data1 as $data)
        <div class="content">
            <div class="blog-content-img">
                <img src="{{ asset('/storage/' . $data->image) }}" class="thumbnail">
            </div>

            <div class="overview">
                <div class="blog-title">
                    <a href="/content/{{ $data->id }}" class="blog-content-overview">{{ $data->title }}</a>
                </div>

                <div class="blog-context">
                    <p>{{ $data->description }}</p>
                </div>
            </div>
        </div>
        <hr>
        @endforeach
        
    </div>

</body>
</html>
