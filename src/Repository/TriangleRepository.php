<?php

namespace App\Repository;

use App\Entity\Triangle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Triangle>
 *
 * @method Triangle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Triangle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Triangle[]    findAll()
 * @method Triangle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TriangleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Triangle::class);
    }

    public function add(Triangle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Triangle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
