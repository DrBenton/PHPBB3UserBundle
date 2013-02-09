<?

namespace Seyon\PHPBB3\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;


class AccessController extends Controller 
{
		
    /**
     * @Route("/login", name="login")
     * @Template()
     * @return array
     */
    public function loginAction()
    {
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }
		
        $errorMessage = '';
        
		if($error){
			$errorMessage = $error->getMessage();
		}	

		return array(
			'seyon_phpbb3_user' => $this->container->getParameter('seyon_phpbb3_user'),
            'error' => $errorMessage,
			'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME)
		);
    }
}