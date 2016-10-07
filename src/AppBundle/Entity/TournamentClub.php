<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TournamentClub
 *
 * @ORM\Table(name="tournament_club")
 * @ORM\Entity
 */
class TournamentClub
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=250, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=250, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_court", type="smallint", nullable=true)
     */
    private $amountCourt;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=250, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=250, nullable=true)
     */
    private $longitude;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetimetz", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetimetz", nullable=true)
     */
    private $updated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=350, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number_pais", type="string", length=20, nullable=true)
     */
    private $phoneNumberPais;

    /**
     * @var string
     *
     * @ORM\Column(name="contactpers", type="string", length=400, nullable=true)
     */
    private $contactpers;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number_movi", type="string", length=10, nullable=true)
     */
    private $phoneNumberMovi;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number_movi_pais", type="string", length=10, nullable=true)
     */
    private $phoneNumberMoviPais;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_url", type="string", length=250, nullable=true)
     */
    private $facebookUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_url", type="string", length=250, nullable=true)
     */
    private $twitterUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="skype_username", type="string", length=100, nullable=true)
     */
    private $skypeUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="instantgram_url", type="string", length=250, nullable=true)
     */
    private $instantgramUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_contacto", type="string", length=250, nullable=true)
     */
    private $nombreContacto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contacto_responsable", type="boolean", nullable=true)
     */
    private $contactoResponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="email_contacto", type="string", length=250, nullable=true)
     */
    private $emailContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=300, nullable=true)
     */
    private $horario;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=250, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=true)
     */
    private $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=50, nullable=true)
     */
    private $province;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=50, nullable=true)
     */
    private $location;

    /**
     * @var integer
     *
         * @ORM\Column(name="amount_court_padbol", type="smallint", nullable=true)
     */
    private $amountCourtPadbol;

    /**
     * @var integer
     *
     * @ORM\Column(name="pista_cristal", type="integer", nullable=true)
     */
    private $pistaCristal;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tournament_club_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     * @ORM\Column(name="equipment_rental", type="boolean", nullable=true)
     */
    private $equipmentRental;

    /**
     * @var boolean
     * @ORM\Column(name="food_services", type="boolean", nullable=true)
     */
    private $foodServices;

    /**
     * @var boolean
     * @ORM\Column(name="disabled_access", type="boolean", nullable=true)
     */
    private $disabledAccess;

    /**
     * @var boolean
     * @ORM\Column(name="showers", type="boolean", nullable=true)
     */
    private $showers;

    /**
     * @var boolean
     * @ORM\Column(name="gym", type="boolean", nullable=true)
     */
    private $gym;

    /**
     * @var boolean
     * @ORM\Column(name="sauna", type="boolean", nullable=true)
     */
    private $sauna;

    /**
     * @var boolean
     * @ORM\Column(name="kindergarten", type="boolean", nullable=true)
     */
    private $kindergarten;

    /**
     * @var boolean
     * @ORM\Column(name="jacuzzi", type="boolean", nullable=true)
     */
    private $jacuzzi;

    /**
     * @var boolean
     * @ORM\Column(name="parking_motorcycles", type="boolean", nullable=true)
     */
    private $parkingMotorcycles;

    /**
     * @var boolean
     * @ORM\Column(name="parking_bicycles", type="boolean", nullable=true)
     */
    private $parkingBicycles;

    /**
     * @var boolean
     * @ORM\Column(name="waterpool", type="boolean", nullable=true)
     */
    private $waterpool;

    /**
     * @var boolean
     * @ORM\Column(name="locker", type="boolean", nullable=true)
     */
    private $locker;

    /**
     * @var boolean
     * @ORM\Column(name="shop", type="boolean", nullable=true)
     */
    private $shop;

    /**
     * @var boolean
     * @ORM\Column(name="wifi", type="boolean", nullable=true)
     */
    private $wifi;

    /**
     * @var boolean
     * @ORM\Column(name="playground", type="boolean", nullable=true)
     */
    private $playground;

    /**
     * @var boolean
     * @ORM\Column(name="american_tournament", type="boolean", nullable=true)
     */
    private $americanTournament;

    /**
     * @var boolean
     * @ORM\Column(name="leagues", type="boolean", nullable=true)
     */
    private $leagues;

    /**
     * @var boolean
     * @ORM\Column(name="courts", type="boolean", nullable=true)
     */
    private $courts;

    /**
     * @var integer
     * @ORM\Column(name="crystal_courts", type="integer", nullable=true)
     */
    private $crystalCourts;

    /**
     * @var integer
     * @ORM\Column(name="wall_courts", type="integer", nullable=true)
     */
    private $wallCourts;

    /**
     * @var integer
     * @ORM\Column(name="cover_courts", type="integer", nullable=true)
     */
    private $coverCourts;

    /**
     * @var integer
     * @ORM\Column(name="central_courts", type="integer", nullable=true)
     */
    private $centralCourts;

    /**
     * @var integer
     * @ORM\Column(name="individual_courts", type="integer", nullable=true)
     */
    private $individualCourts;

    /**
     * @var boolean
     * @ORM\Column(name="parking", type="boolean", nullable=true)
     */
    private $parking;

    /**
     * @var \AppBundle\Entity\AuthUser
     * @ORM\Column(name="owner_id", type="integer", nullable=true)
     */
    private $owner;

    /**
     * @var boolean
     * @ORM\Column(name="school", type="boolean", nullable=true)
     */
    private $school;

    /**
     * @var boolean
     * @ORM\Column(name="ilumination", type="boolean", nullable=true)
     */
    private $ilumination;

    /**
     *
     * @ORM\ManyToMany(targetEntity="UserProfilePlayerProfile", mappedBy="favClubs")
     */
    protected $user;


    public function setNotNulls() {
        $this->setActive(true);
        $this->setDeleted(false);
    }

    public function getInstallations() {
        $installations = array(
            "amountCourt" => $this->amountCourt,
            "crystalCourts" => $this->crystalCourts,
            "wallCourts" => $this->wallCourts,
            "coverCourts" => $this->coverCourts,
            "centralCourts" => $this->centralCourts,
            "individualCourts" => $this->individualCourts,
            "equipmentRental" => $this->equipmentRental,
            "foodServices" => $this->foodServices,
            "showers" => $this->showers,
            "disabledAccess" => $this->disabledAccess,
            "Gym" => $this->gym,
            "sauna" => $this->sauna,
            "kindergarten" => $this->kindergarten,
            "jacuzzi" => $this->jacuzzi,
            "parking" => $this->parking,
            "parkingMotorcycles" => $this->parkingMotorcycles,
            "parkingBicycles" => $this->parkingBicycles,
            "waterpool" => $this->waterpool,
            "locker" => $this->locker,
            "shop" => $this->shop,
            "wifi" => $this->wifi,
            "playground" => $this->playground,
            "school" => $this->school,
            "americanTournament" => $this->americanTournament,
            "leagues" => $this->leagues,
            "ilumination" => $this->ilumination
            );
        return $installations;
    }

 

    /**
     * Set name
     *
     * @param string $name
     *
     * @return TournamentClub
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
     * Set address
     *
     * @param string $address
     *
     * @return TournamentClub
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return TournamentClub
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set amountCourt
     *
     * @param integer $amountCourt
     *
     * @return TournamentClub
     */
    public function setAmountCourt($amountCourt)
    {
        $this->amountCourt = $amountCourt;

        return $this;
    }

    /**
     * Get amountCourt
     *
     * @return integer
     */
    public function getAmountCourt()
    {
        return $this->amountCourt;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return TournamentClub
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return TournamentClub
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return TournamentClub
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return TournamentClub
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
     * @return TournamentClub
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
     * Set active
     *
     * @param boolean $active
     *
     * @return TournamentClub
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return TournamentClub
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return TournamentClub
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return TournamentClub
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set phoneNumberPais
     *
     * @param string $phoneNumberPais
     *
     * @return TournamentClub
     */
    public function setPhoneNumberPais($phoneNumberPais)
    {
        $this->phoneNumberPais = $phoneNumberPais;

        return $this;
    }

    /**
     * Get phoneNumberPais
     *
     * @return string
     */
    public function getPhoneNumberPais()
    {
        return $this->phoneNumberPais;
    }

    /**
     * Set contactpers
     *
     * @param string $contactpers
     *
     * @return TournamentClub
     */
    public function setContactpers($contactpers)
    {
        $this->contactpers = $contactpers;

        return $this;
    }

    /**
     * Get contactpers
     *
     * @return string
     */
    public function getContactpers()
    {
        return $this->contactpers;
    }

    /**
     * Set phoneNumberMovi
     *
     * @param string $phoneNumberMovi
     *
     * @return TournamentClub
     */
    public function setPhoneNumberMovi($phoneNumberMovi)
    {
        $this->phoneNumberMovi = $phoneNumberMovi;

        return $this;
    }

    /**
     * Get phoneNumberMovi
     *
     * @return string
     */
    public function getPhoneNumberMovi()
    {
        return $this->phoneNumberMovi;
    }

    /**
     * Set phoneNumberMoviPais
     *
     * @param string $phoneNumberMoviPais
     *
     * @return TournamentClub
     */
    public function setPhoneNumberMoviPais($phoneNumberMoviPais)
    {
        $this->phoneNumberMoviPais = $phoneNumberMoviPais;

        return $this;
    }

    /**
     * Get phoneNumberMoviPais
     *
     * @return string
     */
    public function getPhoneNumberMoviPais()
    {
        return $this->phoneNumberMoviPais;
    }

    /**
     * Set facebookUrl
     *
     * @param string $facebookUrl
     *
     * @return TournamentClub
     */
    public function setFacebookUrl($facebookUrl)
    {
        $this->facebookUrl = $facebookUrl;

        return $this;
    }

    /**
     * Get facebookUrl
     *
     * @return string
     */
    public function getFacebookUrl()
    {
        return $this->facebookUrl;
    }

    /**
     * Set twitterUrl
     *
     * @param string $twitterUrl
     *
     * @return TournamentClub
     */
    public function setTwitterUrl($twitterUrl)
    {
        $this->twitterUrl = $twitterUrl;

        return $this;
    }

    /**
     * Get twitterUrl
     *
     * @return string
     */
    public function getTwitterUrl()
    {
        return $this->twitterUrl;
    }

    /**
     * Set skypeUsername
     *
     * @param string $skypeUsername
     *
     * @return TournamentClub
     */
    public function setSkypeUsername($skypeUsername)
    {
        $this->skypeUsername = $skypeUsername;

        return $this;
    }

    /**
     * Get skypeUsername
     *
     * @return string
     */
    public function getSkypeUsername()
    {
        return $this->skypeUsername;
    }

    /**
     * Set instantgramUrl
     *
     * @param string $instantgramUrl
     *
     * @return TournamentClub
     */
    public function setInstantgramUrl($instantgramUrl)
    {
        $this->instantgramUrl = $instantgramUrl;

        return $this;
    }

    /**
     * Get instantgramUrl
     *
     * @return string
     */
    public function getInstantgramUrl()
    {
        return $this->instantgramUrl;
    }

    /**
     * Set nombreContacto
     *
     * @param string $nombreContacto
     *
     * @return TournamentClub
     */
    public function setNombreContacto($nombreContacto)
    {
        $this->nombreContacto = $nombreContacto;

        return $this;
    }

    /**
     * Get nombreContacto
     *
     * @return string
     */
    public function getNombreContacto()
    {
        return $this->nombreContacto;
    }

    /**
     * Set contactoResponsable
     *
     * @param boolean $contactoResponsable
     *
     * @return TournamentClub
     */
    public function setContactoResponsable($contactoResponsable)
    {
        $this->contactoResponsable = $contactoResponsable;

        return $this;
    }

    /**
     * Get contactoResponsable
     *
     * @return boolean
     */
    public function getContactoResponsable()
    {
        return $this->contactoResponsable;
    }

    /**
     * Set emailContacto
     *
     * @param string $emailContacto
     *
     * @return TournamentClub
     */
    public function setEmailContacto($emailContacto)
    {
        $this->emailContacto = $emailContacto;

        return $this;
    }

    /**
     * Get emailContacto
     *
     * @return string
     */
    public function getEmailContacto()
    {
        return $this->emailContacto;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TournamentClub
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set horario
     *
     * @param string $horario
     *
     * @return TournamentClub
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return TournamentClub
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return TournamentClub
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set province
     *
     * @param string $province
     *
     * @return TournamentClub
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return TournamentClub
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set amountCourtPadbol
     *
     * @param integer $amountCourtPadbol
     *
     * @return TournamentClub
     */
    public function setAmountCourtPadbol($amountCourtPadbol)
    {
        $this->amountCourtPadbol = $amountCourtPadbol;

        return $this;
    }

    /**
     * Get amountCourtPadbol
     *
     * @return integer
     */
    public function getAmountCourtPadbol()
    {
        return $this->amountCourtPadbol;
    }

    /**
     * Set pistaCristal
     *
     * @param integer $pistaCristal
     *
     * @return TournamentClub
     */
    public function setPistaCristal($pistaCristal)
    {
        $this->pistaCristal = $pistaCristal;

        return $this;
    }

    /**
     * Get pistaCristal
     *
     * @return integer
     */
    public function getPistaCristal()
    {
        return $this->pistaCristal;
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
     * Set equipmentRental
     *
     * @param boolean $equipmentRental
     *
     * @return TournamentClub
     */
    public function setEquipmentRental($equipmentRental)
    {
        $this->equipmentRental = $equipmentRental;

        return $this;
    }

    /**
     * Get equipmentRental
     *
     * @return boolean
     */
    public function getEquipmentRental()
    {
        return $this->equipmentRental;
    }

    /**
     * Set foodServices
     *
     * @param boolean $foodServices
     *
     * @return TournamentClub
     */
    public function setFoodServices($foodServices)
    {
        $this->foodServices = $foodServices;

        return $this;
    }

    /**
     * Get foodServices
     *
     * @return boolean
     */
    public function getFoodServices()
    {
        return $this->foodServices;
    }

    /**
     * Set disabledAccess
     *
     * @param boolean $disabledAccess
     *
     * @return TournamentClub
     */
    public function setDisabledAccess($disabledAccess)
    {
        $this->disabledAccess = $disabledAccess;

        return $this;
    }

    /**
     * Get disabledAccess
     *
     * @return boolean
     */
    public function getDisabledAccess()
    {
        return $this->disabledAccess;
    }

    /**
     * Set showers
     *
     * @param boolean $showers
     *
     * @return TournamentClub
     */
    public function setShowers($showers)
    {
        $this->showers = $showers;

        return $this;
    }

    /**
     * Get showers
     *
     * @return boolean
     */
    public function getShowers()
    {
        return $this->showers;
    }

    /**
     * Set gym
     *
     * @param boolean $gym
     *
     * @return TournamentClub
     */
    public function setGym($gym)
    {
        $this->gym = $gym;

        return $this;
    }

    /**
     * Get gym
     *
     * @return boolean
     */
    public function getGym()
    {
        return $this->gym;
    }

    /**
     * Set sauna
     *
     * @param boolean $sauna
     *
     * @return TournamentClub
     */
    public function setSauna($sauna)
    {
        $this->sauna = $sauna;

        return $this;
    }

    /**
     * Get sauna
     *
     * @return boolean
     */
    public function getSauna()
    {
        return $this->sauna;
    }

    /**
     * Set kindergarten
     *
     * @param boolean $kindergarten
     *
     * @return TournamentClub
     */
    public function setKindergarten($kindergarten)
    {
        $this->kindergarten = $kindergarten;

        return $this;
    }

    /**
     * Get kindergarten
     *
     * @return boolean
     */
    public function getKindergarten()
    {
        return $this->kindergarten;
    }

    /**
     * Set jacuzzi
     *
     * @param boolean $jacuzzi
     *
     * @return TournamentClub
     */
    public function setJacuzzi($jacuzzi)
    {
        $this->jacuzzi = $jacuzzi;

        return $this;
    }

    /**
     * Get jacuzzi
     *
     * @return boolean
     */
    public function getJacuzzi()
    {
        return $this->jacuzzi;
    }

    /**
     * Set parkingMotorcycle
     *
     * @param boolean $parkingMotorcycle
     *
     * @return TournamentClub
     */
    public function setParkingMotorcycle($parkingMotorcycle)
    {
        $this->parkingMotorcycle = $parkingMotorcycle;

        return $this;
    }

    /**
     * Get parkingMotorcycle
     *
     * @return boolean
     */
    public function getParkingMotorcycle()
    {
        return $this->parkingMotorcycle;
    }

    /**
     * Set parkingBicycles
     *
     * @param boolean $parkingBicycles
     *
     * @return TournamentClub
     */
    public function setParkingBicycles($parkingBicycles)
    {
        $this->parkingBicycles = $parkingBicycles;

        return $this;
    }

    /**
     * Get parkingBicycles
     *
     * @return boolean
     */
    public function getParkingBicycles()
    {
        return $this->parkingBicycles;
    }

    /**
     * Set waterpool
     *
     * @param boolean $waterpool
     *
     * @return TournamentClub
     */
    public function setWaterpool($waterpool)
    {
        $this->waterpool = $waterpool;

        return $this;
    }

    /**
     * Get waterpool
     *
     * @return boolean
     */
    public function getWaterpool()
    {
        return $this->waterpool;
    }

    /**
     * Set locker
     *
     * @param boolean $locker
     *
     * @return TournamentClub
     */
    public function setLocker($locker)
    {
        $this->locker = $locker;

        return $this;
    }

    /**
     * Get locker
     *
     * @return boolean
     */
    public function getLocker()
    {
        return $this->locker;
    }

    /**
     * Set shop
     *
     * @param boolean $shop
     *
     * @return TournamentClub
     */
    public function setShop($shop)
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * Get shop
     *
     * @return boolean
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Set wifi
     *
     * @param boolean $wifi
     *
     * @return TournamentClub
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    /**
     * Get wifi
     *
     * @return boolean
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set playground
     *
     * @param boolean $playground
     *
     * @return TournamentClub
     */
    public function setPlayground($playground)
    {
        $this->playground = $playground;

        return $this;
    }

    /**
     * Get playground
     *
     * @return boolean
     */
    public function getPlayground()
    {
        return $this->playground;
    }

    /**
     * Set americanTournament
     *
     * @param boolean $americanTournament
     *
     * @return TournamentClub
     */
    public function setAmericanTournament($americanTournament)
    {
        $this->americanTournament = $americanTournament;

        return $this;
    }

    /**
     * Get americanTournament
     *
     * @return boolean
     */
    public function getAmericanTournament()
    {
        return $this->americanTournament;
    }

    /**
     * Set leagues
     *
     * @param boolean $leagues
     *
     * @return TournamentClub
     */
    public function setLeagues($leagues)
    {
        $this->leagues = $leagues;

        return $this;
    }

    /**
     * Get leagues
     *
     * @return boolean
     */
    public function getLeagues()
    {
        return $this->leagues;
    }

    /**
     * Set courts
     *
     * @param boolean $courts
     *
     * @return TournamentClub
     */
    public function setCourts($courts)
    {
        $this->courts = $courts;

        return $this;
    }

    /**
     * Get courts
     *
     * @return boolean
     */
    public function getCourts()
    {
        return $this->courts;
    }

    /**
     * Set crystalCourts
     *
     * @param integer $crystalCourts
     *
     * @return TournamentClub
     */
    public function setCrystalCourts($crystalCourts)
    {
        $this->crystalCourts = $crystalCourts;

        return $this;
    }

    /**
     * Get crystalCourts
     *
     * @return integer
     */
    public function getCrystalCourts()
    {
        return $this->crystalCourts;
    }

    /**
     * Set wallCourts
     *
     * @param integer $wallCourts
     *
     * @return TournamentClub
     */
    public function setWallCourts($wallCourts)
    {
        $this->wallCourts = $wallCourts;

        return $this;
    }

    /**
     * Get wallCourts
     *
     * @return integer
     */
    public function getWallCourts()
    {
        return $this->wallCourts;
    }

    /**
     * Set coverCourts
     *
     * @param integer $coverCourts
     *
     * @return TournamentClub
     */
    public function setCoverCourts($coverCourts)
    {
        $this->coverCourts = $coverCourts;

        return $this;
    }

    /**
     * Get coverCourts
     *
     * @return integer
     */
    public function getCoverCourts()
    {
        return $this->coverCourts;
    }

    /**
     * Set centralCourts
     *
     * @param integer $centralCourts
     *
     * @return TournamentClub
     */
    public function setCentralCourts($centralCourts)
    {
        $this->centralCourts = $centralCourts;

        return $this;
    }

    /**
     * Get centralCourts
     *
     * @return integer
     */
    public function getCentralCourts()
    {
        return $this->centralCourts;
    }

    /**
     * Set individualCourts
     *
     * @param integer $individualCourts
     *
     * @return TournamentClub
     */
    public function setIndividualCourts($individualCourts)
    {
        $this->individualCourts = $individualCourts;

        return $this;
    }

    /**
     * Get individualCourts
     *
     * @return integer
     */
    public function getIndividualCourts()
    {
        return $this->individualCourts;
    }

    /**
     * Set parking
     *
     * @param boolean $parking
     *
     * @return TournamentClub
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return boolean
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set owner
     *
     * @param integer $owner
     *
     * @return TournamentClub
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return integer
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set school
     *
     * @param boolean $school
     *
     * @return TournamentClub
     */
    public function setSchool($school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return boolean
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set ilumination
     *
     * @param boolean $ilumination
     *
     * @return TournamentClub
     */
    public function setIlumination($ilumination)
    {
        $this->ilumination = $ilumination;

        return $this;
    }

    /**
     * Get ilumination
     *
     * @return boolean
     */
    public function getIlumination()
    {
        return $this->ilumination;
    }

    /**
     * Set parkingMotorcycles
     *
     * @param boolean $parkingMotorcycles
     *
     * @return TournamentClub
     */
    public function setParkingMotorcycles($parkingMotorcycles)
    {
        $this->parkingMotorcycles = $parkingMotorcycles;

        return $this;
    }

    /**
     * Get parkingMotorcycles
     *
     * @return boolean
     */
    public function getParkingMotorcycles()
    {
        return $this->parkingMotorcycles;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\UserProfilePlayerProfile $user
     *
     * @return TournamentClub
     */
    public function addUser(\AppBundle\Entity\UserProfilePlayerProfile $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\UserProfilePlayerProfile $user
     */
    public function removeUser(\AppBundle\Entity\UserProfilePlayerProfile $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
}
