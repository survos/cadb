<?php

namespace App\Repository;

use App\Entity\CaSetItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSetItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSetItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSetItems[]    findAll()
 * @method CaSetItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSetItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSetItems::class);
    }

    // /**
    //  * @return CaSetItems[] Returns an array of CaSetItems objects
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
    public function findOneBySomeField($value): ?CaSetItems
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
