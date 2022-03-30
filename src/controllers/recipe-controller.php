
<?php 

require __DIR__ . '/../models/recipe-model.php';

function home(): void
{
    var_dump('je passe dans recipe-controller.php function home()');
    $recipes = getAllRecipes();
    require __DIR__ . '/../views/recipes/index.php';
}

function add(): void
{
    var_dump('je passe dans recipe-controller.php function add()');
    $error = '';

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $recipe = array_map('trim', $_POST);
        
        if (!empty($_POST['title']) && !empty($_POST['description'])) {
            saveRecipe($recipe);
            header('Location: /');
        } else {
            $error = "Tous les champs sont requis";
        }
    }
    require __DIR__ . '/../views/recipes/form.php';
}

function show($id): void
{
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]]);
    if (false === $id || null === $id) {
        header("Location: /");
        exit("Wrong input parameter");
    }
    
    $recipe = getOneById($id);

    if (!isset($recipe['title']) || !isset($recipe['description'])) {
        header("Location: /");
        exit("Recipe not found");
    }
    require __DIR__ . '/../views/recipes/show.php';
}