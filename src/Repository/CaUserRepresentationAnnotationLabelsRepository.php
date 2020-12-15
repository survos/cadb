<?php

namespace App\Repository;

use App\Entity\CaUserRepresentationAnnotationLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserRepresentationAnnotationLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserRepresentationAnnotationLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserRepresentationAnnotationLabels[]    findAll()
 * @method CaUserRepresentationAnnotationLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserRepresentationAnnotationLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserRepresentationAnnotationLabels::class);
    }

    // /**
    //  * @return CaUserRepresentationAnnotationLabels[] Returns an array of CaUserRepresentationAnnotationLabels objects
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
    public function findOneBySomeField($value): ?CaUserRepresentationAnnotationLabels
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
