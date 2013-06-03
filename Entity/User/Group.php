<?
namespace Seyon\PHPBB3\UserBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="user_group")
 * @ORM\Entity
 */
class Group
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="group_id", type="integer", unique=false, options={"default" = 0}, columnDefinition="mediumint(8) UNSIGNED NOT NULL DEFAULT '0'")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $groupId = 0;
    
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="user_id", type="integer", unique=false, options={"default" = 0}, columnDefinition="mediumint(8) UNSIGNED NOT NULL DEFAULT '0'")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $userId = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="group_leader", type="integer", nullable=false, options={"default" = 0}, columnDefinition="tinyint(1) NOT NULL DEFAULT '0'")
     */
    protected $groupLeader = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_pending", type="integer", nullable=false, options={"default" = 1}, columnDefinition="tinyint(1) NOT NULL DEFAULT '1'")
     */
    protected $userPending = 1;
    
    /**
     * @ORM\ManyToOne(targetEntity="\Seyon\PHPBB3\UserBundle\Entity\User", cascade={"remove"}, inversedBy="groups" )
     * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id", unique=false, onDelete="CASCADE")
     */
   protected $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="\Seyon\PHPBB3\UserBundle\Entity\Group", cascade={"remove"}, inversedBy="users" )
     * @ORM\JoinColumn(name="group_id", referencedColumnName="group_id", unique=false, onDelete="CASCADE")
     */
   protected $group;
   
   public function getUser(){
       return $this->user;
   }
   
   public function getGroup(){
       return $this->group;
   }
}
