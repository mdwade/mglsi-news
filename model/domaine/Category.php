<?php


class Category {
	private $_id;
	private $_libelle;

    /**
     * CategoryDAO constructor.
     * @param $_id
     * @param $_libelle
     */
    public function __construct($_id, $_libelle)
    {
        $this->_id = $_id;
        $this->_libelle = $_libelle;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->_libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->_libelle = $libelle;
    }


}
