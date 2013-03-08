<?
// src/Acme/UserBundle/Entity/User.php
namespace Seyon\PHPBB3\UserBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;


class Base
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $userId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_type", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userType = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false, options={"default" = 3})
     */
    protected $groupId = 3;

    /**
     * @var string
     *
     * @ORM\Column(name="user_permissions", type="text", nullable=false)
     */
    protected $userPermissions;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_perm_from", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userPermFrom = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="user_ip", type="string", length=40, nullable=false)
     */
    protected $userIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_regdate", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userRegdate = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    protected $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_clean", type="string", length=255, nullable=false)
     */
    protected $usernameClean;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=40, nullable=false)
     */
    protected $userPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_passchg", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userPasschg = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_pass_convert", type="boolean", nullable=false, options={"default" = 0})
     */
    protected $userPassConvert = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=100, nullable=false)
     */
    protected $userEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_email_hash", type="bigint", nullable=false, options={"default" = 0})
     */
    protected $userEmailHash = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="user_birthday", type="string", length=10, nullable=false)
     */
    protected $userBirthday;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_lastvisit", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userLastvisit = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_lastmark", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userLastmark = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_lastpost_time", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userLastpostTime = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="user_lastpage", type="string", length=200, nullable=false)
     */
    protected $userLastpage;

    /**
     * @var string
     *
     * @ORM\Column(name="user_last_confirm_key", type="string", length=10, nullable=false)
     */
    protected $userLastConfirmKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_last_search", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userLastSearch = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_warnings", type="boolean", nullable=false, options={"default" = 0})
     */
    protected $userWarnings = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_last_warning", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userLastWarning = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_login_attempts", type="boolean", nullable=false, options={"default" = 0})
     */
    protected $userLoginAttempts = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_inactive_reason", type="boolean", nullable=false, options={"default" = 0})
     */
    protected $userInactiveReason = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_inactive_time", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userInactiveTime = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_posts", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userPosts = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="user_lang", type="string", length=30, nullable=false)
     */
    protected $userLang;

    /**
     * @var float
     *
     * @ORM\Column(name="user_timezone", type="decimal", nullable=false, options={"default" = 0})
     */
    protected $userTimezone = 0.00;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_dst", type="boolean", nullable=false, options={"default" = 0})
     */
    protected $userDst = 0; 

    /**
     * @var string
     *
     * @ORM\Column(name="user_dateformat", type="string", length=30, nullable=false, options={"default" = "d M Y H:i"})
     */
    protected $userDateformat = "d M Y H:i";

    /**
     * @var integer
     *
     * @ORM\Column(name="user_style", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userStyle = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_rank", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userRank = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="user_colour", type="string", length=6, nullable=false)
     */
    protected $userColour;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_new_privmsg", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userNewPrivmsg = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_unread_privmsg", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userUnreadPrivmsg = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_last_privmsg", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userLastPrivmsg = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_message_rules", type="boolean", nullable=false, options={"default" = 0})
     */
    protected $userMessageRules = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_full_folder", type="integer", nullable=false, options={"default" = -3})
     */
    protected $userFullFolder = -3;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_emailtime", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userEmailtime = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_topic_show_days", type="smallint", nullable=false, options={"default" = 0})
     */
    protected $userTopicShowDays = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="user_topic_sortby_type", type="string", length=1, nullable=false, options={"default" = "t"})
     */
    protected $userTopicSortbyType = "t";

    /**
     * @var string
     *
     * @ORM\Column(name="user_topic_sortby_dir", type="string", length=1, nullable=false, options={"default" = "d"})
     */
    protected $userTopicSortbyDir = "d";

    /**
     * @var integer
     *
     * @ORM\Column(name="user_post_show_days", type="smallint", nullable=false, options={"default" = 0})
     */
    protected $userPostShowDays = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="user_post_sortby_type", type="string", length=1, nullable=false, options={"default" = "t"})
     */
    protected $userPostSortbyType = "t";

    /**
     * @var string
     *
     * @ORM\Column(name="user_post_sortby_dir", type="string", length=1, nullable=false, options={"default" = "a"})
     */
    protected $userPostSortbyDir = "a";

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_notify", type="boolean", nullable=false, options={"default" = 0})
     */
    protected $userNotify = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_notify_pm", type="boolean", nullable=false, options={"default" = 1})
     */
    protected $userNotifyPm = 1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_notify_type", type="boolean", nullable=false, options={"default" = 0})
     */
    protected $userNotifyType = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_allow_pm", type="boolean", nullable=false, options={"default" = 1})
     */
    protected $userAllowPm = 1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_allow_viewonline", type="boolean", nullable=false, options={"default" = 1})
     */
    protected $userAllowViewonline = 1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_allow_viewemail", type="boolean", nullable=false, options={"default" = 1})
     */
    protected $userAllowViewemail = 1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_allow_massemail", type="boolean", nullable=false, options={"default" = 1})
     */
    protected $userAllowMassemail = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_options", type="integer", nullable=false, options={"default" = 230271})
     */
    protected $userOptions = 230271;

    /**
     * @var string
     *
     * @ORM\Column(name="user_avatar", type="string", length=255, nullable=false)
     */
    protected $userAvatar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_avatar_type", type="boolean", nullable=false, options={"default" = 0})
     */
    protected $userAvatarType = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_avatar_width", type="smallint", nullable=false, options={"default" = 0})
     */
    protected $userAvatarWidth = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_avatar_height", type="smallint", nullable=false, options={"default" = 0})
     */
    protected $userAvatarHeight = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sig", type="text", nullable=false)
     */
    protected $userSig;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sig_bbcode_uid", type="string", length=8, nullable=false)
     */
    protected $userSigBbcodeUid;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sig_bbcode_bitfield", type="string", length=255, nullable=false)
     */
    protected $userSigBbcodeBitfield;

    /**
     * @var string
     *
     * @ORM\Column(name="user_from", type="string", length=100, nullable=false)
     */
    protected $userFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="user_icq", type="string", length=15, nullable=false)
     */
    protected $userIcq;

    /**
     * @var string
     *
     * @ORM\Column(name="user_aim", type="string", length=255, nullable=false)
     */
    protected $userAim;

    /**
     * @var string
     *
     * @ORM\Column(name="user_yim", type="string", length=255, nullable=false)
     */
    protected $userYim;

    /**
     * @var string
     *
     * @ORM\Column(name="user_msnm", type="string", length=255, nullable=false)
     */
    protected $userMsnm;

    /**
     * @var string
     *
     * @ORM\Column(name="user_jabber", type="string", length=255, nullable=false)
     */
    protected $userJabber;

    /**
     * @var string
     *
     * @ORM\Column(name="user_website", type="string", length=200, nullable=false)
     */
    protected $userWebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="user_occ", type="text", nullable=false)
     */
    protected $userOcc;

    /**
     * @var string
     *
     * @ORM\Column(name="user_interests", type="text", nullable=false)
     */
    protected $userInterests;

    /**
     * @var string
     *
     * @ORM\Column(name="user_actkey", type="string", length=32, nullable=false)
     */
    protected $userActkey;

    /**
     * @var string
     *
     * @ORM\Column(name="user_newpasswd", type="string", length=40, nullable=false)
     */
    protected $userNewpasswd;

    /**
     * @var string
     *
     * @ORM\Column(name="user_form_salt", type="string", length=32, nullable=false)
     */
    protected $userFormSalt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_new", type="boolean", nullable=false, options={"default" = 1})
     */
    protected $userNew = 1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_reminded", type="boolean", nullable=false, options={"default" = 0})
     */
    protected $userReminded = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_reminded_time", type="integer", nullable=false, options={"default" = 0})
     */
    protected $userRemindedTime = 0;


}
