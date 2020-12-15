<?php

namespace App\Repository;

use App\Entity\CaRelationshipRelationships;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaRelationshipRelationships|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaRelationshipRelationships|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaRelationshipRelationships[]    findAll()
 * @method CaRelationshipRelationships[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaRelationshipRelationshipsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaRelationshipRelationships::class);
    }

    // /**
    //  * @return CaRelationshipRelationships[] Returns an array of CaRelationshipRelationships objects
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
    public function findOneBySomeField($value): ?CaRelationshipRelationships
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
