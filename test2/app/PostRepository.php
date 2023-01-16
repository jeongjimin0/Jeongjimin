<?php
/***************************************************************************************
* FileName      : BookListRepository.php
* Description   : ketri 도서목록 관리 시스템 create, edit form
* Company       : (주)한국공학기술연구원
* Author        : 김건영
* Created Date  : 2021.01.11
* Modifide Date : 2021.01.25 : SJY : To modify $params['depart_no']
* Reference     :
***************************************************************************************/

namespace App\Repositories;

use App\Models\Post;

class PostRepository extends BaseRepository
{
    public function __construct(Post $posts)
    {
        $this->model = $posts;
    }

    public function getList($params = [], $pagination = 20, $orderBy = [], $with = [])
    {
        $query = $this->model;

        if (isset($params['description']) && !empty($params['description'])) {
            $query = $query->where('description', 'like', '%' . addcslashes($params['description'], '_%') . '%');
        }

        }



        if ($orderBy && is_array($orderBy)) {
            foreach ($orderBy as $name => $sort) {
                $query = $query->orderBy($name, $sort);
            }
        }

        if ($with) {
            $query = $query->with($with);
        }

        return $query->paginate($pagination);
    }

        public function updateApproveItems($ids, $isApprove)
        {
            return $this->model
                ->whereIn('id', $ids)
                ->update(['status' => $isApprove]);
        }
}
