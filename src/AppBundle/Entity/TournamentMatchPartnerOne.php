<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TournamentMatchPartnerOne
 *
 * @ORM\Table(name="tournament_match_partner_one", uniqueConstraints={@ORM\UniqueConstraint(name="tournament_match_partner_one_match_id_playerprofile_id_key", columns={"match_id", "playerprofile_id"})}, indexes={@ORM\Index(name="tournament_match_partner_one_ff9c4e4a", columns={"match_id"}), @ORM\Index(name="tournament_match_partner_one_5b2dff03", columns={"playerprofile_id"})})
 * @ORM\Entity
 */
class TournamentMatchPartnerOne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tournament_match_partner_one_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\TournamentMatch
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TournamentMatch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="match_id", referencedColumnName="id")
     * })
     */
    private $match;

    /**
     * @var \AppBundle\Entity\UserProfilePlayerprofile
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserProfilePlayerprofile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="playerprofile_id", referencedColumnName="id")
     * })
     */
    private $playerprofile;



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
     * Set match
     *
     * @param \AppBundle\Entity\TournamentMatch $match
     *
     * @return TournamentMatchPartnerOne
     */
    public function setMatch(\AppBundle\Entity\TournamentMatch $match = null)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get match
     *
     * @return \AppBundle\Entity\TournamentMatch
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Set playerprofile
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $playerprofile
     *
     * @return TournamentMatchPartnerOne
     */
    public function setPlayerprofile(\AppBundle\Entity\UserProfilePlayerprofile $playerprofile = null)
    {
        $this->playerprofile = $playerprofile;

        return $this;
    }

    /**
     * Get playerprofile
     *
     * @return \AppBundle\Entity\UserProfilePlayerprofile
     */
    public function getPlayerprofile()
    {
        return $this->playerprofile;
    }
}
