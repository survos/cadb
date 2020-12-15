<?php

namespace App\Repository;

use App\Entity\CaCollectionsXVocabularyTerms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaCollectionsXVocabularyTerms|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaCollectionsXVocabularyTerms|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaCollectionsXVocabularyTerms[]    findAll()
 * @method CaCollectionsXVocabularyTerms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaCollectionsXVocabularyTermsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaCollectionsXVocabularyTerms::class);
    }

    // /**
    //  * @return CaCollectionsXVocabularyTerms[] Returns an array of CaCollectionsXVocabularyTerms objects
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
    public function findOneBySomeField($value): ?CaCollectionsXVocabularyTerms
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
