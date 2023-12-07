<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page Editor</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap');
        body {
            background-color:rgb(137, 207, 240);
            color:white;
            font-family: 'Poppins', sans-serif;
            margin: 20px;
        }
        h2 {
            text-align: center;
        }
        label {
            font-size:24px;
            display: block;
            margin-bottom: 5px;
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
            background-color: rgb(129, 216, 208);
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            border:2px solid grey;
        }
        button:hover {
            background-color: #45a049;
        }
        .container{
            width:80%;
            margin:auto;
            height:80%;
        }
        #description{
            height:20vh;
        }
    </style>
</head>
<body>
    <h2>Web Page Editor</h2>

    <div class="container">
        <form action="/create" method="post">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter title">

            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="Enter description"></textarea>

            <label for="file">Upload File:</label>
            <input type="file" name="file" id="file">

            <button type="submit">Publish</button>
        </form>
    </div>
</body>
</html>