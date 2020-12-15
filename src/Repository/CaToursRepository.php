<?php

namespace App\Repository;

use App\Entity\CaTours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaTours|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaTours|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaTours[]    findAll()
 * @method CaTours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaToursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaTours::class);
    }

    // /**
    //  * @return CaTours[] Returns an array of CaTours objects
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
    public function findOneBySomeField($value): ?CaTours
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
