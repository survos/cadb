<?php

namespace App\Repository;

use App\Entity\CaListItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaListItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaListItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaListItems[]    findAll()
 * @method CaListItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaListItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaListItems::class);
    }

    // /**
    //  * @return CaListItems[] Returns an array of CaListItems objects
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
    public function findOneBySomeField($value): ?CaListItems
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
