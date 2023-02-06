<?php

namespace Entity;

class Annonce
{
    private $villedep,
        $villearr,
        $date,
        $voitmodele,
        $nbplaces,
        $email,
        $desc;

    /**
     * @return mixed
     */
    public function getVilledep()
    {
        return $this->villedep;
    }

    /**
     * @param mixed $villedep
     */
    public function setVilledep($villedep)
    {
        $this->villedep = $villedep;
    }

    /**
     * @return mixed
     */
    public function getVillearr()
    {
        return $this->villearr;
    }

    /**
     * @param mixed $villearr
     */
    public function setVillearr($villearr)
    {
        $this->villearr = $villearr;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getVoitmodele()
    {
        return $this->voitmodele;
    }

    /**
     * @param mixed $voitmodele
     */
    public function setVoitmodele($voitmodele)
    {
        $this->voitmodele = $voitmodele;
    }

    /**
     * @return mixed
     */
    public function getNbplaces()
    {
        return $this->nbplaces;
    }

    /**
     * @param mixed $nbplaces
     */
    public function setNbplaces($nbplaces)
    {
        $this->nbplaces = $nbplaces;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

}