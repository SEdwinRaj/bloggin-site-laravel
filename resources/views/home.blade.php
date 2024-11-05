<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="../css/home.css" rel="stylesheet"> -->
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
         /* @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ramaraja&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ramaraja&family=Teko:wght@300..700&display=swap'); */
        *{
            /* font-family: 'Poppins', sans-serif; */
            font-family: 'lato', sans-serif;
            padding:0;
            margin:0;
        }
        body {
            
            background-color: rgb(240,240,240);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            position:sticky;
            top:0;
            z-index:1;
            background-color:rgb(240,240,240);
            overflow: hidden;
            /* height:7%; */
        }

        nav a {
            float: left;
            display: block;
            font-size: 24px;
            color:black;
            text-align: center;
            padding: 20px 25px;
            text-decoration: none;
            font-weight:600;
        }

        button{
            display: block;
            border:none;
            background-color: transparent;
            padding: 20px 25px;
            font-size: 24px;
            font-weight:600;
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
            padding: 10px 35px;
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
            font-weight:600;
        }
        .overview a{
            text-decoration:none;
            color:black;
            font-size:35px;
        }
        .blog-context p{
            display: -webkit-box; 
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden; 
            text-overflow: ellipsis;
            line-height: 1.5;
            height: 4.5em; 
            margin-top:1rem; 
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
        blog-content hr{
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
        /* .blog-content {
            display:grid;
            grid-template-columns:30rem 30rem 30rem ;
            grid-auto-rows: 40rem;
            grid-gap:2rem;
            margin:3rem 5rem 5rem 10rem;
        }
        .content {
            background:white;
            border-radius:2%;
            box-shadow:3.5px 3.5px 3.5px 3.5px grey;
            overflow:hidden;
        }
        .thumbnail{
            margin:20px 10px 10px 40px;
            height:40%;
            width:80%;
            border-radius:3%;
        }
        .overview a{
            text-decoration:none;
            color:black;
            font-size:30px;
            font-weight:600;
        }
        .overview {
            text-align:center;
            margin:2.5px 0 2px 0;
        } */
    </style> 
</head>
<body>

        <nav>
            
            <a href="#home" style="color: rgb(0,137,255);">Home</a>
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
        <!-- <hr> -->
    <div class="blog-content">
        @foreach($data1 as $data)
        <div class="content">
            <div class="blog-content-img">
                <img src="{{ asset('/storage/' . $data->image) }}" class="thumbnail">
            </div>

            <div class="overview">
                <div class="blog-title">
                    <a href="{{ route('content', [$data->id, $d2]) }}" class="blog-content-overview">{{ $data->title }}</a>
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
