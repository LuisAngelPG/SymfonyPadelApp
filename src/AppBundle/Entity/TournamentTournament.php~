<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TournamentTournament
 *
 * @ORM\Table(name="tournament_tournament", indexes={@ORM\Index(name="tournament_tournament_7115697a", columns={"club_id"}), @ORM\Index(name="tournament_tournament_3700153c", columns={"creator_id"})})
 * @ORM\Entity
 */
class TournamentTournament
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="scoring", type="string", length=10, nullable=false)
     */
    private $scoring;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_players", type="integer", nullable=true)
     */
    private $amountPlayers;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_partners", type="integer", nullable=true)
     */
    private $amountPartners;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_courts", type="integer", nullable=true)
     */
    private $amountCourts;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=8, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="metadata", type="text", nullable=true)
     */
    private $metadata;

    /**
     * @var string
     *
     * @ORM\Column(name="local_club_name", type="string", length=250, nullable=true)
     */
    private $localClubName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tournament_tournament_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\TournamentClub
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TournamentClub")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="club_id", referencedColumnName="id")
     * })
     */
    private $club;

    /**
     * @var \AppBundle\Entity\UserProfilePlayerprofile
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserProfilePlayerprofile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creator_id", referencedColumnName="id")
     * })
     */
    private $creator;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return TournamentTournament
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return TournamentTournament
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return TournamentTournament
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set scoring
     *
     * @param string $scoring
     *
     * @return TournamentTournament
     */
    public function setScoring($scoring)
    {
        $this->scoring = $scoring;

        return $this;
    }

    /**
     * Get scoring
     *
     * @return string
     */
    public function getScoring()
    {
        return $this->scoring;
    }

    /**
     * Set amountPlayers
     *
     * @param integer $amountPlayers
     *
     * @return TournamentTournament
     */
    public function setAmountPlayers($amountPlayers)
    {
        $this->amountPlayers = $amountPlayers;

        return $this;
    }

    /**
     * Get amountPlayers
     *
     * @return integer
     */
    public function getAmountPlayers()
    {
        return $this->amountPlayers;
    }

    /**
     * Set amountPartners
     *
     * @param integer $amountPartners
     *
     * @return TournamentTournament
     */
    public function setAmountPartners($amountPartners)
    {
        $this->amountPartners = $amountPartners;

        return $this;
    }

    /**
     * Get amountPartners
     *
     * @return integer
     */
    public function getAmountPartners()
    {
        return $this->amountPartners;
    }

    /**
     * Set amountCourts
     *
     * @param integer $amountCourts
     *
     * @return TournamentTournament
     */
    public function setAmountCourts($amountCourts)
    {
        $this->amountCourts = $amountCourts;

        return $this;
    }

    /**
     * Get amountCourts
     *
     * @return integer
     */
    public function getAmountCourts()
    {
        return $this->amountCourts;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return TournamentTournament
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return TournamentTournament
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return TournamentTournament
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set sharingCode
     *
     * @param string $sharingCode
     *
     * @return TournamentTournament
     */
    public function setSharingCode($sharingCode)
    {
        $this->sharingCode = $sharingCode;

        return $this;
    }

    /**
     * Get sharingCode
     *
     * @return string
     */
    public function getSharingCode()
    {
        return $this->sharingCode;
    }

    /**
     * Set metadata
     *
     * @param string $metadata
     *
     * @return TournamentTournament
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Get metadata
     *
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set localClubName
     *
     * @param string $localClubName
     *
     * @return TournamentTournament
     */
    public function setLocalClubName($localClubName)
    {
        $this->localClubName = $localClubName;

        return $this;
    }

    /**
     * Get localClubName
     *
     * @return string
     */
    public function getLocalClubName()
    {
        return $this->localClubName;
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
     * Set club
     *
     * @param \AppBundle\Entity\TournamentClub $club
     *
     * @return TournamentTournament
     */
    public function setClub(\AppBundle\Entity\TournamentClub $club = null)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return \AppBundle\Entity\TournamentClub
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * Set creator
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $creator
     *
     * @return TournamentTournament
     */
    public function setCreator(\AppBundle\Entity\UserProfilePlayerprofile $creator = null)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return \AppBundle\Entity\UserProfilePlayerprofile
     */
    public function getCreator()
    {
        return $this->creator;
    }
}
