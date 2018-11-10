<?php

namespace Tadascript\Sales\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Tadascript\Sales\Http\Requests\WarehouseRequest;
use Tadascript\Sales\Interfaces\WarehouseRepositoryInterface;
use Tadascript\Sales\Models\Warehouse;

/**
 * Resource controller class for warehouse.
 */
class WarehouseResourceController extends BaseController
{

    /**
     * Initialize warehouse resource controller.
     *
     * @param type WarehouseRepositoryInterface $warehouse
     *
     * @return null
     */
    public function __construct(WarehouseRepositoryInterface $warehouse)
    {
        parent::__construct();
        $this->repository = $warehouse;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Tadascript\Sales\Repositories\Criteria\WarehouseResourceCriteria::class);
    }

    /**
     * Display a list of warehouse.
     *
     * @return Response
     */
    public function index(WarehouseRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Tadascript\Sales\Repositories\Presenter\WarehousePresenter::class)
                ->$function();
        }

        $warehouses = $this->repository->paginate();

        return $this->response->title(trans('sales::warehouse.names'))
            ->view('sales::warehouse.index', true)
            ->data(compact('warehouses', 'view'))
            ->output();
    }

    /**
     * Display warehouse.
     *
     * @param Request $request
     * @param Model   $warehouse
     *
     * @return Response
     */
    public function show(WarehouseRequest $request, Warehouse $warehouse)
    {

        if ($warehouse->exists) {
            $view = 'sales::warehouse.show';
        } else {
            $view = 'sales::warehouse.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('sales::warehouse.name'))
            ->data(compact('warehouse'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new warehouse.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(WarehouseRequest $request)
    {

        $warehouse = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('sales::warehouse.name')) 
            ->view('sales::warehouse.create', true) 
            ->data(compact('warehouse'))
            ->output();
    }

    /**
     * Create new warehouse.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(WarehouseRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $warehouse                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('sales::warehouse.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('sales/warehouse/' . $warehouse->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/sales/warehouse'))
                ->redirect();
        }

    }

    /**
     * Show warehouse for editing.
     *
     * @param Request $request
     * @param Model   $warehouse
     *
     * @return Response
     */
    public function edit(WarehouseRequest $request, Warehouse $warehouse)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('sales::warehouse.name'))
            ->view('sales::warehouse.edit', true)
            ->data(compact('warehouse'))
            ->output();
    }

    /**
     * Update the warehouse.
     *
     * @param Request $request
     * @param Model   $warehouse
     *
     * @return Response
     */
    public function update(WarehouseRequest $request, Warehouse $warehouse)
    {
        try {
            $attributes = $request->all();

            $warehouse->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('sales::warehouse.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('sales/warehouse/' . $warehouse->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('sales/warehouse/' . $warehouse->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the warehouse.
     *
     * @param Model   $warehouse
     *
     * @return Response
     */
    public function destroy(WarehouseRequest $request, Warehouse $warehouse)
    {
        try {

            $warehouse->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('sales::warehouse.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('sales/warehouse/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('sales/warehouse/' . $warehouse->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple warehouse.
     *
     * @param Model   $warehouse
     *
     * @return Response
     */
    public function delete(WarehouseRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('sales::warehouse.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('sales/warehouse'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/sales/warehouse'))
                ->redirect();
        }

    }

    /**
     * Restore deleted warehouses.
     *
     * @param Model   $warehouse
     *
     * @return Response
     */
    public function restore(WarehouseRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('sales::warehouse.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/sales/warehouse'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/sales/warehouse/'))
                ->redirect();
        }

    }

}
