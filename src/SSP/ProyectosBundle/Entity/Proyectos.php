<?php

namespace SSP\ProyectosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyectos
 *
 * @ORM\Table(name="proyectos")
 * @ORM\Entity
 */
class Proyectos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idConvenio", type="integer", nullable=true)
     */
    private $idconvenio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=45, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=45, nullable=true)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFin", type="date", nullable=true)
     */
    private $fechafin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaIn", type="date", nullable=true)
     */
    private $fechain;

    /**
     * @var string
     *
     * @ORM\Column(name="resultados", type="string", length=45, nullable=true)
     */
    private $resultados;

    /**
     * @var integer
     *
     * @ORM\Column(name="idResponsable", type="integer", nullable=true)
     */
    private $idresponsable;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTipo", type="integer", nullable=true)
     */
    private $idtipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idResolucion", type="integer", nullable=true)
     */
    private $idresolucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idconvenio
     *
     * @param integer $idconvenio
     * @return Proyectos
     */
    public function setIdconvenio($idconvenio)
    {
        $this->idconvenio = $idconvenio;
    
        return $this;
    }

    /**
     * Get idconvenio
     *
     * @return integer 
     */
    public function getIdconvenio()
    {
        return $this->idconvenio;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Proyectos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Proyectos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Proyectos
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
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return Proyectos
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;
    
        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set fechain
     *
     * @param \DateTime $fechain
     * @return Proyectos
     */
    public function setFechain($fechain)
    {
        $this->fechain = $fechain;
    
        return $this;
    }

    /**
     * Get fechain
     *
     * @return \DateTime 
     */
    public function getFechain()
    {
        return $this->fechain;
    }

    /**
     * Set resultados
     *
     * @param string $resultados
     * @return Proyectos
     */
    public function setResultados($resultados)
    {
        $this->resultados = $resultados;
    
        return $this;
    }

    /**
     * Get resultados
     *
     * @return string 
     */
    public function getResultados()
    {
        return $this->resultados;
    }

    /**
     * Set idresponsable
     *
     * @param integer $idresponsable
     * @return Proyectos
     */
    public function setIdresponsable($idresponsable)
    {
        $this->idresponsable = $idresponsable;
    
        return $this;
    }

    /**
     * Get idresponsable
     *
     * @return integer 
     */
    public function getIdresponsable()
    {
        return $this->idresponsable;
    }

    /**
     * Set idtipo
     *
     * @param integer $idtipo
     * @return Proyectos
     */
    public function setIdtipo($idtipo)
    {
        $this->idtipo = $idtipo;
    
        return $this;
    }

    /**
     * Get idtipo
     *
     * @return integer 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }

    /**
     * Set idresolucion
     *
     * @param integer $idresolucion
     * @return Proyectos
     */
    public function setIdresolucion($idresolucion)
    {
        $this->idresolucion = $idresolucion;
    
        return $this;
    }

    /**
     * Get idresolucion
     *
     * @return integer 
     */
    public function getIdresolucion()
    {
        return $this->idresolucion;
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
}