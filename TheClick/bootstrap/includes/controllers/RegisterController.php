<?php

class RegisterController extends Controller
{
	protected $viewFileName = "register"; //this will be the View that gets the data...
	protected $loginRequired = false;


	public function run()
	{
		$this->view->title = 'Registrierung';

		if($this->user->isLoggedIn)
		{
			$this->user->redirectToIndex();
		}

		$this->checkForRegisterPost();
	}



	private function checkForRegisterPost()
	{
		if(!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'register')
		{
			$requiredFields = array('username', 'email', 'password', 'password2');

			$error = false;
			$errorFields = array();

			foreach($requiredFields as $fieldName)
			{
				if(!isset($_POST[$fieldName]) || $_POST[$fieldName] == '')
				{
					$error = true;
					$errorFields[$fieldName] = "Bitte Wert eingeben!";
				}
			}

			if(!$error)
			{
				$password = $_POST['password'];
				$username = $_POST['username'];
				$email = $_POST['email'];

				if(strlen($password) < 8) //check if password is long enough
				{
					$error = true;
					$errorFields['password'] = "Passwort ist zu kurz! Bitte mindestens 8 Zeichen eingeben";
				}
				else if($password != $_POST['password2']) //check if password matches password repetition
				{
					$error = true;
					$errorFields['password2'] = "Passwort Wiederholung entspricht nicht dem gleichen Wert von Passwort!";
				}

				if(!$error)
				{
					//check if username exists already...
					if(User::existsWithUsername($username) == false)
					{
						User::createUser(array('username' => $username, 'password' => $password, 'email' => $email));

						$this->view->registerSuccessful = true;
					}
					else
					{
						$errorFields['name'] = "Benutzername ist schon vorhanden!";

						$this->view->userExistsAlready = true;
					}

				}
			}

			$this->view->errorFields = $errorFields;

		}
	}
}