<?php

namespace App\Repository;

use App\Entity\CaSetsXUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSetsXUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSetsXUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSetsXUsers[]    findAll()
 * @method CaSetsXUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSetsXUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSetsXUsers::class);
    }

    // /**
    //  * @return CaSetsXUsers[] Returns an array of CaSetsXUsers objects
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
    public function findOneBySomeField($value): ?CaSetsXUsers
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
