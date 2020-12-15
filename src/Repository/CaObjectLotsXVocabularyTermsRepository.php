<?php

namespace App\Repository;

use App\Entity\CaObjectLotsXVocabularyTerms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectLotsXVocabularyTerms|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectLotsXVocabularyTerms|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectLotsXVocabularyTerms[]    findAll()
 * @method CaObjectLotsXVocabularyTerms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectLotsXVocabularyTermsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectLotsXVocabularyTerms::class);
    }

    // /**
    //  * @return CaObjectLotsXVocabularyTerms[] Returns an array of CaObjectLotsXVocabularyTerms objects
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
    public function findOneBySomeField($value): ?CaObjectLotsXVocabularyTerms
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
