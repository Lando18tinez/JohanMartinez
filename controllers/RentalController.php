<?php

require 'models/Rental.php';
require 'models/Status.php';
require 'models/User.php';
require 'models/Movie.php';

class RentalController
{
    private $RentalModel;
    private $user;
    private $status;
    private $movie;

    public function __construct()
    {
        $this ->RentalModel = new Rental;

        $this ->user = new User;
        $this ->status = new Status;
        $this ->movie = new Movie;
    }

    public function index()
    {
    	require 'views/layout.php';
        $Rentals = $this ->RentalModel -> getAll();
        require 'views/Rental/list.php';
    }


   public function add()
    {
        $users = $this->user->getAll();
        $statuses = $this->status->getAll();
        $movies = $this->movie->getAll();
        require 'views/layout.php';
        require 'views/Rental/new.php';
    }

    public function save()
    {
        //$this->RentalModel->newRental($_REQUEST);//
        //header('Location: ?controller=Rental');//

        //Organizar en un array los datos de la tabla rental
        $dataRental = [
            'start_date'    => $_POST['start_date'],
            'end_date'      => $_POST['end_date'],
            'total'         => $_POST['total'],
            'user_id'       => $_POST['user_id'],
            'statuses_id'     => $_POST['statuses_id']
        ];

        //Array de peliculas
        $arrayMovies = isset($_POST['movies']) ? $_POST['movies'] : [];        

        if(!empty($arrayMovies)) {
            //Inserción de la Tabla rental
            $respRental = $this->RentalModel->newRental($dataRental);

            //Obtener el ultimo ID registrado
            $lastIdRental = $this->RentalModel->getLastId();
            //Inserción de la Tabla movie_rental
            $respMovie = $this->RentalModel->saveMovie($arrayMovies, $lastIdRental[0]->id);

        } else {
            $respRental         = false;
            $respMovie          = false;            
        }

        $arrayResp = [];

        if($respRental == true && $respMovie == true) {
            $arrayResp = [
                'success' => true,
                'message' => "Renta Creada"  
            ];
        } else {
            $arrayResp = [
                'error' => true,
                'message' => "Error Creando la Renta"  
            ];
        }

        echo json_encode($arrayResp);
        return;
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $Rental = $this->RentalModel->getById($id);

            $users = $this->user->getAll();
            $statuses = $this->status->getAll();
            require 'views/layout.php';
            require 'views/Rental/edit.php';
        } else {
            echo 'Error, Se requiere el id de l renta';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->RentalModel->editRental($_POST);
            header('Location: ?controller=Rental');
        } else {
            echo 'Error intentando actualizar una Renta';            
        }
    }

    public function delete()
    {
        $this->RentalModel->deleteRental($_REQUEST);
        header('Location: ?controller=Rental');
    }
}