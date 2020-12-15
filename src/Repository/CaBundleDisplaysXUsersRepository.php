<?php

namespace App\Repository;

use App\Entity\CaBundleDisplaysXUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaBundleDisplaysXUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaBundleDisplaysXUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaBundleDisplaysXUsers[]    findAll()
 * @method CaBundleDisplaysXUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaBundleDisplaysXUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaBundleDisplaysXUsers::class);
    }

    // /**
    //  * @return CaBundleDisplaysXUsers[] Returns an array of CaBundleDisplaysXUsers objects
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
    public function findOneBySomeField($value): ?CaBundleDisplaysXUsers
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
