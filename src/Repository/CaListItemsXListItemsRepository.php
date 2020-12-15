<?php

namespace App\Repository;

use App\Entity\CaListItemsXListItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaListItemsXListItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaListItemsXListItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaListItemsXListItems[]    findAll()
 * @method CaListItemsXListItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaListItemsXListItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaListItemsXListItems::class);
    }

    // /**
    //  * @return CaListItemsXListItems[] Returns an array of CaListItemsXListItems objects
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
    public function findOneBySomeField($value): ?CaListItemsXListItems
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
