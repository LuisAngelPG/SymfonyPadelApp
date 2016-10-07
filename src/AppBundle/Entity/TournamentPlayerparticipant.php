<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TournamentPlayerparticipant
 *
 * @ORM\Table(name="tournament_playerparticipant", uniqueConstraints={@ORM\UniqueConstraint(name="tournament_playerparticipan_tournament_id_58a035d515dd3bf6_uniq", columns={"tournament_id", "player_id"})}, indexes={@ORM\Index(name="tournament_playerparticipant_656a3fdb", columns={"tournament_id"}), @ORM\Index(name="tournament_playerparticipant_afe72417", columns={"player_id"})})
 * @ORM\Entity
 */
class TournamentPlayerparticipant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="orderPlay", type="integer", nullable=false)
     */
    private $orderPlay;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=10, nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tournament_playerparticipant_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\TournamentTournament
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TournamentTournament")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tournament_id", referencedColumnName="id")
     * })
     */
    private $tournament;

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
     * Set order
     *
     * @param integer $order
     *
     * @return TournamentPlayerparticipant
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return TournamentPlayerparticipant
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tournament
     *
     * @param \AppBundle\Entity\TournamentTournament $tournament
     *
     * @return TournamentPlayerparticipant
     */
    public function setTournament(\AppBundle\Entity\TournamentTournament $tournament = null)
    {
        $this->tournament = $tournament;

        return $this;
    }

    /**
     * Get tournament
     *
     * @return \AppBundle\Entity\TournamentTournament
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * Set player
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $player
     *
     * @return TournamentPlayerparticipant
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

    /**
     * Set testTournament
     *
     * @param \AppBundle\Entity\TournamentTournament $testTournament
     *
     * @return TournamentPlayerparticipant
     */
    public function setTestTournament(\AppBundle\Entity\TournamentTournament $testTournament = null)
    {
        $this->testTournament = $testTournament;

        return $this;
    }

    /**
     * Get testTournament
     *
     * @return \AppBundle\Entity\TournamentTournament
     */
    public function getTestTournament()
    {
        return $this->testTournament;
    }

    /**
     * Set orderPlay
     *
     * @param integer $orderPlay
     *
     * @return TournamentPlayerparticipant
     */
    public function setOrderPlay($orderPlay)
    {
        $this->orderPlay = $orderPlay;

        return $this;
    }

    /**
     * Get orderPlay
     *
     * @return integer
     */
    public function getOrderPlay()
    {
        return $this->orderPlay;
    }
}
