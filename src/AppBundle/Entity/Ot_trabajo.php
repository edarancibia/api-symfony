<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ot_trabajo
 *
 * @ORM\Table(name="ot_trabajo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Ot_trabajoRepository")
 */
class Ot_trabajo
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="rut_solicita", type="integer")
     */
    private $rutSolicita;

    /**
     * @var int
     *
     * @ORM\Column(name="sec_desde", type="integer")
     */
    private $secDesde;

    /**
     * @var string
     *
     * @ORM\Column(name="anexo", type="string", length=10)
     */
    private $anexo;

    /**
     * @var int
     *
     * @ORM\Column(name="sec_para", type="integer")
     */
    private $secPara;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255)
     */
    private $img;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_ini", type="date")
     */
    private $fIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_fin", type="date")
     */
    private $fFin;

    /**
     * @var int
     *
     * @ORM\Column(name="rut_res", type="integer")
     */
    private $rutRes;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_estado", type="integer")
     */
    private $fkEstado;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Ot_trabajo
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set rutSolicita
     *
     * @param integer $rutSolicita
     *
     * @return Ot_trabajo
     */
    public function setRutSolicita($rutSolicita)
    {
        $this->rutSolicita = $rutSolicita;

        return $this;
    }

    /**
     * Get rutSolicita
     *
     * @return int
     */
    public function getRutSolicita()
    {
        return $this->rutSolicita;
    }

    /**
     * Set secDesde
     *
     * @param integer $secDesde
     *
     * @return Ot_trabajo
     */
    public function setSecDesde($secDesde)
    {
        $this->secDesde = $secDesde;

        return $this;
    }

    /**
     * Get secDesde
     *
     * @return int
     */
    public function getSecDesde()
    {
        return $this->secDesde;
    }

    /**
     * Set anexo
     *
     * @param string $anexo
     *
     * @return Ot_trabajo
     */
    public function setAnexo($anexo)
    {
        $this->anexo = $anexo;

        return $this;
    }

    /**
     * Get anexo
     *
     * @return string
     */
    public function getAnexo()
    {
        return $this->anexo;
    }

    /**
     * Set secPara
     *
     * @param integer $secPara
     *
     * @return Ot_trabajo
     */
    public function setSecPara($secPara)
    {
        $this->secPara = $secPara;

        return $this;
    }

    /**
     * Get secPara
     *
     * @return int
     */
    public function getSecPara()
    {
        return $this->secPara;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Ot_trabajo
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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Ot_trabajo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Ot_trabajo
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set fIni
     *
     * @param \DateTime $fIni
     *
     * @return Ot_trabajo
     */
    public function setFIni($fIni)
    {
        $this->fIni = $fIni;

        return $this;
    }

    /**
     * Get fIni
     *
     * @return \DateTime
     */
    public function getFIni()
    {
        return $this->fIni;
    }

    /**
     * Set fFin
     *
     * @param \DateTime $fFin
     *
     * @return Ot_trabajo
     */
    public function setFFin($fFin)
    {
        $this->fFin = $fFin;

        return $this;
    }

    /**
     * Get fFin
     *
     * @return \DateTime
     */
    public function getFFin()
    {
        return $this->fFin;
    }

    /**
     * Set rutRes
     *
     * @param integer $rutRes
     *
     * @return Ot_trabajo
     */
    public function setRutRes($rutRes)
    {
        $this->rutRes = $rutRes;

        return $this;
    }

    /**
     * Get rutRes
     *
     * @return int
     */
    public function getRutRes()
    {
        return $this->rutRes;
    }

    /**
     * Set fkEstado
     *
     * @param integer $fkEstado
     *
     * @return Ot_trabajo
     */
    public function setFkEstado($fkEstado)
    {
        $this->fkEstado = $fkEstado;

        return $this;
    }

    /**
     * Get fkEstado
     *
     * @return int
     */
    public function getFkEstado()
    {
        return $this->fkEstado;
    }
}

