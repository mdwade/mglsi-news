<?php


class Article {

    private $_id;
	private $_title;
	private $_content;
	private $_idCategorie;
	private $_photo;
	private $_pseudoAuthor;
	private $_postedDate;

    /**
     * Article constructor.
     * @param $_id
     * @param $_title
     * @param $_content
     * @param $_idCategorie
     * @param $_photo
     * @param $_pseudoAuthor
     * @param $_postedDate
     */
    public function __construct()
    {
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
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->_content = $content;
    }

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->_idCategorie;
    }

    /**
     * @param mixed $idCategorie
     */
    public function setIdCategorie($idCategorie)
    {
        $this->_idCategorie = $idCategorie;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->_photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->_photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getPseudoAuthor()
    {
        return $this->_pseudoAuthor;
    }

    /**
     * @param mixed $pseudoAuthor
     */
    public function setPseudoAuthor($pseudoAuthor)
    {
        $this->_pseudoAuthor = $pseudoAuthor;
    }

    /**
     * @return mixed
     */
    public function getPostedDate()
    {
        return $this->_postedDate;
    }

    /**
     * @param mixed $postedDate
     */
    public function setPostedDate($postedDate)
    {
        $this->_postedDate = $postedDate;
    }


}
