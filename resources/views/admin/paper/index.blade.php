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
                <div class="x_title text-right">
                    <a href="{{url('admin/paper/add')}}" class="btn btn-sm btn-primary">Add Paper</a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="boardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Board</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{url('admin/board/add')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Board Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                           value="{{old('name')}}"
                                           placeholder="Board Name">
                                    @error('name')
                                    <span class="text-danger text-sm pull-right">{{$errors->first('name')}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm btn-primary">Save Board</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="x_content">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Sr. No</th>
                                    <th class="column-title">Name</th>
                                    <th class="column-title no-link last">
                                        <span class="nobr">Action</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($papers as $key => $board)
                                    <tr class="even pointer">
                                        <td class=" ">{{$key+1}}</td>
                                        <td class=" ">{{ $board->name }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#editModal{{$board->id}}"><i class="fa fa-edit"></i></button>
                                            {{-- Delete Model --}}
                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$board->id}}"><i class="fa fa-trash"></i></button>
                                            <div class="modal fade" id="deleteModal{{$board->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <a class="btn btn-success px-3 py-1" href="{{ url('admin/board/delete', $board)}}">Yes</a>
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