@extends('layouts.default')


@section('head')

@endsection


@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-6 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-primary">로또 6/45</h5>
                                <p class="text-center mb-4">
                                    <span class="fw-bold" id="lotto_no">1회</span> 당첨 결과
                                    <br>
                                    <span class="fs-tiny" id="lotto_date">({{ date('Y-m-d') }})</span>
                                </p>
                                <p class="mb-4 text-center">
                                    <span class="badge badge-center rounded-pill" style="height: 3.5rem; width: 3.5rem;" id="no_1">1</span>
                                    <span class="badge badge-center rounded-pill" style="height: 3.5rem; width: 3.5rem;" id="no_2">1</span>
                                    <span class="badge badge-center rounded-pill" style="height: 3.5rem; width: 3.5rem;" id="no_3">1</span>
                                    <span class="badge badge-center rounded-pill" style="height: 3.5rem; width: 3.5rem;" id="no_4">1</span>
                                    <span class="badge badge-center rounded-pill" style="height: 3.5rem; width: 3.5rem;" id="no_5">1</span>
                                    <span class="fw-bold">+</span>
                                    <span class="badge badge-center rounded-pill" style="height: 3.5rem; width: 3.5rem;" id="no_6">1</span>
                                </p>
                                <p class="mb-4 text-center">
                                    <span class="fw-bold">당첨을 축하합니다!</span>
                                </p>
                                <div class="text-end">
                                    <a href="javascript:;" class="btn btn-sm btn-outline-primary">회차별 당첨번호 보러가기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('modal')

@endsection


@section('script')
    @include('main_js')
@endsection
