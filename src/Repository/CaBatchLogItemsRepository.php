<?php

namespace App\Repository;

use App\Entity\CaBatchLogItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaBatchLogItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaBatchLogItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaBatchLogItems[]    findAll()
 * @method CaBatchLogItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaBatchLogItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaBatchLogItems::class);
    }

    // /**
    //  * @return CaBatchLogItems[] Returns an array of CaBatchLogItems objects
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
    public function findOneBySomeField($value): ?CaBatchLogItems
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
