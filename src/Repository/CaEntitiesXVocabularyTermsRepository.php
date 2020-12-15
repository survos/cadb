<?php

namespace App\Repository;

use App\Entity\CaEntitiesXVocabularyTerms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEntitiesXVocabularyTerms|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEntitiesXVocabularyTerms|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEntitiesXVocabularyTerms[]    findAll()
 * @method CaEntitiesXVocabularyTerms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEntitiesXVocabularyTermsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEntitiesXVocabularyTerms::class);
    }

    // /**
    //  * @return CaEntitiesXVocabularyTerms[] Returns an array of CaEntitiesXVocabularyTerms objects
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
    public function findOneBySomeField($value): ?CaEntitiesXVocabularyTerms
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
