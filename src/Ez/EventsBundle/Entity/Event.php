<?php

namespace Ez\EventsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Ez\EventsBundle\Entity\Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="Ez\EventsBundle\Repository\EventRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Event
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    public $title;

    /**
     * @var string $titleSlug
     * 
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(name="title_slug", type="string", length=255, unique=true)
     */
    public $titleSlug;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    public $description;

    /**
     * @var datetime $eventDate
     *
     * @ORM\Column(name="event_date", type="datetime")
     */
    public $eventDate;

    /**
     * @var datetime $createdOn
     *
     * @ORM\Column(name="created_on", type="datetime")
     */
    public $createdOn;

    /**
     * @var datetime $updatedOn
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true)
     */
    public $updatedOn;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set titleSlug
     *
     * @param string $titleSlug
     */
    public function setTitleSlug($titleSlug)
    {
        $this->titleSlug = $titleSlug;
    }

    /**
     * Get titleSlug
     *
     * @return string 
     */
    public function getTitleSlug()
    {
        return $this->titleSlug;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set eventDate
     *
     * @param datetime $eventDate
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
    }

    /**
     * Get eventDate
     *
     * @return datetime 
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set createdOn
     *
     * @param datetime $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Get createdOn
     *
     * @return datetime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set updatedOn
     *
     * @param datetime $updatedOn
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;
    }

    /**
     * Get updatedOn
     *
     * @return datetime 
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }
    
    /**
     * @ORM\prePersist
     */
    public function prePersist()
    {
        $this->createdOn = new \DateTime();
    }
    
    /**
     * @ORM\preUpdate
     */
    public function preUpdate()
    {
        $this->updatedOn = new \DateTime();
    }
}