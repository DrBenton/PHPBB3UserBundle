<?php
namespace Seyon\PHPBB3\UserBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class DoctrineNameListener
{
    
    protected $prefix;
    protected $userClass;
    protected $groupClass;

    public function __construct($container)
    {
        $config         = $container->getParameter('seyon_phpbb3_user');
        $this->prefix   = $config['table_prefix'];
        $this->userClass = $config['user_class'];
        $this->groupClass = $config['group_class'];
    }
    
    public function loadClassMetadata(\Doctrine\ORM\Event\LoadClassMetadataEventArgs $eventArgs)
    {
        $classMetadata = $eventArgs->getClassMetadata();
        $em = $eventArgs->getEntityManager();
        $classMetadata->setTableName($this->prefix . $classMetadata->getTableName());

        foreach ($classMetadata->getAssociationMappings() as $fieldName => $mapping) {
            if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadataInfo::MANY_TO_MANY) {
                $mappedTableName = $classMetadata->associationMappings[$fieldName]['joinTable']['name'];
                $classMetadata->associationMappings[$fieldName]['joinTable']['name'] = $this->prefix . $mappedTableName;
            }else if ($mapping['targetEntity'] == '\Seyon\PHPBB3\UserBundle\Entity\User') {
            	$classMetadata->associationMappings[$fieldName]['targetEntity'] = $this->userClass;
            } else if ($mapping['targetEntity'] == '\Seyon\PHPBB3\UserBundle\Entity\Group') {
            	$classMetadata->associationMappings[$fieldName]['targetEntity'] = $this->groupClass;
            }
        }
    }
}
