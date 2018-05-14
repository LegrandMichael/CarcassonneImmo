<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Administrator
 *
 * @ORM\Table(name="adm_administrator")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdministratorRepository")
 */
class Administrator extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="adm_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="adm_first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     * 
     * @ORM\Column(name="adm_last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     * 
     * @ORM\Column(name="adm_phone_number", type="string", length=255, nullable=true)
     */
    private $phoneNumber;

    /**
     * One Administrator have Many Announces
     * @ORM\OneToMany(targetEntity="Announce", mappedBy="administrator")
     */
    private $announces;

    public function __construct()
    {
        $this->announces = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->firstName . " " . $this->lastName;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName.
     *
     * @param string|null $firstName
     *
     * @return Administrator
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**announce
     * Get firstName.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string|null $lastName
     *
     * @return Administrator
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phoneNumber.
     *
     * @param string|null $phoneNumber
     *
     * @return Administrator
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber.
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}
