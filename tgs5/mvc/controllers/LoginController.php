<<<<<<< HEAD
<?php
class LoginController extends Controller {
    public function index() {
        $data['title'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function auth() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Misal autentikasi sederhana tanpa database
        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['user'] = $username;
            header('Location: ' . BASEURL . 'index.php?url=admin/index');
        } else {
            header('Location: ' . BASEURL . 'index.php?url=login/index');
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASEURL . 'index.php');
    }
=======
<?php
class LoginController extends Controller {
    public function index() {
        $data['title'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function auth() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Misal autentikasi sederhana tanpa database
        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['user'] = $username;
            header('Location: ' . BASEURL . 'index.php?url=admin/index');
        } else {
            header('Location: ' . BASEURL . 'index.php?url=login/index');
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASEURL . 'index.php');
    }
>>>>>>> 7f26814c5c468e696faf86c27532b7249815719e
}