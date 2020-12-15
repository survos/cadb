<?php

namespace App\Repository;

use App\Entity\CaUserNotes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserNotes|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserNotes|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserNotes[]    findAll()
 * @method CaUserNotes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserNotesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserNotes::class);
    }

    // /**
    //  * @return CaUserNotes[] Returns an array of CaUserNotes objects
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
    public function findOneBySomeField($value): ?CaUserNotes
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
