<?php

namespace App\Repository;

use App\Entity\CaUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUsers[]    findAll()
 * @method CaUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUsers::class);
    }

    // /**
    //  * @return CaUsers[] Returns an array of CaUsers objects
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
    public function findOneBySomeField($value): ?CaUsers
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
