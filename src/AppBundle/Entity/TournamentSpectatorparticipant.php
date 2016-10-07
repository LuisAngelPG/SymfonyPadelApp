<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TournamentSpectatorparticipant
 *
 * @ORM\Table(name="tournament_spectatorparticipant", uniqueConstraints={@ORM\UniqueConstraint(name="tournament_spectatorpartici_tournament_id_11a1c8d7efeab2e1_uniq", columns={"tournament_id", "player_id"})}, indexes={@ORM\Index(name="tournament_spectatorparticipant_afe72417", columns={"player_id"}), @ORM\Index(name="tournament_spectatorparticipant_656a3fdb", columns={"tournament_id"})})
 * @ORM\Entity
 */
class TournamentSpectatorparticipant
{
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
     * @ORM\SequenceGenerator(sequenceName="tournament_spectatorparticipant_id_seq", allocationSize=1, initialValue=1)
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
     * Set status
     *
     * @param string $status
     *
     * @return TournamentSpectatorparticipant
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
     * @return TournamentSpectatorparticipant
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
     * @return TournamentSpectatorparticipant
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
