<?php
use SilverStripe\Control\Controller;
use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\ORM\PaginatedList;

class TesController extends Controller {
    private static $allowed_actions = [
        "index",
        "tes",
    ];

    public function index(){
        return 'Hello World!';
    }

    public function tes() {
        $data = array(
            'Title' => 'Hello world!',
            'Content' => 'Welcome to my page.'
        );
        return $this->customise($data)->renderWith(array('MyController', 'Page'));
    }
}
