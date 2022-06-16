<?php 
// session_start();
// 
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN POST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="posts.css">
</head>
<body>
    <div class="container-fluid ">
        <div class="row m-3 card-deck mx-auto"></div>
        <div class="col-md-3 m-3" id="category">
            <div class="card-header bg-secondary h4 mb-4">Select Category</div>
            <p><button class="btn btn-lg" id="btn"  name='categ'>Sports <a href=""></a></button></p>
            <p><button class="btn btn-lg" id="btn" >Fashion</button></p>
            <p><button class="btn btn-lg" id="btn" >Tech</button></p>
            <p><button class="btn btn-lg" id="btn" >Lifestyle</button></p>
            <p><button class="btn btn-lg" id="btn">Health</button></p>
        </div>
        
        <form action="save.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-9" id="post">
                <h4 class="text-center">Create amazing extrinsic contents, the world needs it</h4>
                <div>
                    <h3 id="head"></h3>
                    <p class="bg-primary p-3" id="crpost">Create posts...</p>
                    <p>Select category</p>
                    <select name="selectCategory" id="">
                        <option value="Sports" name="">Sports</option>
                        <option value="" name="Fashion">Fashion</option>
                        <option value="" name="Tech">Tech</option>
                        <option value="" name="Lifestyle">Lifestyle</option>
                        <option value="" name="Health">Health</option>

                    </select>
                    <p id="create">Post title: <input type="text" name="title"></p>
                    <p id="create">Post body: <textarea name="body" id="" cols="30" rows="10"></textarea></p>
                    <p id="create">Upload picture: <input type="file" name="pic[]" class="btn btn-lg" multiple></p>
                    <input type="submit" name="createpost" class="btn btn-lg" value="Post" style="margin-left: 30px;">
                </div>
            </div>
            <div style="justify-content: baseline;">
                Extrinsic for you...
            </div>

        </form>
    </div>
</body>
</html>