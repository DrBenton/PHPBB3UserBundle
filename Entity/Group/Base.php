<?
namespace Seyon\PHPBB3\UserBundle\Entity\Group;

use Doctrine\ORM\Mapping as ORM;


class Base
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false, columnDefinition="mediumint(8) UNSIGNED NOT NULL DEFAULT '0'")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $groupId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="group_type", type="integer", nullable=false, options={"default" = 1})
     */
    protected $groupType = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_founder_manage", type="integer", nullable=false, options={"default" = 0})
     */
    protected $groupFounderManage = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_skip_auth", type="integer", nullable=false, options={"default" = 0})
     */
    protected $groupSkipAuth = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=255, nullable=false)
     */
    protected $groupName;

    /**
     * @var string
     *
     * @ORM\Column(name="group_desc", type="text", nullable=false)
     */
    protected $groupDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="group_desc_bitfield", type="string", length=255, nullable=false)
     */
    protected $groupDescBitfield;

    /**
     * @var string
     *
     * @ORM\Column(name="group_desc_options", type="integer", nullable=false, options={"default" = 7})
     */
    protected $groupDescOptions = 7;

    /**
     * @var string
     *
     * @ORM\Column(name="group_desc_uid", type="string", nullable=false, length=8)
     */
    protected $groupDescUid;

    /**
     * @var string
     *
     * @ORM\Column(name="group_display", type="integer", nullable=false, options={"default" = 1})
     */
    protected $groupDisplay = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_avatar", type="string", nullable=false, length=255)
     */
    protected $groupAvatar;

    /**
     * @var string
     *
     * @ORM\Column(name="group_avatar_type", type="integer", nullable=false, options={"default" = 0})
     */
    protected $groupAvatarType = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_avatar_width", type="integer", nullable=false, options={"default" = 0})
     */
    protected $groupAvatarWidth = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_avatar_height", type="integer", nullable=false, options={"default" = 0})
     */
    protected $groupAvatarHeight = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_rank", type="integer", nullable=false, options={"default" = 0})
     */
    protected $groupRank = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_colour", type="string", nullable=false, length=6)
     */
    protected $groupColour;

    /**
     * @var string
     *
     * @ORM\Column(name="group_sig_chars", type="integer", nullable=false, options={"default" = 0})
     */
    protected $groupSigChars = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_receive_pm", type="integer", nullable=false, options={"default" = 0})
     */
    protected $groupReceivePm = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_message_limit", type="integer", nullable=false, options={"default" = 0})
     */
    protected $groupMessageLimit = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_max_recipients", type="integer", nullable=false, options={"default" = 0})
     */
    protected $groupMaxRecipients = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="group_legend", type="integer", nullable=false, options={"default" = 1})
     */
    protected $groupLegend = 1;
    
    /**
    * @ORM\OneToMany(targetEntity="\Seyon\PHPBB3\UserBundle\Entity\User\Group", mappedBy="group", cascade={"remove"}, orphanRemoval=false)
    */
   protected $users;
}
