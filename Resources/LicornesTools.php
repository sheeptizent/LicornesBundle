<?php
/**
 * User: dje_O
 * Date: 19/05/2020.
 */

namespace Sheeptizent\LicornesBundle\Resources;

class LicornesTools implements LicornesToolsInterface
{
    private $tailleDuTroupeau;

    /**
     * LicornesTools constructor.
     *
     * @param $tailleDuTroupeau
     */
    public function __construct(int $tailleDuTroupeau = null)
    {
        $this->tailleDuTroupeau = $tailleDuTroupeau;
    }

    /**
     * @return string
     */
    public function construireEtable() : string
    {
        $info = 'Une étable pour ' . $this->tailleDuTroupeau . ' licornes a été construite.';
        return $info;
    }

    /**
     * @return string
     */
    public function nourrirLicorne() : string
    {
        $info = $this->tailleDuTroupeau . " bottes de foin on été livrées à l'étable.";
        return $info;
    }

    /**
     * @param int $tailleDuTroupeau
     */
    public function setTailleDuTroupeau(int $tailleDuTroupeau): void
    {
        $this->tailleDuTroupeau = $tailleDuTroupeau;
    }
}
