@extends('layouts.master')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>{{$title ?? ''}}</h3>
    </div>
</div>
<div class="">
    <div class="row" style="display: block;">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Sr. No</th>
                                    <th class="column-title">Name</th>
                                    <th class="column-title">Email</th>
                                    <th class="column-title">Status</th>
                                    <th class="column-title no-link last">
                                        <span class="nobr">Action</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($students as $key => $student)
                                    <tr class="even pointer">
                                        <td class=" ">{{$key+1}}</td>
                                        <td class=" ">{{ $student->name }}</td>
                                        <td class=" ">{{ $student->email }}</td>
                                        <td>
                                            <span class="badge {{ $student->status == 1? 'badge-success' : 'badge-danger' }}">{{ $student->status == 1? 'Active' : 'Inactive' }}</span>
                                        </td>
                                        <td>
                                            <a title="{{ $student->status == 1? 'Disapproved' : 'Approved' }}" href="{{url('admin/student/status' , $student)}}" class="btn btn-sm {{ $student->status == 1? 'btn-warning' : 'btn-success' }}">
                                                @if ($student->status == 1)
                                                <i class="fa fa-times"></i>
                                                @else
                                                <i class="fa fa-check"></i>
                                                @endif
                                            </a>
                                            {{-- Delete Model --}}
                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$student->id}}"><i class="fa fa-trash"></i></button>
                                            <div class="modal fade" id="deleteModal{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="row my-2">
                                                                <div class="col-12 text-center">
                                                                    <i class="fa-sharp fa-regular fa-circle-xmark " style="font-size: 70px;color:red"></i>
                                                                </div>
                                                                <div class="col-12 text-center">
                                                                    <h2 class="mt-2">Are you sure?</h2>
                                                                </div>
                                                                <div class="col-12 text-center">
                                                                    <span class="mt-2">Do you really want to these records ? This</span>
                                                                    <span class="mt-2 text-center">process cannot be undone.</span>
                                                                </div>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="col-12 text-center">
                                                                    <a class="btn btn-success px-3 py-1" href="{{ url('admin/student/delete', $student)}}">Yes</a>
                                                                    <button class="btn btn-danger  ml-1 px-3 py-1" data-dismiss="modal"> No</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <h4>No record Found</h4>
                                @endforelse
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection