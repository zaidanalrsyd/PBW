<<<<<<< HEAD
<?php
class Controller {
    public function model($model) {
        require_once 'models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once 'views/' . $view . '.php';
    }
=======
<?php
class Controller {
    public function model($model) {
        require_once 'models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once 'views/' . $view . '.php';
    }
>>>>>>> 7f26814c5c468e696faf86c27532b7249815719e
}