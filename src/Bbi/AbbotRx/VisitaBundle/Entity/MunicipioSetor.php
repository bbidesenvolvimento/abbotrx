<?php

namespace Bbi\AbbotRx\VisitaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MunicipioSetor
 *
 * @ORM\Table(name="municipio_setor")
 * @ORM\Entity
 */
class MunicipioSetor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="setor_uf", type="string", length=45, nullable=true)
     */
    private $setorUf;

    /**
     * @var string
     *
     * @ORM\Column(name="principais_regioes", type="string", length=100, nullable=true)
     */
    private $principaisRegioes;

    /**
     * @var string
     *
     * @ORM\Column(name="uf", type="string", length=45, nullable=true)
     */
    private $uf;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_consultor", type="string", length=100, nullable=true)
     */
    private $nomeConsultor;



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
     * Set setorUf
     *
     * @param string $setorUf
     * @return MunicipioSetor
     */
    public function setSetorUf($setorUf)
    {
        $this->setorUf = $setorUf;

        return $this;
    }

    /**
     * Get setorUf
     *
     * @return string 
     */
    public function getSetorUf()
    {
        return $this->setorUf;
    }

    /**
     * Set principaisRegioes
     *
     * @param string $principaisRegioes
     * @return MunicipioSetor
     */
    public function setPrincipaisRegioes($principaisRegioes)
    {
        $this->principaisRegioes = $principaisRegioes;

        return $this;
    }

    /**
     * Get principaisRegioes
     *
     * @return string 
     */
    public function getPrincipaisRegioes()
    {
        return $this->principaisRegioes;
    }

    /**
     * Set uf
     *
     * @param string $uf
     * @return MunicipioSetor
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf
     *
     * @return string 
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set nomeConsultor
     *
     * @param string $nomeConsultor
     * @return MunicipioSetor
     */
    public function setNomeConsultor($nomeConsultor)
    {
        $this->nomeConsultor = $nomeConsultor;

        return $this;
    }

    /**
     * Get nomeConsultor
     *
     * @return string 
     */
    public function getNomeConsultor()
    {
        return $this->nomeConsultor;
    }
}
