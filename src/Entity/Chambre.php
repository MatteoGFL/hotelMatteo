<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre")
 * @ORM\Entity
 */
class Chambre
{
    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="etage", type="integer", nullable=false)
     */
    private $etage;

    /**
     * @var int
     *
     * @ORM\Column(name="id_status", type="integer", nullable=false)
     */
    private $idStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employe", type="integer", nullable=true)
     */
    private $idEmploye;

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getEtage(): ?int
    {
        return $this->etage;
    }

    public function setEtage(int $etage): self
    {
        $this->etage = $etage;

        return $this;
    }

    public function getIdStatus(): ?int
    {
        return $this->idStatus;
    }

    public function setIdStatus(int $idStatus): self
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    public function getIdEmploye(): ?int
    {
        return $this->idEmploye;
    }

    public function setIdEmploye($idEmploye): self
    {
        $this->idEmploye = $idEmploye;

        return $this;
    }
}