<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Базовый репозиторий от которого должны
 * наследоваться все репозитории в модулях
 *
 * @package App\Http\Repositories
 */
abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * CoreRepository constructor.
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * Модель для работы с таблицей
     * @return mixed
     */
    abstract protected function getModelClass();


    /**
     * Метод для работы с таблицей
     * @return \Illuminate\Contracts\Foundation\Application|mixed
     */
    protected function startConditions()
    {
        return clone $this->model;
    }
}
