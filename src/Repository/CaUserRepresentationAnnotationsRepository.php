<?php

namespace App\Repository;

use App\Entity\CaUserRepresentationAnnotations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserRepresentationAnnotations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserRepresentationAnnotations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserRepresentationAnnotations[]    findAll()
 * @method CaUserRepresentationAnnotations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserRepresentationAnnotationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserRepresentationAnnotations::class);
    }

    // /**
    //  * @return CaUserRepresentationAnnotations[] Returns an array of CaUserRepresentationAnnotations objects
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
    public function findOneBySomeField($value): ?CaUserRepresentationAnnotations
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
