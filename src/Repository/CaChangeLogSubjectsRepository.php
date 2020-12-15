<?php

namespace App\Repository;

use App\Entity\CaChangeLogSubjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaChangeLogSubjects|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaChangeLogSubjects|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaChangeLogSubjects[]    findAll()
 * @method CaChangeLogSubjects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaChangeLogSubjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaChangeLogSubjects::class);
    }

    // /**
    //  * @return CaChangeLogSubjects[] Returns an array of CaChangeLogSubjects objects
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
    public function findOneBySomeField($value): ?CaChangeLogSubjects
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
