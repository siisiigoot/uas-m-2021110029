@extends('layouts.master') 

@section('title','Accounts List')

@section('breadcrumbs')
<div class="page-title-box">
    <h4 class="page-title">Responsive Table</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
        <li class="breadcrumb-item active">Responsive Table</li>
    </ol>
</div>
@endsection

@section('page-content-wrapper') 
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Example</h4>
                    <p class="text-muted m-b-30">This is an experimental awesome solution for responsive tables with complex data.</p>

                    <div class="table-rep-plugin">
                        <div class="table-responsive b-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table  table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th data-priority="1">ID Account</th>
                                    <th data-priority="1">Name</th>
                                    <th data-priority="1">Type</th>
                                    <th data-priority="2">Create Date</th>
                                    <th data-priority="2">Update Date</th>
                                    <th data-priority="1">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                    <td>597.74</td>
                                    <td>12:12PM</td>
                                    <td>14.81 (2.54%)</td>
                                    <td>582.93</td>
                                    <td>597.95</td>
                                    <td>597.73 x 100</td>
                                </tr>
                                <tr>
                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                    <td>597.74</td>
                                    <td>12:12PM</td>
                                    <td>14.81 (2.54%)</td>
                                    <td>582.93</td>
                                    <td>597.95</td>
                                    <td>597.73 x 100</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection