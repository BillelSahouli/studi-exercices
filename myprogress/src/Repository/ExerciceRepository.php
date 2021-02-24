<?php

namespace App\Repository;

use App\Classe\Search;
use App\Entity\Exercice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Exercice|null find($id, $lockMode = null, $lockVersion = null)
 * @method Exercice|null findOneBy(array $criteria, array $orderBy = null)
 * @method Exercice[]    findAll()
 * @method Exercice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExerciceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Exercice::class);
    }


    /**
     * @return Exercice[]
     */
    public function findWithSearch(Search $search)
    {
        $query = $this
            ->createQueryBuilder('e')
            ->select('m', 'e')
            ->join('e.muscle', 'm');

        if (!empty($search->muscles)){
            $query = $query
                ->andWhere('m.id IN (:muscles)')
                ->setParameter('muscles', $search->muscles);
        }

        if (!empty($search->string)){
            $query = $query
                ->andWhere('e.subtitle LIKE :string')
                ->setParameter('string', "%{$search->string}%");
        }

        return $query->getQuery()->getResult();
    }

    // /**
    //  * @return Exercice[] Returns an array of Exercice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Exercice
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
