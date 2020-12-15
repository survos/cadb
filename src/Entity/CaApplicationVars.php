<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaApplicationVars
 *
 * @ORM\Table(name="ca_application_vars")
 * @ORM\Entity
 */
class CaApplicationVars
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="vars", type="text", length=0, nullable=false)
     */
    private $vars;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVars(): ?string
    {
        return $this->vars;
    }

    public function setVars(string $vars): self
    {
        $this->vars = $vars;

        return $this;
    }


}
