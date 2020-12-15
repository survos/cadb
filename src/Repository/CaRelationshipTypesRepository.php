<?php

namespace App\Repository;

use App\Entity\CaRelationshipTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaRelationshipTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaRelationshipTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaRelationshipTypes[]    findAll()
 * @method CaRelationshipTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaRelationshipTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaRelationshipTypes::class);
    }

    // /**
    //  * @return CaRelationshipTypes[] Returns an array of CaRelationshipTypes objects
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
    public function findOneBySomeField($value): ?CaRelationshipTypes
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
