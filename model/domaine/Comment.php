<?php


class Comment {
	private $_id;
	private $_content;
	private $_idArticle;
	private $pseudoAuthor;
	private $_postedDate;

    /**
     * CommentDAO constructor.
     * @param $_id
     * @param $_content
     * @param $_idArticle
     * @param $_postedDate
     */
    public function __construct($_id, $_content, $_idArticle, $_postedDate)
    {
        $this->_id = $_id;
        $this->_content = $_content;
        $this->_idArticle = $_idArticle;
        $this->_postedDate = $_postedDate;
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
    public function getIdArticle()
    {
        return $this->_idArticle;
    }

    /**
     * @param mixed $idArticle
     */
    public function setIdArticle($idArticle)
    {
        $this->_idArticle = $idArticle;
    }

    /**
     * @return mixed
     */
    public function getPseudoAuthor()
    {
        return $this->pseudoAuthor;
    }

    /**
     * @param mixed $pseudoAuthor
     */
    public function setPseudoAuthor($pseudoAuthor)
    {
        $this->pseudoAuthor = $pseudoAuthor;
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
