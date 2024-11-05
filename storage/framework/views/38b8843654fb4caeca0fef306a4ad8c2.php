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
        .blog-content{
            /* position:absolute; 
            float:right; */
            /* margin:8% 7% 0 0; */
            margin:5rem auto;
            /* top:10%;
            left:30%; */
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
            <h3><?php echo e($username); ?></h3>
        </div>
    </div> -->

    <nav>
        <div class="btn">
            <form action="/dboard/<?php echo e($username); ?>" method="post">
                <?php echo csrf_field(); ?>
                <button type="submit" class="dashboard-btn">Dashboard</button>
            </form>
        </div>
        <a href="/dth/<?php echo e($username); ?>">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
            <!-- <h2>BloomBard</h2> -->
        <h2><?php echo e($author); ?></h2>
    </nav>

    <div class="blog-content">
    <?php if(!empty($d2)): ?>
        <?php $__currentLoopData = $d2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="content">
            <div class="blog-content-img">
                <img src="<?php echo e(asset('/storage/' . $d->image)); ?>" class="thumbnail">
            </div>

            <div class="overview">
                <div class="blog-title">
                    <a href="<?php echo e(route('content', [$d->id, $username])); ?>" class="blog-content-overview"><?php echo e($d->title); ?></a>
                </div>

                <div class="blog-context">
                    <p><?php echo e($d->description); ?></p>
                </div>
            </div>
            
        </div>
        <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
        
    </div>
</body>
</html><?php /**PATH C:\Users\edwin\Downloads\mini project\bloggin-site-laravel-main\resources\views/profile.blade.php ENDPATH**/ ?>