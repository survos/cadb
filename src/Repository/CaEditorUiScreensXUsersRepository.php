<?php

namespace App\Repository;

use App\Entity\CaEditorUiScreensXUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEditorUiScreensXUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEditorUiScreensXUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEditorUiScreensXUsers[]    findAll()
 * @method CaEditorUiScreensXUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEditorUiScreensXUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEditorUiScreensXUsers::class);
    }

    // /**
    //  * @return CaEditorUiScreensXUsers[] Returns an array of CaEditorUiScreensXUsers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CaEditorUiScreensXUsers
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
