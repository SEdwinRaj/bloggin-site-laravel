<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
        /* @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap'); */
        *{
            font-family: 'Poppins', sans-serif;
            /* font-family: 'lato', sans-serif; */
            margin:0;
            padding: 0;
        }
        body {
            
            background-color: rgb(240,240,240);
            /* font-family: Arial, sans-serif; */
            margin: 0;
            padding: 0;
        }
        nav {
            position:sticky;
            top:0;
            z-index:1;
            background-color:rgb(240,240,240);
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
            font-weight:600;
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
        .dashboard-btn{
            display: block;
            border:none;
            background-color: transparent;
            padding: 30px 25px;
            font-size: 24px;
            font-weight:600;
        }
        .btn{
            display: inline-block;
        }
        .dashboard-btn:hover{
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
            /* border: 2px solid grey; */
            width: 77%;
            margin:10px auto 10px auto;
            padding:6px;
            border-radius: 3px;
            font-size: 25px;
        }
        .content{
            white-space: pre-line;
            text-align: left;
            /* border: 2px solid grey; */
            width: 77%;
            margin:30px auto 0 auto;
            padding:10px;
            border-radius: 3px;
            font-size: 25px;
        }
        .author button{
            border:none;
            background:transparent;
            text-align: left;
            font-size:30px;
        }
        .author{
            text-align: right;
            padding:0 10rem 4rem 0;
        }
        .author span {
            display: block;
        }
        .author span:hover {
            cursor: pointer;
            color:rgb(0,137,255);
        }
        .comment-section{
            display: inline-block;
            align-items:center;
            width:80%;
            margin-bottom:3rem;
        }
        #comment {
            /* display: flex; */
            width: 50%;
            height:2rem;
        }
        #submit-comment {
            display: inline;
            padding:.6rem;
            margin-left:2rem;
            color:white;
            border-radius:.5rem;
            font-size:1rem;
            background-color:rgb(0,137,255);
        }
        .comments-display{
            /* border:1px solid grey; */
            text-align:left;
            margin-top:2rem;
        }
        .comments{
            margin:.5rem;
            padding:.5rem 0 .8rem .8rem;
            background: rgba(0,0,0,0.05) ;
            border-radius:.8rem;
        }
        .commentUsername{
            font-weight:700;
            font-size:1.5rem;
        }
        .commentContent {
            padding:.5rem 0 0 1rem;
            font-size:1.2rem;
            font-weight:400;
        }
        .image {
            display: inline-block;
        }
        .like {
            width: 2rem;
            height:2rem;
            padding:1rem;
        }
        .image button {
            background:transparent;
            border:none;
        }
        .error {
            color:red;
            font-size:1rem;
            padding:.5rem 0 .5rem 0;
        }  
        .likes-image {
            display: inline-block;
        }
        .likes-image button {
            background:transparent;
            border:none;
        }
        .like-count {
            position: absolute;
            transform:translateY(3rem);
            z-index: 1;
            margin-right:1rem;
        }
        .dislike-count {
            position: absolute;
            transform:translateY(3rem);
            z-index: 1;
            margin-right:1rem;
        }
    </style>
</head>
<body>

        <nav>
            <div class="btn">
                <form action="/dboard/{{$username}}" method="post">
                    @csrf
                    <button type="submit" class="dashboard-btn">Dashboard</button>
                </form>
            </div>
            <a href="/dth/{{ $username }}">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <!-- <h2>BloomBard</h2> -->
            <h2>{{ $username }}</h2>
        </nav>
        <!-- <hr> -->

    <div class="container">
    @if( $data->id != 0 )

        <div class="title">
            <h2>{{ $data->title }}</h2>
        </div>

        <div class="image">
            <img src="{{ asset('/storage/' . $data->image) }}" >
        </div>

        <div class="content">
            <p>{{ $data->description }}</p>
        </div>
        <div class="author">
            <form action="/profile/{{ $data->username }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="username" name="username" value="{{$username}}">
                <button type="submit" class="author-btn">-by <span>{{ $data->username }}<span></button>
            </form>
        </div>
    @endif
    <!--<div class="count">
        <div class="prompt">
            <p>Did you like this blog ?</p>
        </div>
        
        <div class="likes-image">
        
            <button type="submit" href=""><img src="/img/like.png" class="like likes"></button>
            <button type="submit" class="like-count">{{ $data->likes }}</button>
                    
            <button type="submit"><img src="/img/dislike.png" class="like dislike"><button type="submit" class="dislike-count">{{ $data->dislikes }}</button></button>
            
        </div>
        
    </div> -->
    <div class="comment-section">
        <div class="add-comments">
            <form action="/add-comment/{{$username}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="blog_id" name="blog_id" value="{{ $data->id }}">
                <input type="hidden" id="username" name="username" value="{{ $username }}">
                <input type="text" id="comment" name="comment">
                <button type="submit" id="submit-comment">Add Comment</button>
            </form>
            @if(!empty($error))
                <div class='error'>
                    {{ $error }}
                </div>
            @endif
            <div class="comments-display">
                @foreach($comments as $comment)
                    <div class="comments">
                        <div class="commentUsername">
                            <p>{{ $comment->username }}</p>
                        </div>
                        <div class="commentContent">
                            <p>{{ $comment->comment }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</body>
</html>