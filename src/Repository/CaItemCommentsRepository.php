<?php

namespace App\Repository;

use App\Entity\CaItemComments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaItemComments|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaItemComments|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaItemComments[]    findAll()
 * @method CaItemComments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaItemCommentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaItemComments::class);
    }

    // /**
    //  * @return CaItemComments[] Returns an array of CaItemComments objects
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
    public function findOneBySomeField($value): ?CaItemComments
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
