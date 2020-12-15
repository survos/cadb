<?php

namespace App\Repository;

use App\Entity\CaSearchFormsXUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSearchFormsXUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSearchFormsXUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSearchFormsXUsers[]    findAll()
 * @method CaSearchFormsXUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSearchFormsXUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSearchFormsXUsers::class);
    }

    // /**
    //  * @return CaSearchFormsXUsers[] Returns an array of CaSearchFormsXUsers objects
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
    public function findOneBySomeField($value): ?CaSearchFormsXUsers
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
