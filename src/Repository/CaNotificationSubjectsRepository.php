<?php

namespace App\Repository;

use App\Entity\CaNotificationSubjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaNotificationSubjects|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaNotificationSubjects|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaNotificationSubjects[]    findAll()
 * @method CaNotificationSubjects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaNotificationSubjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaNotificationSubjects::class);
    }

    // /**
    //  * @return CaNotificationSubjects[] Returns an array of CaNotificationSubjects objects
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
    public function findOneBySomeField($value): ?CaNotificationSubjects
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
