<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Posts
    </title>
</head>
<body>
    <div class="form-section">
        <form action="/post/add" method="post">
                @csrf
            <div class="mb-3">
                <input type="number" name="userId" placeholder="User Id" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="title" placeholder="Title" id="" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="body" placeholder="Content" id="" class="form-control" required>
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>