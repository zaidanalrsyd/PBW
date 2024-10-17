<<<<<<< HEAD
<?php
class HomeController extends Controller {
    public function index() {
        $data['title'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
=======
<?php
class HomeController extends Controller {
    public function index() {
        $data['title'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
>>>>>>> 7f26814c5c468e696faf86c27532b7249815719e
}