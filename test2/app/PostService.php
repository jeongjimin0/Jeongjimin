<?php

namespace App\Services;

use App\Repositories\SolutionListRepository;
use App\Exports\SolutonImport;

class PostService extends BaseService
{
    public function __construct(SolutionListRepository $SolutionListRepository)
    {
        $this->repository = $SolutionListRepository;
    }

    public function getList($params = [])
    {
        return $this->repository->getList($params);
    }

    public function getProfessorList($params = [])
    {
        return $this->repository->getProfessorList($params);
    }

    public function getStudentList($params = [])
    {
        return $this->repository->getStudentList($params);
    }

    public function getCompanyList($params = [])
    {
        return $this->repository->getCompanyList($params);
    }

}
