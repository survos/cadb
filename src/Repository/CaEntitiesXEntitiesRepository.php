<?php

namespace App\Repository;

use App\Entity\CaEntitiesXEntities;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEntitiesXEntities|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEntitiesXEntities|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEntitiesXEntities[]    findAll()
 * @method CaEntitiesXEntities[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEntitiesXEntitiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEntitiesXEntities::class);
    }

    // /**
    //  * @return CaEntitiesXEntities[] Returns an array of CaEntitiesXEntities objects
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
    public function findOneBySomeField($value): ?CaEntitiesXEntities
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
