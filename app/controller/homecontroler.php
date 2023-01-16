<?php
    class HomeController {
        private $validPages = ['dashboard', 'form', 'home', 'register' , 'login'];
        private $errorPages = ['404', '500'];

        public function displayPage() {
            $page = $this->getPage();
            if (in_array($page, $this->validPages)) {
                $this->includePage($page);
            } elseif (in_array($page, $this->errorPages)) {
                $this->includeErrorPage($page);
            } else {
                $this->includeErrorPage('404');
            }
        }

        private function includePage($page) {
            $file = __DIR__ . '/../view/' . $page . '.php';
            if (file_exists($file)) {
                include $file;
            } else {
                echo 'File not found';
            }
        }

        private function includeErrorPage($page) {
            $file = __DIR__ . '/../view/error/' . $page . '.php';
            if (file_exists($file)) {
                include $file;
            } else {
                echo 'Error File not found';
            }
        }

        private function getPage() {
            if(isset($_GET['page']) && $_GET['page']!=NULL) {
                return $_GET['page'];
            }
            return 'home';
        }
    }
?>