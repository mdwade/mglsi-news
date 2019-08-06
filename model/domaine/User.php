<?php


class User {

	private $id;
	private $login;
	private $password;
	private $_pseudo;
	private $_userType;
    private $_jetonAuth;

    /**
     * UserDAO constructor.
     * @param $id
     * @param $login
     * @param $password
     * @param $_pseudo
     * @param $_userType
     * @param $_jetonAuth
     */
    public function __construct()
    {
      
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getUserType()
    {
        return $this->_userType;
    }

    /**
     * @param mixed $userType
     */
    public function setUserType($userType)
    {
        $this->_userType = $userType;
    }

    /**
     * @return mixed
     */
    public function getJetonAuth()
    {
        return $this->_jetonAuth;
    }

    /**
     * @param mixed $jetonAuth
     */
    public function setJetonAuth($jetonAuth)
    {
        $this->_jetonAuth = $jetonAuth;
    }

}
