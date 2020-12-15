<?php

namespace App\Repository;

use App\Entity\CaRelationshipTypeLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaRelationshipTypeLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaRelationshipTypeLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaRelationshipTypeLabels[]    findAll()
 * @method CaRelationshipTypeLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaRelationshipTypeLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaRelationshipTypeLabels::class);
    }

    // /**
    //  * @return CaRelationshipTypeLabels[] Returns an array of CaRelationshipTypeLabels objects
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
    public function findOneBySomeField($value): ?CaRelationshipTypeLabels
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
