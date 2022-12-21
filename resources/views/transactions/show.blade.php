@extends('layouts.master') @section('title','View Transactions')
@section('breadcrumbs')
<div class="page-title-box">
    <h4 class="page-title">Transactions</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">2021110029</a></li>
        <li class="breadcrumb-item"><a href="{{ route('transactions.index') }}">Transactions</a></li>
        <li class="breadcrumb-item active">View</li>
    </ol>
</div>
@endsection @section('page-content-wrapper')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">View Transaction</h4>
                    <p class="text-muted m-b-30"></p>
                        {{-- <div class="form-group row">
                            <label for="id" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-4">
                                <input
                                    class="form-control @error('id') is-invalid @enderror"
                                    type="text"
                                    maxlength="16"
                                    name="id"
                                    id="id"
                                    placeholder="16 digits..."
                                    value="{{ old('id') }}"/>
                                @error('id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="kategori" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-6">
                                <input
                                    class="form-control @error('kategori') is-invalid @enderror"
                                    type="text"
                                    name="kategori"
                                    id="kategori"
                                    value="{{ old('kategori') ?? $transaction->kategori }}" disabled/>
                                @error('kategori')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
                            <div class="col-sm-6">
                                <input
                                    class="form-control @error('nominal') is-invalid @enderror"
                                    type="number"
                                    name="nominal"
                                    id="nominal"
                                    min="0"
                                    value="{{ old('nominal') ?? $transaction->nominal }}" disabled/>
                                @error('nominal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tujuan" class="col-sm-2 col-form-label">Receiver</label>
                            <div class="col-sm-6">
                                <input
                                    class="form-control @error('tujuan') is-invalid @enderror"
                                    type="text"
                                    name="tujuan"
                                    id="tujuan"
                                    value="{{ old('tujuan') ?? $transaction->tujuan }}" disabled/>
                                @error('tujuan')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Account Name</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="account_id" name="account_id" disabled>
                                    @foreach($accounts as $account)
                                    @if ($transaction->account_id == $account->id)
                                    <option value="{{ $account->id }}" selected={{$transaction->account_id == $account->id}}>
                                        {{ $account->nama }}</option>
                                    @else
                                    <option value="{{ $account->id }}">{{ $account->nama }}</option>
                                    @endif
                                    @endforeach

                                </select>
                                @error('account_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <a
                                    href="{{ route('transactions.edit',$transaction->id) }}"
                                    class="btn btn-primary waves-effect m-l-5">
                                    Edit
                                </a>
                                <a
                                    href="{{ route('transactions.index') }}"
                                    class="btn btn-secondary waves-effect waves-light">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
    <!-- end page content-->
    @endsection