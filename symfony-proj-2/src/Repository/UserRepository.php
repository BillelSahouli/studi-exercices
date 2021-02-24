<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User|null findOneByUsername(string $username)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{


    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }


    public function findUserWithDQL(string $username): array
    {
        return $this->getEntityManager()->createQuery('
            SELECT u, m
            FROM App\Entity\User u
            LEFT JOIN u.messages m
            WHERE u.username = :username
            ORDER BY u.id 
            ')
            ->setParameter('username',$username)
            ->getResult()
            ;
    }


    public function findUserWithQueryBuilder(string $username): ?User
    {
        $queryBuilder = $this->createQueryBuilder('u')
            ->andWhere('u.username = :username')
            ->setParameter('username', $username);

        return $queryBuilder
            ->orderBy('u.id',  'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }

}
