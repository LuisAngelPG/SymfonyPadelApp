<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TournamentMatch
 *
 * @ORM\Table(name="tournament_match", indexes={@ORM\Index(name="tournament_match_97bf3b98", columns={"round_id"})})
 * @ORM\Entity
 */
class TournamentMatch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="score_one", type="integer", nullable=false)
     */
    private $scoreOne;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_two", type="integer", nullable=false)
     */
    private $scoreTwo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetimetz", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetimetz", nullable=false)
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(name="metadata_1", type="string", length=250, nullable=true)
     */
    private $metadata1;

    /**
     * @var string
     *
     * @ORM\Column(name="metadata_2", type="string", length=250, nullable=true)
     */
    private $metadata2;

    /**
     * @var integer
     *
     * @ORM\Column(name="court", type="integer", nullable=false)
     */
    private $court;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tournament_match_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\TournamentRound
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TournamentRound")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="round_id", referencedColumnName="id")
     * })
     */
    private $round;



    /**
     * Set scoreOne
     *
     * @param integer $scoreOne
     *
     * @return TournamentMatch
     */
    public function setScoreOne($scoreOne)
    {
        $this->scoreOne = $scoreOne;

        return $this;
    }

    /**
     * Get scoreOne
     *
     * @return integer
     */
    public function getScoreOne()
    {
        return $this->scoreOne;
    }

    /**
     * Set scoreTwo
     *
     * @param integer $scoreTwo
     *
     * @return TournamentMatch
     */
    public function setScoreTwo($scoreTwo)
    {
        $this->scoreTwo = $scoreTwo;

        return $this;
    }

    /**
     * Get scoreTwo
     *
     * @return integer
     */
    public function getScoreTwo()
    {
        return $this->scoreTwo;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return TournamentMatch
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
     * @return TournamentMatch
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
     * Set metadata1
     *
     * @param string $metadata1
     *
     * @return TournamentMatch
     */
    public function setMetadata1($metadata1)
    {
        $this->metadata1 = $metadata1;

        return $this;
    }

    /**
     * Get metadata1
     *
     * @return string
     */
    public function getMetadata1()
    {
        return $this->metadata1;
    }

    /**
     * Set metadata2
     *
     * @param string $metadata2
     *
     * @return TournamentMatch
     */
    public function setMetadata2($metadata2)
    {
        $this->metadata2 = $metadata2;

        return $this;
    }

    /**
     * Get metadata2
     *
     * @return string
     */
    public function getMetadata2()
    {
        return $this->metadata2;
    }

    /**
     * Set court
     *
     * @param integer $court
     *
     * @return TournamentMatch
     */
    public function setCourt($court)
    {
        $this->court = $court;

        return $this;
    }

    /**
     * Get court
     *
     * @return integer
     */
    public function getCourt()
    {
        return $this->court;
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
     * Set round
     *
     * @param \AppBundle\Entity\TournamentRound $round
     *
     * @return TournamentMatch
     */
    public function setRound(\AppBundle\Entity\TournamentRound $round = null)
    {
        $this->round = $round;

        return $this;
    }

    /**
     * Get round
     *
     * @return \AppBundle\Entity\TournamentRound
     */
    public function getRound()
    {
        return $this->round;
    }
}
