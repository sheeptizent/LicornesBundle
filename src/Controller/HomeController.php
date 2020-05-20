<?php
/**
 * User: dje_O
 * Date: 15/05/2020.
 */

namespace Sheeptizent\LicornesBundle\Controller;

use Sheeptizent\LicornesBundle\Resources\LicornesToolsInterface;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @var string
     */
    public $salutation;
    /**
     * @var Environment
     */
    private $licornesTools;
    /**
     * @var bool
     */
    private $licornesExistent;
    /**
     * @var int
     */
    private $tailleDuTroupeau;

    public function __construct(
        Environment $twig,
        LicornesToolsInterface $licornesTools,
        $licornesExistent = true,
        int $tailleDuTroupeau = 5
    ) {
        $this->twig = $twig;
        $this->licornesTools = $licornesTools;
        $this->licornesExistent = $licornesExistent;
        $this->tailleDuTroupeau = $tailleDuTroupeau;
    }

    public function index()
    {
        $this->licornesTools->setTailleDuTroupeau($this->tailleDuTroupeau);
        $content = $this->twig->render('@SheeptizentLicornes/base.html.twig',
            [
                'licornesTools' => $this->licornesTools,
                'licornesExistent' => $this->licornesExistent,
                'tailleDuTroupeau' => $this->tailleDuTroupeau
            ]);

        return new Response($content);
    }

    public function salutationCachee(string $arg)
    {
        $this->salutation = $arg;
    }
}
