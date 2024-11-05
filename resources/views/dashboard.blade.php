<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
        *{
            font-family: 'lato', sans-serif;
            padding:0;
            margin:0;
        }
        body{
            background-color:rgb(240,240,240);
        }
        .side-nav{
            position:fixed;
            top:0;
            left :0;
            z-index:1;
            background-color:rgba(255,255,255,0.8);
            width:40vh;
            height:100vh;
            /* margin:10px 10px 10px 10px; */
            /* border:solid 3px grey; */
            /* border-radius:6%; */
            
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
            font-weight:600;
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
            /* border:2px solid black; */
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
            position:absolute; 
            float:right;
            /* margin:8% 7% 0 0; */
            margin-bottom:10rem;
            top:10%;
            left:30%;
            /* height:80vh; */
            width:100vh;
            background-color:rgba(255,255,255,0.8);
            /* border:solid 3px grey; */
            border-radius:2%;
            /* overflow-y:auto; */
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
            font-weight:600;
        }
        .overview a{
            text-decoration:none;
            color:black;
            font-size:35px;
        }
        .blog-context p{
            display: -webkit-box; /* Use flexbox for truncation */
            -webkit-line-clamp: 3; /* Show only 3 lines */
            -webkit-box-orient: vertical; /* Set the orientation to vertical */
            overflow: hidden; /* Hide any overflowed text */
            text-overflow: ellipsis; /* Add the ellipsis (...) */
            line-height: 1.5; /* Set the line-height to control line spacing */
            height: 4.5em; /* 3 lines * line-height (e.g., 1.5em * 3) */
            margin-top:1rem;

            /* font-size:20px;
            color:grey;
            margin-top:10px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis; */
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
        ::-webkit-scrollbar {
        width: 5px;
        }

        ::-webkit-scrollbar-track {
        border-radius:30px;
        background: #f1f1f1; 
        }
        
        ::-webkit-scrollbar-thumb {
        background: #888; 
        border-radius:30px;
        }

        ::-webkit-scrollbar-thumb:hover {
        background: #555; 
        }
        .name{
            weight:500;
            font-size:32px;
            color: rgb(0,137,255);
        }
        .delete-btn {
            display: inline-block;
        }
        .delete-btn button{
            background:red;
            color:white;
            border:none;
            padding:10px;
            /* float:right; */
        }
    </style>
</head>
<body>
    
    <!-- <div class="user-info">
        <div class="user-name">
            <h3>{{ $username }}</h3>
        </div>
    </div> -->

    <div class="blog-content">
    @if(!empty($d2))
        @foreach($d2 as $d)
        <div class="content">
            <div class="blog-content-img">
                <img src="{{ asset('/storage/' . $d->image) }}" class="thumbnail">
            </div>

            <div class="overview">
                <div class="blog-title">
                    <a href="{{ route('content', [$d->id, $username]) }}" class="blog-content-overview">{{ $d->title }}</a>
                </div>

                <div class="blog-context">
                    <p>{{ $d->description }}</p>
                </div>
            </div>

            <div class="delete-btn">
                <form action="{{ route('delete', [$d->id, $username]) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </div>

            
        </div>
        <hr>
        @endforeach
    @endif
        
    </div>

        <div class="side-nav">
        
            <div class="side-nav-content">
                <h3 class="name">{{ $username }}</h3>
            </div>
            <div class="side-nav-content">
                <a href="/account" class="btn-side-nav">Account</a>
            </div>
            <div class="side-nav-content">
                <a href="/dth/{{ $username }}" class="btn-side-nav">Home</a>
            </div>
            <div class="side-nav-content">
                <a href="/create/page/{{$username}}" class="btn-side-nav">Create blog</a>
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
                <a href="/"class="btn-side-nav">LogOut</a>
            </div>
            <div class="side-nav-content">
                <hr class="side-nav-line">
            </div>
        </div>

</body>
</html>