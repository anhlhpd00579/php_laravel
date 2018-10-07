<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Create category</h1>
    <ul>
        <li>
            <a href="/admin/category/create">Create New</a>
        </li>
        <li>
            <a href="/admin/category">List</a>
        </li>
    </ul>
    <form action="/admin/category" method="post">
        {{csrf_field()}}
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description">
        </div>
        <div>
            <label>Image</label>
            <input type="text" name="images">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>