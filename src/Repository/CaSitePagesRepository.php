<?php

namespace App\Repository;

use App\Entity\CaSitePages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSitePages|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSitePages|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSitePages[]    findAll()
 * @method CaSitePages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSitePagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSitePages::class);
    }

    // /**
    //  * @return CaSitePages[] Returns an array of CaSitePages objects
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
    public function findOneBySomeField($value): ?CaSitePages
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
