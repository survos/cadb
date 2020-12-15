<?php

namespace App\Repository;

use App\Entity\CaEditorUisXUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEditorUisXUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEditorUisXUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEditorUisXUsers[]    findAll()
 * @method CaEditorUisXUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEditorUisXUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEditorUisXUsers::class);
    }

    // /**
    //  * @return CaEditorUisXUsers[] Returns an array of CaEditorUisXUsers objects
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
    public function findOneBySomeField($value): ?CaEditorUisXUsers
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
