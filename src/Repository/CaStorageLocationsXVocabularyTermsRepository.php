<?php

namespace App\Repository;

use App\Entity\CaStorageLocationsXVocabularyTerms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaStorageLocationsXVocabularyTerms|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaStorageLocationsXVocabularyTerms|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaStorageLocationsXVocabularyTerms[]    findAll()
 * @method CaStorageLocationsXVocabularyTerms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaStorageLocationsXVocabularyTermsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaStorageLocationsXVocabularyTerms::class);
    }

    // /**
    //  * @return CaStorageLocationsXVocabularyTerms[] Returns an array of CaStorageLocationsXVocabularyTerms objects
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
    public function findOneBySomeField($value): ?CaStorageLocationsXVocabularyTerms
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
