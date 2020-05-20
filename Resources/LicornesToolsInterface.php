<?php
/**
 * User: dje_O
 * Date: 20/05/2020
 */

namespace Sheeptizent\LicornesBundle\Resources;


interface LicornesToolsInterface
{

    /**
     * @return string
     */
    public function construireEtable(): string;

    /**
     * @return string
     */
    public function nourrirLicorne(): string;

    /**
     * @return void
     */
    public function setTailleDuTroupeau(int $tailleDuTroupeau): void;
}
