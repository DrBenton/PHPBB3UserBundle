<?
namespace Seyon\PHPBB3\UserBundle\Security;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class Provider extends \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
{

    public function __construct(\Symfony\Bridge\Doctrine\ManagerRegistry $registry, $class, $property = null, $managerName = null)
    {
        $managerName = 'seyon_phpbb3';
        parent::__construct($registry, $class, $property, $managerName);
    }
    
}