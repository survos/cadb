<?php

namespace App\Repository;

use App\Entity\CaObjectRepresentationsXObjectRepresentations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectRepresentationsXObjectRepresentations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectRepresentationsXObjectRepresentations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectRepresentationsXObjectRepresentations[]    findAll()
 * @method CaObjectRepresentationsXObjectRepresentations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectRepresentationsXObjectRepresentationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectRepresentationsXObjectRepresentations::class);
    }

    // /**
    //  * @return CaObjectRepresentationsXObjectRepresentations[] Returns an array of CaObjectRepresentationsXObjectRepresentations objects
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
    public function findOneBySomeField($value): ?CaObjectRepresentationsXObjectRepresentations
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
