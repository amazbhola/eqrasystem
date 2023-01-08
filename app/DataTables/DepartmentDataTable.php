<?php

namespace App\DataTables;

use App\Models\Department;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yyjra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DepartmentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function (Department $department) {

                $html = '<a class="bg-green-700 text-white text-xs rounded-sm hover:bg-green-400 p-1 shadow" href="'.route('department.edit',$department->id).'">Edit</a>';
                $html .= '<a class="bg-green-700 text-xs rounded-sm  p-1 ml-2 shadow" href="'.route('department.destroy',$department->id).'">Delete</a>';
                return $html;
            })
            ->editColumn('created_at',function (Department $department)
            {
                return $department->created_at->format('d-m-Y');
            })
            ->editColumn('updated_at',function (Department $department)
            {
                return $department->updated_at->diffForHumans();
            })->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Department $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Department $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('department-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('SL')->searchable(false)->orderable(false)->addClass('text-center'),
            Column::make('name')->title('Department Name'),
            Column::make('created_at')->title('Create Time')->addClass('text-center'),
            Column::make('updated_at')->title('Last Update')->addClass('text-center'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Department_' . date('YmdHis');
    }
}
