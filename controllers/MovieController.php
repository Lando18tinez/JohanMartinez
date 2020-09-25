<?php
require 'models/Movie.php';
require 'models/Status.php';
require 'models/User.php';
require 'models/Category.php';

class MovieController
{
    private $MovieModel;
    private $user;
    private $status;
    private $category;

    public function __construct()
    {
        $this ->MovieModel = new Movie;

        $this ->user = new User;
        $this ->status = new Status;
        $this ->category = new Category;
    }

    public function index()
    {
    	require 'views/layout.php';
        $Movies= $this ->MovieModel -> getAll();
        require 'views/Movie/list.php';
    }


   public function add()
    {
        $users = $this->user->getAll();
        $statuses = $this->status->getAll();
        $categories =$this->category->getAll();
        require 'views/layout.php';
        require 'views/Movie/new.php';
    }

    public function save()
    {
        //$this->MovieModel->newMovie($_REQUEST);//
        //header('Location: ?controller=Movie');//

        //Organizar en un array los datos de la tabla movie
        $dataMovie = [
            'name'          => $_POST['name'],
            'description'   => $_POST['description'],
            'user_id'       => $_POST['user_id'],
            'status_id'     => $_POST['status_id']
        ];

        //Array de categorias
        $arrayCategories = isset($_POST['categories']) ? $_POST['categories'] : [];        

        if(!empty($arrayCategories)) {
            //Inserción de la Tabla Movie
            $respMovie = $this->MovieModel->newMovie($dataMovie);

            //Obtener el ultimo ID registrado
            $lastIdMovie = $this->MovieModel->getLastId();
            //Inserción de la Tabla category_movie
            $respCategoryMovie = $this->MovieModel->saveCategoryMovie($arrayCategories, $lastIdMovie[0]->id);

        } else {
            $respMovie          = false;
            $respCategoryMovie  = false;            
        }

        $arrayResp = [];

        if($respMovie == true && $respCategoryMovie == true) {
            $arrayResp = [
                'success' => true,
                'message' => "Pelicula Creada"  
            ];
        } else {
            $arrayResp = [
                'error' => true,
                'message' => "Error Creando la Pelicula"  
            ];
        }

        echo json_encode($arrayResp);
        return;
    }
    
    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $Movie = $this->MovieModel->getById($id);
            $users = $this->user->getAll();
            $statuses = $this->status->getAll();
            require 'views/layout.php';
            require 'views/Movie/edit.php';
        } else {
            echo 'Error, Se requiere el id de la pelicula';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->MovieModel->editMovie($_POST);
            header('Location: ?controller=Movie');
        } else {
            echo 'Error intentando actualizar la pelicula';            
        }
    }

    public function delete()
    {
        $this->MovieModel->deleteMovie($_REQUEST);
        header('Location: ?controller=movie');
    }
}