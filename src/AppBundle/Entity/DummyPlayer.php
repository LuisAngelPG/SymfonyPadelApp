<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DummyPlayer
 *
 * @ORM\Table(name="dummy_player")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DummyPlayerRepository")
 */
class DummyPlayer extends Player
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var \AppBundle\Entity\UserProfileEquipment
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserProfileEquipment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipment_id", referencedColumnName="id")
     * })
     */
    private $equipment;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=2, nullable=true)
     */
    private $level;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

   
    /**
     * Set level
     *
     * @param string $level
     *
     * @return DummyPlayer
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set equipment
     *
     * @param \AppBundle\Entity\UserProfileEquipment $equipment
     *
     * @return DummyPlayer
     */
    public function setEquipment(\AppBundle\Entity\UserProfileEquipment $equipment = null)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Get equipment
     *
     * @return \AppBundle\Entity\UserProfileEquipment
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Set creator
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $creator
     *
     * @return DummyPlayer
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
