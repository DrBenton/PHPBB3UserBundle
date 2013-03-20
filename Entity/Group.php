<?
namespace Seyon\PHPBB3\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Symfony\Component\Security\Core\User\AdvancedUserInterface;
use \Doctrine\Common\Collections\ArrayCollection;
use \Seyon\PHPBB3\UserBundle\Entity\Group\Base as BaseGroup;

/**
 *
 * @ORM\Table(name="phpbb_groups")
 * @ORM\Entity
 */
class Group extends BaseGroup
{
      
    public function getId(){
        return $this->id;
    }
    
    public function getGroupName(){
        return $this->groupName;
    }
    
}