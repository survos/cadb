<?php

namespace App\Repository;

use App\Entity\CaSiteTemplates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSiteTemplates|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSiteTemplates|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSiteTemplates[]    findAll()
 * @method CaSiteTemplates[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSiteTemplatesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSiteTemplates::class);
    }

    // /**
    //  * @return CaSiteTemplates[] Returns an array of CaSiteTemplates objects
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
    public function findOneBySomeField($value): ?CaSiteTemplates
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
