@extends('layout.app')
@section('content')
    <div class="container-xl">
        <h1 class="app-page-title">
            <a href="{{ route('university.index') }}">{{ $faculty->university->name }}</a>
            >
            <a href="{{ route('university.view', ['university' => $faculty->university_id]) }}">{{ $faculty->name }}</a>
            > Programs
        </h1>
    </div>
    <div class="app-card app-card-notification shadow-sm mb-4">
        <div class="app-card-header px-4 py-3">
            <form action="{{ route('faculty.submit') }}" method="POST">
                @csrf
                <div class="row g-3 align-items-center">
                    <input type="hidden" name="university_id" value="{{ $faculty->id }}">
                    <div class="col-md-6">
                        <label class="sr-only" for="signup-email">Program Name</label>
                        <input name="name" type="text" class="form-control signup-name" placeholder="Program Name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="sr-only" for="signup-email">Program Type</label>
                        <select class="form-select w-auto">
                            <option selected value="option-1">All</option>
                            <option value="option-2">This week</option>
                            <option value="option-3">This month</option>
                            <option value="option-4">Last 3 months</option>

                        </select>
                        {{-- <input name="name" type="text" class="form-control signup-name" placeholder="Program Type" required> --}}
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100 text-white">Add</button>
                    </div>
                </div>
            </form>
            <!--//row-->
        </div>
        <!--//app-card-header-->
    </div>
    <div class="app-card app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table app-table-hover mb-0 text-left">
                    <thead>
                        <tr>
                            <th class="cell">S.N.</th>
                            <th class="cell">Programs</th>
                            <th class="cell">Actions</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($uni->fac->all() as $item)
                            <tr>
                                <form action="{{ route('faculty.update', ['faculty' => $item->id]) }}" method="POST">
                                    @csrf
                                    <td class="cell">{{ $item->id }}</td>
                                    <td class="cell">
                                        <div class="col-md-12">
                                            <label class="sr-only" for="signup-email">Faculty / Institute
                                                Name</label>
                                            <input name="name" type="text" class="form-control signup-name"
                                                placeholder="Faculty / Institute Name" required value="{{ $item->name }}">
                                        </div>
                                    </td>
                                    <td class="cell ">
                                        <button class="btn btn-primary text-white">Update</button>
                                        <a href="{{ route('faculty.delete', ['faculty' => $item->id]) }}"
                                            class="btn btn-danger text-white">Delete</a>
                                        <a href="{{ route('faculty.view', ['faculty' => $item->id]) }}"
                                            class="btn btn-secondary text-white">View</a>
                                    </td>
                                </form>

                            </tr>
                        @endforeach

                    </tbody> --}}
                </table>
            </div>
            <!--//table-responsive-->

        </div>
        <!--//app-card-body-->
    </div>

@endsection
