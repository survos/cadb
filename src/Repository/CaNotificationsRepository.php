<?php

namespace App\Repository;

use App\Entity\CaNotifications;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaNotifications|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaNotifications|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaNotifications[]    findAll()
 * @method CaNotifications[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaNotificationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaNotifications::class);
    }

    // /**
    //  * @return CaNotifications[] Returns an array of CaNotifications objects
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
    public function findOneBySomeField($value): ?CaNotifications
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
