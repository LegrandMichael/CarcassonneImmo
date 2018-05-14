<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;



/**
 * Announce
 *
 * @ORM\Table(name="ann_announce")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnounceRepository")
 * @Vich\Uploadable
 */
class Announce
{
    /**
     * @var int
     *
     * @ORM\Column(name="ann_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="ann_title", type="string", length=255) 
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="ann_room_number", type="integer")
     */
    private $roomNumber;

    /**
     * @var float
     *
     * @ORM\Column(name="ann_price", type="float")
     */
    private $price;

    /**
     * @var string
     * 
     * @ORM\Column(name="ann_picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var File
     * 
     * @Vich\UploadableField(mapping="announce_pictures", fileNameProperty="picture")
     * @Assert\Image(
     *    maxSize = "5M",
     *    mimeTypes = {"image/jpeg", "image/png"},
     *    mimeTypesMessage = "Chosen file is not standard",
     *    notFoundMessage = "No file found",
     *    uploadErrorMessage = "An error occurred during the upload",
     *    maxSizeMessage = "The file is too large"
     * )
     */
    private $pictureFile;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * Many Announces have One Category
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="cat_oid", referencedColumnName="cat_oid")
     */
    private $category;

    /**
     * Many Announces have Many Customers
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="announces")
     * @ORM\JoinColumn(name="cus_oid", referencedColumnName="cus_oid")
     */
    private $customer;

    /**
     * Many Announces have One Administrator
     * @ORM\ManyToOne(targetEntity="Administrator", inversedBy="announces")
     * @ORM\JoinColumn(name="adm_oid", referencedColumnName="adm_oid")
     */
    private $administrator;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setPictureFile(File $picture = null)
    {
        $this->pictureFile = $picture;

        if (null !== $picture) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getPictureFile()
    {
        return $this->pictureFile;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Announce
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set roomNumber.
     *
     * @param int $roomNumber
     *
     * @return Announce
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * Get roomNumber.
     *
     * @return int
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * Set price.
     *
     * @param float $price
     *
     * @return Announce
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Announce
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set category.
     *
     * @param \AppBundle\Entity\Category|null $category
     *
     * @return Announce
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \AppBundle\Entity\Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }
}
