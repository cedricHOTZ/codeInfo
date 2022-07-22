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
     * Recherche les posts en fonction du formulaire
     * @return void
     */

    public function search($mots = null, $tags = null){
        $qb = $this->createQueryBuilder('p');
        // $qb->where('p.titre LIKE :mots')
        //     ->orWhere('p.description LIKE :mots')
            //->orWhere('p.tags LIKE :mots')
           
            if($mots != null){
                $qb->andWhere('MATCH_AGAINST(p.titre, p.description) AGAINST (:mots boolean)>0')
                ->setParameter('mots',$mots);
            }

            if($mots == ""){
                $qb->orderBy('p.date', 'DESC');
            }
            if($tags != null){
                $qb->leftJoin('p.tags','t');
                $qb->andWhere('t.id = :id')
                ->setParameter('id',$tags);
            }
        return $qb->getQuery()->getResult();
    }
     /**
      * @return Posts[] Returns an array of Posts objects
      */
    
     public function findByExampleField($value)
     {
         return $this->createQueryBuilder('p')
           
             ->orderBy('p.date', 'DESC')
             ->setMaxResults($value)
             ->where('p.active = true')
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
          ->where('p.active = true')
          ->getQuery()
          ->getResult()   
        ;
    }

    /**
      * @return Posts[] Returns an array of Posts objects
      */
    
      public function findByPostFlutter($nom)
      {
          return $this->createQueryBuilder('p')
            
            ->addSelect('t')
            ->setParameter('nom',$nom)
            ->Join("p.tags", "t", "WITH", "t.nom = :nom")
            ->orderBy('p.date', 'DESC')
            ->where('p.active = true')
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
