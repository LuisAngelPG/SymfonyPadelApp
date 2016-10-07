<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TournamentNotification
 *
 * @ORM\Table(name="tournament_notification", indexes={@ORM\Index(name="tournament_notification_417f1b1c", columns={"content_type_id"}), @ORM\Index(name="tournament_notification_afe72417", columns={"player_id"})})
 * @ORM\Entity
 */
class TournamentNotification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="object_id", type="integer", nullable=false)
     */
    private $objectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="action", type="integer", nullable=false)
     */
    private $action;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tournament_notification_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\DjangoContentType
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DjangoContentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_type_id", referencedColumnName="id")
     * })
     */
    private $contentType;

    /**
     * @var \AppBundle\Entity\UserProfilePlayerprofile
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserProfilePlayerprofile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     * })
     */
    private $player;



    /**
     * Set objectId
     *
     * @param integer $objectId
     *
     * @return TournamentNotification
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId
     *
     * @return integer
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set action
     *
     * @param integer $action
     *
     * @return TournamentNotification
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return integer
     */
    public function getAction()
    {
        return $this->action;
    }

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
     * Set contentType
     *
     * @param \AppBundle\Entity\DjangoContentType $contentType
     *
     * @return TournamentNotification
     */
    public function setContentType(\AppBundle\Entity\DjangoContentType $contentType = null)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return \AppBundle\Entity\DjangoContentType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set player
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $player
     *
     * @return TournamentNotification
     */
    public function setPlayer(\AppBundle\Entity\UserProfilePlayerprofile $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \AppBundle\Entity\UserProfilePlayerprofile
     */
    public function getPlayer()
    {
        return $this->player;
    }
}
