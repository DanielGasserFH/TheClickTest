<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class Game1Controller extends Controller
{
    protected $viewFileName = "game1"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {
        $this->view->title = "Übersicht";
        $this->view->username = $this->user->username;

        //$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }

}