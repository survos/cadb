<?php

namespace App\Repository;

use App\Entity\CaAttributes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaAttributes|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaAttributes|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaAttributes[]    findAll()
 * @method CaAttributes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaAttributesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaAttributes::class);
    }

    // /**
    //  * @return CaAttributes[] Returns an array of CaAttributes objects
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
    public function findOneBySomeField($value): ?CaAttributes
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
