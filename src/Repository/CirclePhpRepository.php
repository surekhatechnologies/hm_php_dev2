<?php

namespace App\Repository;

use App\Entity\CirclePhp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CirclePhp>
 *
 * @method CirclePhp|null find($id, $lockMode = null, $lockVersion = null)
 * @method CirclePhp|null findOneBy(array $criteria, array $orderBy = null)
 * @method CirclePhp[]    findAll()
 * @method CirclePhp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CirclePhpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CirclePhp::class);
    }

    public function add(CirclePhp $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CirclePhp $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
