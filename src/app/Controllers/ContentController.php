<?php

class ContentController
{
    use Validator;
    public function closedPage()
    {
        Auth::protect();

        require_once APP_DIR . 'views/closed.php';
    }

}

