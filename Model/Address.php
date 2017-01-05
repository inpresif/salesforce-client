<?php

namespace Xsolve\SalesforceClient\Model;

use JMS\Serializer\Annotation\Type;

class Address
{
    /**
     * @var string|null
     * @Type("string")
     */
    protected $city;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $country;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $countryCode;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $geocodeAccuracy;

    /**
     * @var float|null
     * @Type("float")
     */
    protected $latitude;

    /**
     * @var float|null
     * @Type("float")
     */
    protected $longitude;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $postalCode;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $state;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $stateCode;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $street;

    /**
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return string|null
     */
    public function getGeocodeAccuracy()
    {
        return $this->geocodeAccuracy;
    }

    /**
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }

    public function setCity(string $city) : Address
    {
        $this->city = $city;

        return $this;
    }

    public function setCountry(string $country) : Address
    {
        $this->country = $country;
        return $this;
    }

    public function setCountryCode(string $countryCode) : Address
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function setGeocodeAccuracy(string $geocodeAccuracy) : Address
    {
        $this->geocodeAccuracy = $geocodeAccuracy;
        return $this;
    }

    public function setLatitude(float $latitude) : Address
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function setLongitude(float $longitude) : Address
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function setPostalCode(string $postalCode) : Address
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function setState(string $state) : Address
    {
        $this->state = $state;
        return $this;
    }

    public function setStateCode(string $stateCode) : Address
    {
        $this->stateCode = $stateCode;
        return $this;
    }

    public function setStreet(string $street) : Address
    {
        $this->street = $street;
        return $this;
    }
}