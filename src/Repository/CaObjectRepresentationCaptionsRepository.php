<?php

namespace App\Repository;

use App\Entity\CaObjectRepresentationCaptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectRepresentationCaptions|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectRepresentationCaptions|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectRepresentationCaptions[]    findAll()
 * @method CaObjectRepresentationCaptions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectRepresentationCaptionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectRepresentationCaptions::class);
    }

    // /**
    //  * @return CaObjectRepresentationCaptions[] Returns an array of CaObjectRepresentationCaptions objects
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
    public function findOneBySomeField($value): ?CaObjectRepresentationCaptions
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
