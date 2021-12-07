<?php
declare(strict_types = 1);

namespace Koempf\PhpInfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PhpInfoController extends AbstractController
{
    /**
     * @Oro\Bundle\SecurityBundle\Annotation\AclAncestor("oro_config_system")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(): Response
    {
        ob_start();
        phpinfo();
        $content = ob_get_contents();
        ob_get_clean();

        return new Response($content);
    }
}
