<?php

namespace Bbi\AbbotRx\VisitaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visita
 *
 * @ORM\Table(name="visita")
 * @ORM\Entity
 */
class Visita
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
     * @ORM\Column(name="time", type="string", length=50, nullable=true)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="setor", type="string", length=45, nullable=true)
     */
    private $setor;

    /**
     * @var string
     *
     * @ORM\Column(name="consultor", type="string", length=100, nullable=true)
     */
    private $consultor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_realizada_planejada", type="datetime", nullable=true)
     */
    private $dataRealizadaPlanejada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_equipamento", type="datetime", nullable=true)
     */
    private $dataEquipamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_servidor", type="datetime", nullable=true)
     */
    private $dataServidor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_perfil", type="string", length=45, nullable=true)
     */
    private $tipoPerfil;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=100, nullable=true)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="crm_cnpj", type="string", length=100, nullable=true)
     */
    private $crmCnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="espec_atuacao", type="string", length=45, nullable=true)
     */
    private $especAtuacao;

    /**
     * @var string
     *
     * @ORM\Column(name="frequencia", type="string", length=45, nullable=true)
     */
    private $frequencia;

    /**
     * @var string
     *
     * @ORM\Column(name="visita_acompanhada", type="string", length=255, nullable=true)
     */
    private $visitaAcompanhada;

    /**
     * @var string
     *
     * @ORM\Column(name="team_id", type="string", length=45, nullable=true)
     */
    private $teamId;

    /**
     * @var string
     *
     * @ORM\Column(name="alignment_id", type="string", length=45, nullable=true)
     */
    private $alignmentId;

    /**
     * @var string
     *
     * @ORM\Column(name="event_id", type="string", length=45, nullable=true)
     */
    private $eventId;

    /**
     * @var string
     *
     * @ORM\Column(name="programada_naoprog", type="string", length=45, nullable=true)
     */
    private $programadaNaoprog;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_visita", type="string", length=45, nullable=true)
     */
    private $tipoVisita;

    /**
     * @var string
     *
     * @ORM\Column(name="event_type", type="string", length=45, nullable=true)
     */
    private $eventType;

    /**
     * @var string
     *
     * @ORM\Column(name="painel", type="string", length=45, nullable=true)
     */
    private $painel;

    /**
     * @var string
     *
     * @ORM\Column(name="potencial", type="string", length=45, nullable=true)
     */
    private $potencial;

    /**
     * @var string
     *
     * @ORM\Column(name="status_da_visita", type="string", length=45, nullable=true)
     */
    private $statusDaVisita;

    /**
     * @var string
     *
     * @ORM\Column(name="produto1", type="string", length=100, nullable=true)
     */
    private $produto1;

    /**
     * @var string
     *
     * @ORM\Column(name="produto2", type="string", length=100, nullable=true)
     */
    private $produto2;

    /**
     * @var string
     *
     * @ORM\Column(name="produto3", type="string", length=100, nullable=true)
     */
    private $produto3;

    /**
     * @var string
     *
     * @ORM\Column(name="produto4", type="string", length=100, nullable=true)
     */
    private $produto4;

    /**
     * @var string
     *
     * @ORM\Column(name="produto5", type="string", length=100, nullable=true)
     */
    private $produto5;

    /**
     * @var string
     *
     * @ORM\Column(name="produto6", type="string", length=100, nullable=true)
     */
    private $produto6;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="string", length=255, nullable=true)
     */
    private $comentarios;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=45, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios1", type="string", length=255, nullable=true)
     */
    private $comentarios1;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios2", type="string", length=255, nullable=true)
     */
    private $comentarios2;

    /**
     * @var \Planilha
     *
     * @ORM\ManyToOne(targetEntity="Planilha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planilha_id", referencedColumnName="id")
     * })
     */
    private $planilha;



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
     * Set time
     *
     * @param string $time
     * @return Visita
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set setor
     *
     * @param string $setor
     * @return Visita
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get setor
     *
     * @return string 
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set consultor
     *
     * @param string $consultor
     * @return Visita
     */
    public function setConsultor($consultor)
    {
        $this->consultor = $consultor;

        return $this;
    }

    /**
     * Get consultor
     *
     * @return string 
     */
    public function getConsultor()
    {
        return $this->consultor;
    }

    /**
     * Set dataRealizadaPlanejada
     *
     * @param \DateTime $dataRealizadaPlanejada
     * @return Visita
     */
    public function setDataRealizadaPlanejada($dataRealizadaPlanejada)
    {
        $this->dataRealizadaPlanejada = $dataRealizadaPlanejada;

        return $this;
    }

    /**
     * Get dataRealizadaPlanejada
     *
     * @return \DateTime 
     */
    public function getDataRealizadaPlanejada()
    {
        return $this->dataRealizadaPlanejada;
    }

    /**
     * Set dataEquipamento
     *
     * @param \DateTime $dataEquipamento
     * @return Visita
     */
    public function setDataEquipamento($dataEquipamento)
    {
        $this->dataEquipamento = $dataEquipamento;

        return $this;
    }

    /**
     * Get dataEquipamento
     *
     * @return \DateTime 
     */
    public function getDataEquipamento()
    {
        return $this->dataEquipamento;
    }

    /**
     * Set dataServidor
     *
     * @param \DateTime $dataServidor
     * @return Visita
     */
    public function setDataServidor($dataServidor)
    {
        $this->dataServidor = $dataServidor;

        return $this;
    }

    /**
     * Get dataServidor
     *
     * @return \DateTime 
     */
    public function getDataServidor()
    {
        return $this->dataServidor;
    }

    /**
     * Set tipoPerfil
     *
     * @param string $tipoPerfil
     * @return Visita
     */
    public function setTipoPerfil($tipoPerfil)
    {
        $this->tipoPerfil = $tipoPerfil;

        return $this;
    }

    /**
     * Get tipoPerfil
     *
     * @return string 
     */
    public function getTipoPerfil()
    {
        return $this->tipoPerfil;
    }

    /**
     * Set customerId
     *
     * @param string $customerId
     * @return Visita
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return string 
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set crmCnpj
     *
     * @param string $crmCnpj
     * @return Visita
     */
    public function setCrmCnpj($crmCnpj)
    {
        $this->crmCnpj = $crmCnpj;

        return $this;
    }

    /**
     * Get crmCnpj
     *
     * @return string 
     */
    public function getCrmCnpj()
    {
        return $this->crmCnpj;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Visita
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set especAtuacao
     *
     * @param string $especAtuacao
     * @return Visita
     */
    public function setEspecAtuacao($especAtuacao)
    {
        $this->especAtuacao = $especAtuacao;

        return $this;
    }

    /**
     * Get especAtuacao
     *
     * @return string 
     */
    public function getEspecAtuacao()
    {
        return $this->especAtuacao;
    }

    /**
     * Set frequencia
     *
     * @param string $frequencia
     * @return Visita
     */
    public function setFrequencia($frequencia)
    {
        $this->frequencia = $frequencia;

        return $this;
    }

    /**
     * Get frequencia
     *
     * @return string 
     */
    public function getFrequencia()
    {
        return $this->frequencia;
    }

    /**
     * Set visitaAcompanhada
     *
     * @param string $visitaAcompanhada
     * @return Visita
     */
    public function setVisitaAcompanhada($visitaAcompanhada)
    {
        $this->visitaAcompanhada = $visitaAcompanhada;

        return $this;
    }

    /**
     * Get visitaAcompanhada
     *
     * @return string 
     */
    public function getVisitaAcompanhada()
    {
        return $this->visitaAcompanhada;
    }

    /**
     * Set teamId
     *
     * @param string $teamId
     * @return Visita
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;

        return $this;
    }

    /**
     * Get teamId
     *
     * @return string 
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set alignmentId
     *
     * @param string $alignmentId
     * @return Visita
     */
    public function setAlignmentId($alignmentId)
    {
        $this->alignmentId = $alignmentId;

        return $this;
    }

    /**
     * Get alignmentId
     *
     * @return string 
     */
    public function getAlignmentId()
    {
        return $this->alignmentId;
    }

    /**
     * Set eventId
     *
     * @param string $eventId
     * @return Visita
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * Get eventId
     *
     * @return string 
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set programadaNaoprog
     *
     * @param string $programadaNaoprog
     * @return Visita
     */
    public function setProgramadaNaoprog($programadaNaoprog)
    {
        $this->programadaNaoprog = $programadaNaoprog;

        return $this;
    }

    /**
     * Get programadaNaoprog
     *
     * @return string 
     */
    public function getProgramadaNaoprog()
    {
        return $this->programadaNaoprog;
    }

    /**
     * Set tipoVisita
     *
     * @param string $tipoVisita
     * @return Visita
     */
    public function setTipoVisita($tipoVisita)
    {
        $this->tipoVisita = $tipoVisita;

        return $this;
    }

    /**
     * Get tipoVisita
     *
     * @return string 
     */
    public function getTipoVisita()
    {
        return $this->tipoVisita;
    }

    /**
     * Set eventType
     *
     * @param string $eventType
     * @return Visita
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return string 
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set painel
     *
     * @param string $painel
     * @return Visita
     */
    public function setPainel($painel)
    {
        $this->painel = $painel;

        return $this;
    }

    /**
     * Get painel
     *
     * @return string 
     */
    public function getPainel()
    {
        return $this->painel;
    }

    /**
     * Set potencial
     *
     * @param string $potencial
     * @return Visita
     */
    public function setPotencial($potencial)
    {
        $this->potencial = $potencial;

        return $this;
    }

    /**
     * Get potencial
     *
     * @return string 
     */
    public function getPotencial()
    {
        return $this->potencial;
    }

    /**
     * Set statusDaVisita
     *
     * @param string $statusDaVisita
     * @return Visita
     */
    public function setStatusDaVisita($statusDaVisita)
    {
        $this->statusDaVisita = $statusDaVisita;

        return $this;
    }

    /**
     * Get statusDaVisita
     *
     * @return string 
     */
    public function getStatusDaVisita()
    {
        return $this->statusDaVisita;
    }

    /**
     * Set produto1
     *
     * @param string $produto1
     * @return Visita
     */
    public function setProduto1($produto1)
    {
        $this->produto1 = $produto1;

        return $this;
    }

    /**
     * Get produto1
     *
     * @return string 
     */
    public function getProduto1()
    {
        return $this->produto1;
    }

    /**
     * Set produto2
     *
     * @param string $produto2
     * @return Visita
     */
    public function setProduto2($produto2)
    {
        $this->produto2 = $produto2;

        return $this;
    }

    /**
     * Get produto2
     *
     * @return string 
     */
    public function getProduto2()
    {
        return $this->produto2;
    }

    /**
     * Set produto3
     *
     * @param string $produto3
     * @return Visita
     */
    public function setProduto3($produto3)
    {
        $this->produto3 = $produto3;

        return $this;
    }

    /**
     * Get produto3
     *
     * @return string 
     */
    public function getProduto3()
    {
        return $this->produto3;
    }

    /**
     * Set produto4
     *
     * @param string $produto4
     * @return Visita
     */
    public function setProduto4($produto4)
    {
        $this->produto4 = $produto4;

        return $this;
    }

    /**
     * Get produto4
     *
     * @return string 
     */
    public function getProduto4()
    {
        return $this->produto4;
    }

    /**
     * Set produto5
     *
     * @param string $produto5
     * @return Visita
     */
    public function setProduto5($produto5)
    {
        $this->produto5 = $produto5;

        return $this;
    }

    /**
     * Get produto5
     *
     * @return string 
     */
    public function getProduto5()
    {
        return $this->produto5;
    }

    /**
     * Set produto6
     *
     * @param string $produto6
     * @return Visita
     */
    public function setProduto6($produto6)
    {
        $this->produto6 = $produto6;

        return $this;
    }

    /**
     * Get produto6
     *
     * @return string 
     */
    public function getProduto6()
    {
        return $this->produto6;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Visita
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Visita
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set comentarios1
     *
     * @param string $comentarios1
     * @return Visita
     */
    public function setComentarios1($comentarios1)
    {
        $this->comentarios1 = $comentarios1;

        return $this;
    }

    /**
     * Get comentarios1
     *
     * @return string 
     */
    public function getComentarios1()
    {
        return $this->comentarios1;
    }

    /**
     * Set comentarios2
     *
     * @param string $comentarios2
     * @return Visita
     */
    public function setComentarios2($comentarios2)
    {
        $this->comentarios2 = $comentarios2;

        return $this;
    }

    /**
     * Get comentarios2
     *
     * @return string 
     */
    public function getComentarios2()
    {
        return $this->comentarios2;
    }

    /**
     * Set planilha
     *
     * @param \Bbi\AbbotRx\VisitaBundle\Entity\Planilha $planilha
     * @return Visita
     */
    public function setPlanilha(\Bbi\AbbotRx\VisitaBundle\Entity\Planilha $planilha = null)
    {
        $this->planilha = $planilha;

        return $this;
    }

    /**
     * Get planilha
     *
     * @return \Bbi\AbbotRx\VisitaBundle\Entity\Planilha 
     */
    public function getPlanilha()
    {
        return $this->planilha;
    }
}
