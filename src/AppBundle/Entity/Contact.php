<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @var user
     *@ORM\ManyToMany(targetEntity="User",inversedBy="contacts")
     * @ORM\JoinColumn(name="idBoundedUser",referencedColumnName="id")
     */
    protected $user;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Get id
     *
     * @return int
     */


    /**
     * @var int
     *
     * @ORM\Column(name="idBoundedUser", type="integer")


     */
    protected $idBoundedUser;
    /**
     * @var string
     *
     * @ORM\Column(name="nameContact", type="string")


     */
    protected $nameContact;
    /**
     * @var string
     *
     * @ORM\Column(name="mailContact", type="string")


     */
    protected $mailContact;


    /**
     * @var string
     *
     * @ORM\Column(name="adressContact", type="string")


     */
    protected $adressContact;
    /**
     * @var string
     *
     * @ORM\Column(name="siteWebContact", type="string")


     */
    protected $siteWebContact;
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getIdBoundedUser()
    {
        return $this->idBoundedUser;
    }

    /**
     * @return int
     */
    public function getNameContact()
    {
        return $this->nameContact;
    }

    /**
     * @return string
     */
    public function getMailContact()
    {
        return $this->mailContact;
    }

    /**
     * @return string
     */
    public function getAdressContact()
    {
        return $this->adressContact;
    }

    /**
     * @return string
     */
    public function getSiteWebContact()
    {
        return $this->siteWebContact;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set idBoundedUser
     *
     * @param integer $idBoundedUser
     *
     * @return Contact
     */
    public function setIdBoundedUser($idBoundedUser)
    {
        $this->idBoundedUser = $idBoundedUser;

        return $this;
    }

    /**
     * Set nameContact
     *
     * @param string $nameContact
     *
     * @return Contact
     */
    public function setNameContact($nameContact)
    {
        $this->nameContact = $nameContact;

        return $this;
    }

    /**
     * Set mailContact
     *
     * @param string $mailContact
     *
     * @return Contact
     */
    public function setMailContact($mailContact)
    {
        $this->mailContact = $mailContact;

        return $this;
    }

    /**
     * Set adressContact
     *
     * @param string $adressContact
     *
     * @return Contact
     */
    public function setAdressContact($adressContact)
    {
        $this->adressContact = $adressContact;

        return $this;
    }

    /**
     * Set siteWebContact
     *
     * @param string $siteWebContact
     *
     * @return Contact
     */
    public function setSiteWebContact($siteWebContact)
    {
        $this->siteWebContact = $siteWebContact;

        return $this;
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Contact
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
}
