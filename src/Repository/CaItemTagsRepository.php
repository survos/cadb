<?php

namespace App\Repository;

use App\Entity\CaItemTags;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaItemTags|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaItemTags|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaItemTags[]    findAll()
 * @method CaItemTags[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaItemTagsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaItemTags::class);
    }

    // /**
    //  * @return CaItemTags[] Returns an array of CaItemTags objects
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
    public function findOneBySomeField($value): ?CaItemTags
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
