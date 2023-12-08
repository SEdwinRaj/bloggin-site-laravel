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
            padding:0;
            margin:0;
        }
        body{
            background-color:rgb(137, 207, 240);
        }
        .side-nav{
            position:absolute;
            background-color:rgba(255,255,255,0.8);
            width:40vh;
            height:95vh;
            margin:10px 10px 10px 10px;
            border:solid 3px white;
            border-radius:6%;
            
        }
        .side-nav-content{
            display:block;
            margin:auto;
            text-align:center;
            margin-top:15px;
            border-radius:10%;
        }
        .btn-side-nav{
            background:transparent;
            width:100%;
            border:none;
            font-size:1.5rem;
            font-weight:500%;
            font-weight:500%;
            padding:5px 0 5px 0;
            color:black;
        }
        .btn-side-nav:hover{
            color:rgb(0,137,255);
            cursor: pointer;
        }
        .side-nav-line{
            width:80%;
            margin:auto;
            border:2px solid black;
            border-radius:20px;
        }
        .user-info{
            display: flex-box;
            float:right;
            margin-right:20px;
            color:white;
            font-size:24px;
        }
        .user-img img{
            width:40px;
            height:40px;
            border-radius:50%;
            margin:15px 0 10px 25%;
            
        }
        .blog-content{
            display: flex-box; 
            float:right;
            margin:8% 10% 0 3%;
            height:80vh;
            width:100vh;
            background-color:rgba(255,255,255,0.8);
            border:solid 3px grey;
            border-radius:2%;
            overflow-y:auto;
        }
        .blog-content-img{
            display:inline-block;
        }
        .overview{
            display:inline-block;
            text-align:right;
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

    <div class="user-info">
        <div class="user-img">
            <img src="default.jpg">
        </div>
        <div class="user-name">
            <h3>EdwinRja S</h3>
        </div>
    </div>

    <div class="blog-content">
        @foreach($datas as $data)
        <div class="content">
            <div class="blog-content-img">
                <img src="{{ asset('/storage/app/' . $data->image) }}" class="thumbnail">
            </div>

            <div class="overview">
                <div class="blog-title">
                    <a href="#" class="blog-content-overview">{{ $data->title }}</a>
                </div>

                <div class="blog-context">
                    <p>{{ $data->description }}</p>
                </div>
            </div>
        </div>
        <hr>
        @endforeach
        
    </div>

    <form action="/create/page" method="post">
        @csrf
        <div class="side-nav">
            <div class="side-nav-content">
                <button class="btn-side-nav">Account</button>
            </div>
            <div class="side-nav-content">
                <button class="btn-side-nav">Home</button>
            </div>
            <div class="side-nav-content">
                <button class="btn-side-nav">Create blog</button>
            </div>
            <div class="side-nav-content">
                <button class="btn-side-nav">About</button>
            </div>
            <div class="side-nav-content">
                <button class="btn-side-nav">Support</button>
            </div>
            <div class="side-nav-content">
                <button class="btn-side-nav">Help</button>
            </div>
            <div class="side-nav-content">
                <hr class="side-nav-line">
            </div>
        </div>
    </form>

</body>
</html>