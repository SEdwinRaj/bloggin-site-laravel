<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page Editor</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
        body {
            background-color:rgb(240,240,240);
            color:black;
            font-family: 'lato', sans-serif;
            margin: 20px;
        }
        h2 {
            margin-top: 50px;
            font-size: 30px;
            text-align: center;
        }
        label {
            font-size:24px;
            display: block;
            margin-bottom: 5px;
            font-weight:600;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            padding: 10px;
            font-size:20px;
            background-color: rgb(0,137,255);
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            /* border:2px solid grey; */
            border-radius:3rem;
        }
        button:hover {
            background-color: #45a049;
        }
        .container{
            width:70%;
            margin:auto;
            height:80%;
        }
        #description{
            height:20vh;
        }
        .error {
            color:red;
            font-size:1rem;
            padding:.5rem 0 .5rem 0;
        }
    </style>
</head>
<body>
    <h2>Web Page Editor</h2>

    <div class="container">
        <form action="/create/<?php echo e($username); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter title">

            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="Enter description"></textarea>

            <?php if(!empty($error)): ?>
                <div class='error'>
                    <?php echo e($error); ?>

                </div>
            <?php endif; ?>

            <label for="file">Upload File:</label>
            <input type="file" name="image" id="file">

            <div class="submit-button" id="submit-button">
                <button type="submit" >Publish</button>
            </div>

        </form>
    </div>
</body>
</html><?php /**PATH C:\Users\edwin\Downloads\mini project\bloggin-site-laravel-main\resources\views/create.blade.php ENDPATH**/ ?>