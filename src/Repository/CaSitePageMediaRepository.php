<?php

namespace App\Repository;

use App\Entity\CaSitePageMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSitePageMedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSitePageMedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSitePageMedia[]    findAll()
 * @method CaSitePageMedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSitePageMediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSitePageMedia::class);
    }

    // /**
    //  * @return CaSitePageMedia[] Returns an array of CaSitePageMedia objects
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
    public function findOneBySomeField($value): ?CaSitePageMedia
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
