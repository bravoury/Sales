            <table class="table" id="main-table" data-url="{!!guard_url('sales/warehouse?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="name">{!! trans('sales::warehouse.label.name')!!}</th>
                    <th data-field="origin_kg_fee">{!! trans('sales::warehouse.label.origin_kg_fee')!!}</th>
                    <th data-field="exchange_rate">{!! trans('sales::warehouse.label.exchange_rate')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>