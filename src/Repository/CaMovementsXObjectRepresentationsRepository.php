<?php

namespace App\Repository;

use App\Entity\CaMovementsXObjectRepresentations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMovementsXObjectRepresentations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMovementsXObjectRepresentations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMovementsXObjectRepresentations[]    findAll()
 * @method CaMovementsXObjectRepresentations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMovementsXObjectRepresentationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMovementsXObjectRepresentations::class);
    }

    // /**
    //  * @return CaMovementsXObjectRepresentations[] Returns an array of CaMovementsXObjectRepresentations objects
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
    public function findOneBySomeField($value): ?CaMovementsXObjectRepresentations
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
