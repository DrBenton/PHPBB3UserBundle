<?
namespace Seyon\PHPBB3\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Symfony\Component\Security\Core\User\AdvancedUserInterface;
use \Doctrine\Common\Collections\ArrayCollection;
use \Seyon\PHPBB3\UserBundle\Entity\User\Base as BaseUser;

/**
 * Seyon/PHPBB3/UserBundle/EntityPhpbbUsers
 *
 * @ORM\Table(name="phpbb_users")
 * @ORM\Entity
 */
class User extends BaseUser implements AdvancedUserInterface
{
      
    public function getId(){
        return $this->userId;
    }
    
    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        return $this->userFormSalt;
    }

    public function getPassword()
    {
        return $this->userPassword;
    }
    
    public function isPasswordLegal(){
        return true;
    }
    
    public function getEmail()
    {
        return $this->userEmail;
    }

    public function getRoles()
    {
        $finalRoles = array();
        $groups = $this->groups;
        if($groups){
            foreach($groups as $group){
                $object = $group->getGroup();
                if($object){
                    
                    $name = $object->getGroupName();
                    
                    //SF 2 Roles
                    if($name === 'ADMINISTRATORS'){
                        $finalRoles[] = 'ROLE_ADMIN';
                    } else if($name === 'GLOBAL_MODERATORS'){
                        $finalRoles[] = 'ROLE_MOD';
                    } else if($name === 'REGISTERED'){
                        $finalRoles[] = 'ROLE_USER';
                    }
                    
                    //PHPBB Roles
                    $finalRoles[] = 'ROLE_'.strtoupper($name);
                }
            }
        }
   
        return $finalRoles;
    }

    public function eraseCredentials()
    {
    }
    
    public function isAccountNonExpired()
    {
        // 1 = inactive/blocked
        if($this->userType == 1){
            return false;
        }
        return true;
    }

    public function isAccountNonLocked()
    {
         // 1 = inactive/blocked
        if($this->userType == 1){
            return false;
        }
        return true;
    }

    public function isCredentialsNonExpired()
    {
         // 1 = inactive/blocked
        if($this->userType == 1){
            return false;
        }
        return true;
    }

    public function isEnabled()
    {
         // 1 = inactive/blocked
        if($this->userType == 1){
            return false;
        }
        return true;
    }
    
    public function __toString(){
        return (string)$this->getUsername();
    }
}