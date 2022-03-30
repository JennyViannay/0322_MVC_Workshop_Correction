<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>List of Recipes</title>
    </head>
    <body>
        <h1>Create new Recipe</h1>
        <?= !empty($error) ? $error : '' ?>
        <form method="POST">
            <div class="form-control">
                <label for="title">Title</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="form-control">
                <label for="description">Description</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div class="form-control">
                <button type="submit">Create</button>
            </div>
        </form>
        <script>
            
        </script>
    </body>
</html>