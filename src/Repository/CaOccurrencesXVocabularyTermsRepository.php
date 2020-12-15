<?php

namespace App\Repository;

use App\Entity\CaOccurrencesXVocabularyTerms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaOccurrencesXVocabularyTerms|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaOccurrencesXVocabularyTerms|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaOccurrencesXVocabularyTerms[]    findAll()
 * @method CaOccurrencesXVocabularyTerms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaOccurrencesXVocabularyTermsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaOccurrencesXVocabularyTerms::class);
    }

    // /**
    //  * @return CaOccurrencesXVocabularyTerms[] Returns an array of CaOccurrencesXVocabularyTerms objects
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
    public function findOneBySomeField($value): ?CaOccurrencesXVocabularyTerms
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
