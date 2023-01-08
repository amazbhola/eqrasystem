<?php

namespace App\DataTables;

use App\Models\Tender;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TenderDataTable extends DataTable
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
            ->addColumn('action', function($row){
                $html = '';
                $html = '<a class="bg-green-700 text-white text-xs rounded-sm hover:bg-green-400 p-1 shadow" href="'.route('department.edit',$row->id).'">Edit</a>';

                return $html;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Tender $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Tender $model)
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
                    ->setTableId('tender-table')
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

            Column::make('DT_RowIndex')->title('SL')->searchable(false)->orderable(false),
            Column::make('tender_id')->title('Tender ID'),
            Column::make('description')->title('Work Description'),
            Column::make('tender_security')->title('Pay Order'),
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
        return 'Tender_' . date('YmdHis');
    }
}
