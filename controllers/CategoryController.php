<?php

require 'models/Category.php';
require 'models/Status.php';
class CategoryController
{
    private $CategoryModel;

    private $status;

    public function __construct()
    {
        $this ->CategoryModel = new Category;
        $this->status = new Status;
    }

    public function index()
    {
    	require 'views/layout.php';
        $Categories= $this ->CategoryModel -> getAll();
        require 'views/Category/list.php';
    }


   public function add()
    {
        $statuses = $this->status->getAll();
        require 'views/layout.php';
        require 'views/Category/new.php';
    }

    public function save()
    {
        $this->CategoryModel->newCategory($_REQUEST);
        header('Location: ?controller=Category');
    }
    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $Category = $this->CategoryModel->getById($id);

            $statuses = $this ->status -> getAll();
            require 'views/layout.php';
            require 'views/Category/edit.php';
        } else {
            echo 'Error, Se requiere el id de la Categoria';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->CategoryModel->editCategory($_POST);
            header('Location: ?controller=Category');
        } else {
            echo 'Error intentando actualizar una Categoria';            
        }
    }

    public function delete()
    {
        $this->CategoryModel->deleteCategory($_REQUEST);
        header('Location: ?controller=Category');
    }
}