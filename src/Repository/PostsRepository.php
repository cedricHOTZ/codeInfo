<?php

namespace App\Repository;

use App\Entity\Posts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Posts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Posts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Posts[]    findAll()
 * @method Posts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Posts::class);
    }

     /**
      * @return Posts[] Returns an array of Posts objects
      */
    
     public function findByExampleField($value)
     {
         return $this->createQueryBuilder('p')
           
             ->orderBy('p.date', 'DESC')
             ->setMaxResults($value)
             ->getQuery()
             ->getResult() ;
     }

      /**
      * @return Posts[] Returns an array of Posts objects
      */
    
    public function findByPostPHp($nom)
    {
        return $this->createQueryBuilder('p')
          
          ->addSelect('t')
          ->setParameter('nom',$nom)
          ->Join("p.tags", "t", "WITH", "t.nom = :nom")
          ->orderBy('p.date', 'DESC')
          ->getQuery()
          ->getResult()   
        ;
    }
    
    public function findOneBySomeField($value): ?Posts
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    
     public function countPost()
     {
         $queryBuilder = $this->createQueryBuilder('p')
             ->select('COUNT(p.id) as value');
             return $queryBuilder->getQuery()->getOneOrNullResult();
        
     }
    }
