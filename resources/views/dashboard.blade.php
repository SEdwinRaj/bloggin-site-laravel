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
            background-color:rgb(241, 241, 255);
        }
        .side-nav{
            position:absolute;
            background-color:rgba(255,255,255,0.8);
            width:40vh;
            height:95vh;
            margin:10px 10px 10px 10px;
            border:solid 3px grey;
            border-radius:6%;
            
        }
        .side-nav-content{
            display:block;
            margin:auto;
            text-align:center;
            margin-top:15px;
            border-radius:10%;
            padding:10px;
        }
        .side-nav-content a{
            text-decoration: none;
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
            padding:2.5% 3% 0 0;
            color:black;
            font-size:24px;
        }
        .blog-content{
            display: flex-box; 
            float:right;
            margin:8% 5% 0 3%;
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

    <div class="user-info">
        <div class="user-name">
            @foreach($data as $d)
            <h3>{{ $d->username }}</h3>
            @endforeach
        </div>
    </div>

    <div class="blog-content">
        @foreach($data1 as $d1)
        <div class="content">
            <div class="blog-content-img">
                <img src="{{ asset('/storage/' . $d1->image) }}" class="thumbnail">
            </div>

            <div class="overview">
                <div class="blog-title">
                    <a href="/content/{{ $d1->id }}" class="blog-content-overview">{{ $d1->title }}</a>
                </div>

                <div class="blog-context">
                    <p>{{ $d1->description }}</p>
                </div>
            </div>
        </div>
        <hr>
        @endforeach
        
    </div>

        <div class="side-nav">
            <div class="side-nav-content">
                <a href="/account" class="btn-side-nav">Account</a>
            </div>
            <div class="side-nav-content">
                <a href="/home" class="btn-side-nav">Home</a>
            </div>
            <div class="side-nav-content">
                <a href="/create/page" class="btn-side-nav">Create blog</a>
            </div>
            <div class="side-nav-content">
                <a href="/about" class="btn-side-nav">About</a>
            </div>
            <div class="side-nav-content">
                <a href="/support" class="btn-side-nav">Support</a>
            </div>
            <div class="side-nav-content">
                <a href="/help"class="btn-side-nav">Help</a>
            </div>
            <div class="side-nav-content">
                <hr class="side-nav-line">
            </div>
        </div>

</body>
</html>