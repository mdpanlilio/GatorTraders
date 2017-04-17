<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Users
 */
class Users
{
    /**
     * @var string
     */
    private $studentemail;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var integer
     */
    private $rating;

    /**
     * @var boolean
     */
    private $verification;

    /**
     * Set studentemail
     *
     * @param string $studentemail
     *
     * @return Users
     */
    public function setStudentemail($studentemail)
    {
        $this->studentemail = $studentemail;

        return $this;
    }


    /**
     * Get studentemail
     *
     * @return string
     */
    public function getStudentemail()
    {
        return $this->studentemail;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Users
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Users
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return Users
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set verification
     *
     * @param boolean $verification
     *
     * @return Users
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;

        return $this;
    }

    /**
     * Get verification
     *
     * @return boolean
     */
    public function getVerification()
    {
        return $this->verification;
    }
    /**
     * @var integer
     */
    private $studentid;


    /**
     * Get studentid
     *
     * @return integer
     */
    public function getStudentid()
    {
        return $this->studentid;
    }
}