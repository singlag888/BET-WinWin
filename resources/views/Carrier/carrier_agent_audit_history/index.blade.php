@extends('Carrier.layouts.app')
@section('content')
    <section class="content-header">
        <div class="left">
        </div>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary color-palette-box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-tag"></i>代理审核历史</h3>
                <div class="box-tools">
                    <ul class="pull-right pagination-sm pagination">
                    </ul>
                </div>
            </div>
            <div class="box-body">
                    @include('Carrier.carrier_agent_audit_history.table')
            </div>

            <div class="overlay" id="overlay" style="display: none">
                <i class="fa fa-refresh fa-spin"></i>
            </div>

        </div>
    </div>

    {!! TableScript::createEditOrAddModal() !!}

@endsection

